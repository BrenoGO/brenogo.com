$(document).ready(() => {
  $('#file').change(e => {
    const CFOP = $('#CFOP').val();
    const file = e.target.files[0];
    const fr = new FileReader();
    fr.onload = () => {
      const data = fr.result;
      const obj = extractFromBigData(data, CFOP.match(/\d+/g));
      console.log(obj);
      if (obj) {
        let table = `
        <table>
          <tr>
            <td>NFe</td>
            <td>CFOP</td>
            <td>Data</td>
            <td>Valor</td>
          </tr>
        `;
        obj.forEach(x => {
          table += `
          <tr>
            <td>${x.nNF}</td>
            <td>${x.CFOP}</td>
            <td>${x.date}</td>
            <td>${x.value}</td>
          </tr>
          `
        })
        table += '</table>';
        window.open('data:application/vnd.ms-excel,' + table)
      }
    }
    fr.readAsText(file);
  })
})

function extractFromBigData(data, CFOP = ['1202', '2202']) {
  const arr = data.split('\n');
  if (arr.length === 0) return false;

  const filt = arr.filter(item => {
    if(item.substring(0,2) !== '50') return false;
    const A = item.split(/\s+/g);
    const dataCFOP = A[2].substring(6,10);
    if(!CFOP.includes(dataCFOP)) return false;
    return true;
  });
  if(filt.length === 0) return false;
  console.log(filt);
  const org = filt.map(ln => {
    const A = ln.split(/\s+/g);
    const nNF = A[2].substring(0,6).replace(/^0+/,'');
    const CFOP = A[2].substring(6,10);
    const strValue = A[2].substring(A[2].length - 12, (A[2].length - 5)).replace(/^0+/,'')
    let value = '';
    if (!strValue) {
      if(A[2].slice(-1) === 'S') value = 'CANCELADA';
    } else value = strValue.slice(0,-2)+','+strValue.slice(-2);
    const year= A[1].substring(0,4);
    const month = A[1].substring(4,6);
    const day = A[1].substring(6,8);
    const date = `${day}/${month}/${year}`;   
    return {nNF, value, date, CFOP}
  });
  return org;
}





<?php

function dadosIdUsuario($dbh, $id) {
    $qr = 'select * from usuarios where id_usuario = ?';
    $values = [$id];
    $return = fetchAssoc($dbh,$qr,$values);
    return $return;
}
function dadosIdProd($dbh, $idProd){
    $qr = 'select * from produtos where id_prod = ?';
    $values = [$idProd];
    $return = fetchAssoc($dbh,$qr,$values);
    return $return;
}
function inverterDateFormat($data) {
    $ar = explode('-',$data);
    $x = $ar[2].'-'.$ar[1].'-'.$ar[0];
    return $x;
}
function editValue($value){
    $value = str_replace('.','',$value);
    $value = str_replace(',','.',$value);
    if($value == ''){
        return 0;
    }
    return $value;
}

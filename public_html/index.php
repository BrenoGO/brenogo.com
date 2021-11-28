<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>Breno G Oliveira</title>
	<meta charset="utf-8"/>
	<script src="js/jquery.min.js"></script>
	<script src="main.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="main.css" />
	<link rel="stylesheet" type="text/css" href="mobile.css" />
	<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body>
	<header>
		<div id="info">
			<h1 id="nameTitle">Breno Gaudereto Oliveira</h1>
			<span>Birth: 01/27/1989 - 
				<?php 
					$birth = new DateTime('1989-01-27');
					$now = new DateTime();
					$diff = $now->diff($birth);
					echo $diff->y;
				?>
			years</span>
			<span>Full Stack Web Developer</span>
			<span>* Getting better everyday in NodeJS and ReactJS.</span>
			<a target="_blank" href="/cv/Resume.pdf">Curriculum Vitae</a>
			<!-- <a target="_blank" href="/courses">Courses</a> -->
			<span>
				<a target="_blank" href="https://www.linkedin.com/in/breno-gaudereto-oliveira-0010bb22/"><img class="icon" src="imgs/icons/linkedin.png"/></a>
				<a target="_blank" href="https://github.com/BrenoGO"><img class="icon" src="imgs/icons/github.svg"/></a>
				<a target="_blank" href="https://api.whatsapp.com/send?phone=5531998004499"><img class="icon" src="imgs/icons/whatsapp.png"/></a>
				<a target="_blank" href="https://www.facebook.com/breno.g.oliveira.7"><img class="icon" src="imgs/icons/facebook.png"/></a>
				<a target="_blank" href="https://www.instagram.com/brenogaudereto/"><img class="icon" src="imgs/icons/instagram.png"/></a>
			</span>
		</div>
	</header>
	<div id="portfolio">
		<?php
			require 'projects.php';
			foreach ($projects as $key => $proj) {
				require 'components/project/index.php';
			}
		?>
	</div>
</body>
</html>

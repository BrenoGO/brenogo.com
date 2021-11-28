<?php
    //localhost
	
	// $host = 'localhost';
	// $user = 'root';
	// $pass = 'root';
	// $db = 'timer';
	
	//brenogo.tech/Tania
	
	$host = 'mysql.hostinger.com.br';
	$user = 'u355881160_time';
	$pass = '1q2w3e';
	$db ='u355881160_timer';
    
    try {
        $dbh = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8',$user,$pass);
    } catch (PDOException $e){
        exit($e);
    }

    // $dbh = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8',$user,$pass);
?>
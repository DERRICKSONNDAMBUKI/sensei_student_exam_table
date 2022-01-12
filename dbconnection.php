<?php

 $host='localhost';
 $user='root';
 $pass='';
 $dbname='student';

 $connect=mysqli_connect($host,$user,$pass,$dbname);
 if (!$connect) {

 	die("Failed to connect to database" .mysqli_error());
 	# code...
 }



?>
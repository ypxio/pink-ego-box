<?php

include_once('connect.php');

 $f_name 		= $_POST['f_name'];
 $l_name 		= $_POST['l_name'];
 $username 		= $_POST['username'];
 $password 		= $_POST['password'];
 $email 		= $_POST['email'];
 $date 			= $_POST['date'];
 $month 		= $_POST['month'];
 $year 			= $_POST['year'];
 $gender 		= $_POST['gender'];
 $occupation 	= $_POST['occupation'];

$join_date		= "10 October 2012";
$birth_date		= $date." ".$month." ".$year;

$query = "INSERT INTO user VALUES   (
									'$f_name',
									'$l_name',
									'$username',
									'$email',
									'$birth_date',
									'$gender',
									'$occupation',
									'$join_date',
									'null'
									)";

// $query_2 = "INSERT INTO login VALUES (
// 									 '$username',
// 									 '$password',
// 									 '$occupation'
// 									 )";

echo $query;

mysql_query($query);

// header("location: ../index.php");







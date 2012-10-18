<?php

include_once("DB.php");
include_once("connect.php");
include_once("function.php");

/*
 * REGISTER CODE
 */

// $data = array(
// 				'f_name' => 'Yuri',
// 				'l_name' => 'Pratama',
// 				'username' => 'yuripertamax',
// 				'password' => 'sawojajar',
// 				'email' => 'yuripertamax@gmail.com',
// 				'date' => '16-06-1991',
// 				'month' => 'male',
// 				'year' => 'student',
// 				'gender' => '15 Oktober 2012',
// 				'occupation' => '5',
// 				'join_date' => 'null',
// 				'avatar_url' => 'null'
// 			 );

// register($data);

/*
 * LOGIN
 */

$data = array(
				'username' => 'yuripertamax',
				'password' => 'sawojajar',
			 );

// print_r($data);
vodele_auth($data);

<?php

/*
 * vodeledb@localhost
 * 
 * ----------
 * user
 * ----------
 * first_name
 * last_name
 * username
 * email
 * birth_date
 * gender
 * occupation
 * join_date
 * avatar_url
 *
 * ----------
 * login
 * ----------
 * username	
 * password	
 * level
 *
 * ----------
 * user_log
 * ----------
 * username			varchar(255)	NO		NULL	
 * last_login		date			NO		NULL	
 * total_login		int(255)		NO		NULL	
 * channel_view		int(255)		NO		NULL	
 * active 			int(1)			NO		NULL	
 */


/*
 * 
 * register()
 * 
 * fungsi ini akan melakukan fungsi register / daftar
 * secara default, fungsi ini akan melakukan insert ke 3 tabel sekaligus, yaitu:
 * 1. user
 * 2. login
 * 3. user_log
 *
 * INPUT DATA
 * 
 * type : array
 * data :
 * 
 * first_name
 * last_name
 * username
 * password
 * email
 * birth_date
 * gender
 * occupation
 * join_date
 * avatar_url
 * 
 */
function register($arrdata)
{
	
	// DATA FETCH SECTION
	
	$f_name 		= $arrdata['f_name'];
 	$l_name 		= $arrdata['l_name'];
 	$username 		= $arrdata['username'];
 	$password 		= $arrdata['password'];
 	$email 			= $arrdata['email'];
 	$date 			= $arrdata['date'];
 	$month 			= $arrdata['month'];
 	$year 			= $arrdata['year'];
 	$gender 		= $arrdata['gender'];
 	$occupation 	= $arrdata['occupation'];

 	// $join_date 		= $arrdata['join_date'];
 	// $avatar_url 	= $arrdata['avatar_url'];

 	// DATA INITIALIZE
 	
 	$active			= "0";
 	$total_login	= 0;
 	$channel_view	= 0;
 	$last_login		= "undefined";

 	$join_date		= "undefined";
 	$avatar_url		= "undefined";

	// DATA PROCESS
	
	$birth_date		= $date." ".$month." ".$year;
	$level			= $occupation;

	// QUERY SECTION
	
	$query = "INSERT INTO user VALUES   
	(
		'$f_name',
		'$l_name',
		'$username',
		'$email',
		'$birth_date',
		'$gender',
		'$occupation',
		'$join_date',
		'$avatar_url'
	)";

	mysql_query($query);

	$query = "INSERT INTO login VALUES
	(
		'$username',
		'$password',
		'$level'
	)";

	mysql_query($query);

	$query = "INSERT INTO user_log VALUES
	(
		'$username',
		'$last_login',
		$total_login,
		$channel_view,
		'$active'
	)";

	mysql_query($query);

	echo $query;
}

/*
 * auth()
 *
 * fungsi ini digunakan untuk authorization
 */

function vodele_auth($arrdata)
{
	// DATA FETCH
	
	$username = $arrdata['username'];
	$password = $arrdata['password'];

	// QUERY
	
	$query = "SELECT * FROM login where username = '$username' and password = '$password'";
	
	$result = mysql_query($query);
	$total = mysql_num_rows($result);

	if($total==0)
	{
		return false;
		// echo "login failed";
	}
	else
	{
		return true;
		// echo "login success";
	}
}

function update_user($arrdata)
{

}

function update_login($arrdata)
{

}

function update_log($arrdata)
{
	
}

function debug()
{
	echo "<pre>";
	print_r($_POST);
	print_r($_FILES);
}







/*
 *
 * ------------------------------------------
 * END USER
 * ------------------------------------------
 * 
 * create_user - daftar
 * auth_user - login
 * update_user - update
 *
 * get_video - list seluruh video / tertentu - array
 * upload_video 
 * update_video
 * delete_video
 * add_to_favourite
 *
 * get_course - list seluruh course / tertentu
 * create_course
 * update_course
 * delete_course
 *
 * create_comment
 * delete_comment
 *
 * ----------------------------------------
 * SUPER ADMIN / BACK END / ADMINISTRATOR
 * ----------------------------------------
 * create, retreieve, update, delete semua tabel di database
 * 
 *
 * 
 *
 * 
 * 
 */















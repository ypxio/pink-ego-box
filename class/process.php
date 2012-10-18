<?php

session_start();

// ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);

include_once("DB.php");
include_once("connect.php");
include_once("function.php");
include_once("define.php");

$action = $_GET['action'];

debug();

switch($action)
{

	/*
	 * --------------------------------------------
	 * SIGNUP ROLES
	 * --------------------------------------------
	 * 
	 */
	
	case 'signup':

	$username = $_POST['username'];

	
	$path_user_current = USER_FOLDER.$username;
	$path_user_video = $path_user_current."/video";
	$path_user_course = $path_user_current."/course";

	mkdir($path_user_current, 0777);
	mkdir($path_user_video, 0777);
	mkdir($path_user_course, 0777);

	chmod($path_user_current, 0777);
	chmod($path_user_video, 0777);
	chmod($path_user_course, 0777);

	// register($_POST);

	break;

	/*
	 * --------------------------------------------
	 * LOGIN ROLES
	 * --------------------------------------------
	 * 
	 */
	
	case 'login':
	
	// $username = $_POST['username'];
	// $password = $_POST['password'];
	$auth = vodele_auth($_POST);

	if($auth==true)
	{
		$_SESSION['LOGIN'] = "1";
		$_SESSION['USERNAME'] = $_POST['username'];
	}
	else
	{
		$_SESSION['LOGIN'] = "0";
	}

	header("Location: ../index.php");

	break;

	/*
	 * --------------------------------------------
	 * LOGOUT ROLES
	 * --------------------------------------------
	 * 
	 */
	
	case 'logout':
	// $_SESSION['login'] = "0";
	session_destroy();
	header("Location: ../index.php");
	break;

	/*
	 * --------------------------------------------
	 * UPLOAD VIDEO ROLES
	 * --------------------------------------------
	 *
	 * upload video rules
	 *
	 * upload ke tempat yang sudah disediakan
	 * ffmpeg : convert video file
	 * yamdi : inject metadata
	 * flvinfo : extract metadata
	 * 
	 */
	
	case 'upload':

	// $temp_video_name = md5($_SESSION['USERNAME']);

	// // $ori_video_name = basename($_FILES['video_file']['name']);


	// $video_path = "../video/";

	// $_FILES['video_file']['name'] = $temp_video_name;
	// $ffmpeg_video_name = "ff_".$temp_video_name.".flv";
	// $fin_video_name = "v_".$temp_video_name.".flv";

	// $current_path = $video_path . $temp_video_name; 
	// $current_path_ffmpeg = $video_path . $ffmpeg_video_name; 
	// $current_path_final = $video_path . $fin_video_name; 

	// // print_r($_FILES);
	// move_uploaded_file($_FILES['video_file']['tmp_name'], $current_path);

	// exec("ffmpeg -i $current_path -b 64k $current_path_ffmpeg");

	// exec("yamdi -i " . $current_path_ffmpeg . " -o ". $current_path_final);
	// // exec("rm $target_path");
	// exec("rm $current_path_ffmpeg");

	break;

}
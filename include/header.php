<?php

session_start();

?>

<html>
<head>	

	<title>Vodele | Video On Demand with E-learning System</title>

	<link rel="stylesheet/less" type="text/css" href="assets/css/style.less">
	<link rel="stylesheet/less" type="text/css" href="assets/css/flowplayer/control_mod.less">
	
	<!-- <link rel="stylesheet/less" type="text/css" href="style.css"> -->
	
	<script src="assets/js/less.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery-latest.min.js" type="text/javascript"></script>

</head>
<body>

<?php

include_once("class/define.php");



?>



<script type="text/javascript">

$(document).ready(function(){

	$("li#signin").click(function(){

		// alert("login");
		
		$('#login_popup').fadeToggle("slow");

	});
	
	$("#upload_video").click(function(){
		$(this).val("Uploading Video on progressssss.....");
	});


});

</script>


<header>
	
		
	<div class="container">

		<div id="login_popup" style="display: none">
			<!-- ini login popup -->

			<div class="arrow-right"></div>
			<h3>
			Enter your username and password <br>
			</h3>

			<form action="<?php echo BASE_URL ?>/class/process.php?action=login" method="POST">
				<input type="text" class="nonblock" name="username" placeholder="Username"/>
				<input type="text" class="nonblock" name="password" placeholder="Password"/>
				<br>
				<input type="submit" class="button right" value="Login"/>
			</form>

			<p class="right">
				<a href="">Forgot your password?</a>
			</p>
		</div>

		<img class="logo" src="assets/images/logo.png"/>

		<nav class="login inline">
			<ul>
		<?php

			

			if(!isset($_SESSION["LOGIN"]) or $_SESSION['LOGIN']=="0")
			{

		?>
				<li id="signin"><a>SIGN IN</a></li>
				<li><a href="<?php echo BASE_URL ?>/signup.php">JOIN VODELE</a></li>
		<?php
			
			}
			else
			{

		?>
				<li><a>Welcome, <?php echo $_SESSION['USERNAME'] ?> !</a></li>
				<li><a href="<?php echo BASE_URL ?>/class/process.php?action=logout">Logout</a></li>
		<?php

			}
		
		?>
			</ul>	
		</nav>


	</div>
</header>

<section id="hero">
	<div class="container">
	HERO UNIT. WILL BE USED FOR SLIDE SHOW
	</div>
</section>

<nav id="primary_menu" class="inline">
	<div class="container">
		<ul class="left">
			<li><a class="active" href="">Home</a></li>
			<li><a href="">Categories</a></li>
			<li><a href="">Videos</a></li>
			<li><a href="">Channels</a></li>
			<li><a href="">Courses</a></li>
		</ul>

		<?php

		if($_SESSION['LOGIN']=="1")
		{
		
		?>
		
		<ul class="right">
			<li><a href="">My Profile</a></li>
			<li><a href="<?php echo BASE_URL ?>/upload_video.php">Upload Videos</a></li>
		</ul>

		<?php

		}

		?>

	</div>
	
</nav>

<script type="text/javascript">



</script>


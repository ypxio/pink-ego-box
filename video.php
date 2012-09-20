<?php

$page = "video";
if($page=="video")
{
	$full_width = true;
}

include_once("header.php");
include_once("sidebar.php");

?>

<script type="text/javascript" src="assets/js/flowplayer/flowplayer-3.2.11.min.js"></script>
<script type="text/javascript" src="assets/js/flowplayer/flowplayer.controls-3.2.10.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/flowplayer/control_mod.css">

		<!-- <section id="mainbar"> -->
		<section id="mainbar" class="full_width">

			<h1 class="title">[TIPS] How To Destroy a Custom Manson Guitar Using Node JS and Express Framework - Part 68</h1>

			<div id="main_content">

				<div id="video_full">
					<a style="width:320px;height:480px" id="player"></a> 
					<div id="hulu" class="hulu"></div>
				</div>
				<!-- <div id="hulu" class="hulu"></div> -->

					<script>
						$f("player", "assets/js/flowplayer/flowplayer-3.2.14.swf",{
							clip:
							{
								url: 'example.flv',
							},

							// streaming plugins are configured normally under the plugins node
							plugins:
							{ 
								controls: null
							}
							
						}).controls("hulu", {duration: 25});

					</script>

				<section id="video_desc">
					<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry.
					<a class="link" href="">Lorem Ipsum</a> has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
					It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						<code>
							echo "Lorem Ipsum Dolor Dolor Sekalian";
						</code>
				</section>

			</div> <!-- main_content -->

		</section> <!-- mainbar -->

	</div>
</section>

<?php

include_once("footer.php");

?>
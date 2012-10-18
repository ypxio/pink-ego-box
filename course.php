<?php

$page = "video";
if($page=="video")
{
	$full_width = true;
}

include_once("include/header.php");
include_once("include/sidebar.php");

?>

<script type="text/javascript" src="assets/js/flowplayer/flowplayer-3.2.11.min.js"></script>
<script type="text/javascript" src="assets/js/flowplayer/flowplayer.controls-3.2.10.min.js"></script>

		<!-- <section id="mainbar"> -->
		<section id="mainbar" class="full_width">

			<h1 class="title">Node JS From Scratch</h1>

			<div id="main_content">

				<!-- <img class="channel_img" src="dss"/> -->

				<div class="border">
					<img src="assets/images/node.png" class="channel_img">
				</div>

				<section id="video_desc">
					<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry.
					<a class="link" href="">Lorem Ipsum</a> has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
					It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						<code>
							echo "Lorem Ipsum Dolor Dolor Sekalian";
						</code>
				</section>

				<ul id="video_list">
					<li class="list_title">
						Getting Started
					</li>
					<li>
						<span class="left">Installing Node</span>
						<span class="right">4m 25s</span>
					</li>

					<li>
						<span class="left">Installing Node</span>
						<span class="right">4m 25s</span>
					</li>
				</ul>

			</div> <!-- main_content -->

		</section> <!-- mainbar -->

	</div>
</section>

<?php

include_once("include/footer.php");

?>
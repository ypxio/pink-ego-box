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
								url: 'assets/videos/example.flv',
							},

							// streaming plugins are configured normally under the plugins node
							plugins:
							{ 
								controls: null
							}
							
						}).controls("hulu", {duration: 25});

					</script>

				<section id="video_meta">

					<div class="left">
						Course By : <a href="">Yuri Pratama</a><br>
						From Courses : <a href="">Node JS From Scratch</a>
					</div>
					<div class="right">
						<a href="" class="button">Like</a>
						<a href="" class="button">Add to Favourite</a>
						<a href="" class="button">Download</a>
						<!-- &nbsp; -->
						<!-- &nbsp; -->
						<br>
						<!-- <a href="" class="button">Prev</a>
						<a href="" class="button">Next</a> -->
					</div>

				</section>

				<section id="video_desc">
					<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry.
					<a class="link" href="">Lorem Ipsum</a> has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
					It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						<code>
							echo "Lorem Ipsum Dolor Dolor Sekalian";
						</code>
				</section>

				<h1 class="sub_title">Comments</h1>

				<section id="comment">

							<textarea rows="10" cols="30">
							</textarea>
					<ul>
						<li>
							<img src=""/>
							<div class="comment_meta">
								<span class="username">yuripertamax</span>
								<span class="date">Saturday, 6 October 2012</span>
							</div>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry.
								Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							</p>
						</li>

						<li>
							<img src=""/>
							<div class="comment_meta">
								<span class="username"><a href="">yuripertamax</a></span>
								<span class="date">Saturday, 6 October 2012</span>
							</div>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry.
								Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
								It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
								It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
								Lorem Ipsum is simply dummy text of the printing and typesetting industry.
								Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
								It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
								It was 
							</p>
						</li>
					</ul>

				</section>
				<!-- <section id="video_desc">
					<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry.
					<a class="link" href="">Lorem Ipsum</a> has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
					It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						<code>
							echo "Lorem Ipsum Dolor Dolor Sekalian";
						</code>
				</section> -->

			</div> <!-- main_content -->

		</section> <!-- mainbar -->

	</div>
</section>

<?php

include_once("include/footer.php");

?>
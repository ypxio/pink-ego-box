<?php

include_once("include/header.php");
include_once("include/sidebar.php");

?>

		<!-- <section id="mainbar"> -->
		<section id="mainbar" class="half_width">
			
			<h1 class="title">Upload Your Video</h1>
			<div id="main_content">

			<form action="<?php echo BASE_URL ?>/class/process.php?action=upload" enctype="multipart/form-data" method="POST">

				<!-- ---------------------------------------------------------- USERNAME ---------------- -->
				<label>Video Title</label>
				<input type="text" name="video_title"/>

				<!-- ---------------------------------------------------------- USERNAME ---------------- -->
				<label>Video Description</label>
				<textarea rows="10" cols="30" name="video_desc"></textarea>

				<!-- ---------------------------------------------------------- USERNAME ---------------- -->
				<label>Choose Your Video File</label>
				<input type="file" name="video_file"/>

				<!-- ---------------------------------------------------------- PASSWORD ---------------- -->
				<label>Category</label>
				<select class="block" name="category">
					<option value="1">Networking</option>
					<option value="2">Artificial Inteligence</option>
					<option value="3">Programming</option>
				</select>
				
				<!-- ---------------------------------------------------------- PASSWORD CONFIRM ---------------- -->
				<label>Tags</label> separated by comma
				<input type="text" name="video_tag"/>
				

				<!-- ---------------------------------------------------------- GENDER ---------------- -->
				<label>Video Permissions</label>
				<div class="inputgroup">
				<input type="checkbox" name="allow_comments" value="1"/> Allow Comments on video page
				</div>

				<input type="submit" class="button" id="upload_video" value="Upload Video"/>
				<!-- <input type="submit" class="button" value="Want to make course?"/> -->
			</form>
			
			</div>

		</section> <!-- mainbar -->

	</div>
</section>

<?php

include_once("include/footer.php");

?>
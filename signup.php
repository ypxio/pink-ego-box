<?php

include_once("include/header.php");
include_once("include/sidebar.php");

?>

		<!-- <section id="mainbar"> -->
		<section id="mainbar" class="half_width">
			
			<h1 class="title">Sign Up</h1>
			<div id="main_content">

			<form action="<?php echo BASE_URL ?>/class/process.php?action=signup" method="POST">

				<!-- ---------------------------------------------------------- USERNAME ---------------- -->
				<label>First Name</label>
				<input type="text" name="f_name"/>

				<!-- ---------------------------------------------------------- USERNAME ---------------- -->
				<label>Last Name</label>
				<input type="text" name="l_name"/>

				<!-- ---------------------------------------------------------- USERNAME ---------------- -->
				<label>Username</label>
				<input type="text" name="username"/>

				<!-- ---------------------------------------------------------- PASSWORD ---------------- -->
				<label>Password</label>
				<input type="text" name="password"/>
				
				<!-- ---------------------------------------------------------- PASSWORD CONFIRM ---------------- -->
				<label>Confirm Password</label>
				<input type="text" name="passwordconf"/>
				
				<!-- ---------------------------------------------------------- EMAIL ---------------- -->
				<label>Email</label>
				<input type="text" name="email"/>
				
				<!-- ---------------------------------------------------------- DATE OF BIRTH ---------------- -->
				<label>Date Of Birth</label>
				<div class="inputgroup">
				<select name="date">
					<option> -- Date -- </option>

					<?php
					for($i=1;$i<=31;$i++)
					{
						echo "<option value='$i'>$i</option>";
					}
					?>
					
				</select>
				<select name="month">
					<option> -- Month -- </option>
					<option>January</option>
					<option>Februari</option>
					<option>March</option>
					<option>April</option>
					<option>May</option>
					<option>June</option>
					<option>July</option>
					<option>August</option>
					<option>September</option>
					<option>October</option>
					<option>November</option>
					<option>Desember</option>
				</select>
				<select name="year">
					<option selected> -- Year -- </option>
					<?php
					for($i=1950;$i<=2050;$i++)
					{
						echo "<option value='$i'>$i</option>";
					}
					?>
				</select>
				</div>

				<!-- ---------------------------------------------------------- GENDER ---------------- -->
				<label>Gender</label>
				<div class="inputgroup">
				<input type="radio" name="gender" value="male"/> Male
				<br>
				<input type="radio" name="gender" value="female"/> Female
				</div>

				<!-- ---------------------------------------------------------- OCCUPATION ---------------- -->
				<label>Occupation</label>
				<div class="inputgroup">
				<input type="radio" name="occupation" value="student"/> Student
				<br>
				<input type="radio" name="occupation" value="professor"/> Professor
				<br>
				<input type="radio" name="occupation" value="staff"/> Staff
				</div>

				<input type="submit" class="button" value="Sign Up"/>
			</form>
			
			</div>

		</section> <!-- mainbar -->

	</div>
</section>

<?php

include_once("include/footer.php");

?>
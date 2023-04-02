<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class="box">
		<!--obstructing people to view page sorce-->
		<?php
	ob_start("obfuscate");

	function obfuscate($buffer) {
	    $search = array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s');
	    $replace = array('>', '<', '\\1');
	    $buffer = preg_replace($search, $replace, $buffer);
	    return $buffer;
	}
?>
<!--form start-->
	<form method="post" action="submit.php" enctype="multipart/form-data">
		<h1>Contact Form</h1>
		<label>Title*</label>
		<select name="title" required>
			<option value="">Select Title</option>
			<option value="Mr">Mr</option>
			<option value="Mrs">Mrs</option>
			<option value="Ms">Ms</option>
		</select>
		<br><br>
		<label>First Name*</label>
		<input type="text" name="firstname" required>
		<br><br>
		<label>Last Name*</label>
		<input type="text" name="lastname" required>
		<br><br>
		<label>Date of Birth</label>
		<input type="date" name="dob" pattern="\d{2}-\d{2}-\d{4}" max="31-12-9999">
		<br><br>
		<label>Telephone*</label>
		<input type="tel" name="telephone" pattern="[0-9]{10}" required>
		<br><br>
		<label>File Upload</label>
		<input type="file" name="file" accept=".pdf,.jpg,.jpeg,.png" >
		<br><br>
		<label>Email*</label>
		<input type="email" name="email" required>
		<br><br>
		<label>Message</label>
		<textarea name="message" maxlength="300"></textarea>
		<br><br>
		<input type="submit" name="submit" value="Submit"> <input type="reset" name="reset" value="Reset">
	</form>
</div>
</body>
</html>

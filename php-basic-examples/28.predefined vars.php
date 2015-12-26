<!DOCTYPE html>
<html>
<head>
	<title>predefined arrays</title>
</head>
<body>
<form method="post" style="width: 250" text-allign="left">
	<ul type="none">
		<li>Name: <input type="text" name = "name" id="name" placeholder = "Enter your name" /></li>
		<li>Email: <input type="email" name="mail" id="mail" placeholder = "Enter you email" /></li>
		<li>Phone number: <input type="phone" name="phone" id="phone" placeholder = "Enter you phone number" /></li>
		<li><input type="submit" value="register" /></li>
		<li><input type="hidden" name="sec" value="secret field" /></li>
	</ul>
</form>
<?php
echo "<br />";
echo "<pre>";
print_r($_POST);
echo "<pre />";
?>
</body>
</html>

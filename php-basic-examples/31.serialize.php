<!DOCTYPE html>
<html>
<head>
	<title>Serializing of the form</title>
</head>
<body>
<form method="POST">
	<tr>
		<td>
			Username:
		</td>
		<td>
			<input type="text" name="un" id="un" placeholder = "Please enter your Username here" />
		</td>
	</tr>
	<tr>
		<td>
			Email:
		</td>
		<td>
			<input type="Email" name="em" id="em" placeholder = "Please enter your Email here" />
		</td>
	</tr>
	<tr>
		<td>
			Message:
		</td>
		<td>
			<textarea name="tm" id="tm" placeholder = "Please enter your Username here"></textarea>
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" value="ok">
		</td>
	</tr>
</form>
<br />
<?php
$a=serialize($_POST);
echo "$a";
echo "<br />";
echo "<pre>";
print_r ($_POST);
echo "<pre />";
echo "<br />";
$b=unserialize($a);
echo "<pre>";
print_r ($b);
echo "<pre />";?>
</body>
</html>

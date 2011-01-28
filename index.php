<html>
<title>User Authentication</title>
<body>
<form method="POST">
	Auth Code : <input type="text" name="input"/> <br />
	<input type="submit" />
</form>


<?php

include 'compute.php';

$input = $_POST["input"];

if ($input % $x == 1)
	echo "<br />User Authenticated!";

else
	echo "<br />User not Authenticated!";

?>
<br /><br /><br /><br />
<a href="device.php">Click here to get the Auth Code</a>
</body>
</html>
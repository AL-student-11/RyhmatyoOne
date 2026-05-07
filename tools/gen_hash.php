<form action="" method="post">
	<input name="pass" type="text">
	<input type="submit">
</form>

<?php
	if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["pass"])) {
		echo $_POST["pass"] . " : " . password_hash($_POST["pass"], PASSWORD_DEFAULT, ["cost" => 15]);
	}
?>

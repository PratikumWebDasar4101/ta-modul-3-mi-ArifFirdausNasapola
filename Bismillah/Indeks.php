<?php
session_start();
if (isset($_SESSION["username"])) {
	$username = $_SESSION["username"];
	echo "Selamat datang $username";
	echo "<a href='Awal.php'><br>Upload</a> | <a href='Logout.php'>Logout</a>";
}else {
	header("Location: Login.html");
}
?>
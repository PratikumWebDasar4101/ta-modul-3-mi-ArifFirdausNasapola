<?php 	
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if($username == "arif" and $password == "123"){
	$_SESSION["username"] = $username;
	header("Location: Indeks.php");
}else{
	echo("Login Gagal");
}
?>
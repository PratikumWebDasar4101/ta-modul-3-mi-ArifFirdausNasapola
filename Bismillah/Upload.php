<?php 
session_start();
if (isset($_SESSION["username"])) {
	include("Koneksi.php");

	$nama = $_POST["nama"];
	$nim = $_POST["nim"];
	$fakultas = $_POST["fakultas"];
	$jenkel = $_POST["jenkel"];

	$dir = "uploads/";
	$nama_file = $_FILES["file_gbr"]["name"];
	$nama_file_tmp = $_FILES["file_gbr"]["tmp_name"];
	$target_file = $dir . $nama_file;

	$sql = "INSERT into informasi values('$nim','$nama','$fakultas','$jenkel','$nama_file');";

	if (mysqli_query($conn, $sql) and move_uploaded_file($nama_file_tmp, $target_file)) {
		echo "Data anda telah berhasil disimpan";
	}else {
		echo "Terjadi Kesalahan" . mysqli_connect_error();
	}
}else {
	header("Location: Login.html");
}
?>
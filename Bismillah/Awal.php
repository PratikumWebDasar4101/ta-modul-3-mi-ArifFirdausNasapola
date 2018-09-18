<?php 
session_start();
if (isset($_SESSION["username"])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title> Form Login</title>
</head>
<body>
		<form action="Upload.php" method="POST" enctype="multipart/form-data">
				Nama User		: <input type="text" name="nama" value = ""><br><br>
				NIM				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
				<input type="number" name="nim"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
			
			<select name = "fakultas">
				
					<option value="FIF">Fakultas Informatika</option> 
					<option value="FTE">Fakultas Teknik Elektro </option>
					<option value="FRI">Fakultas Rekayasa Industri</option> 
					<option value="FIK">Fakultas Industri Kreatif</option> 
					<option value="FKB">Fakultas Komunikasi Bisnis</option>
					<option value="FEB">Fakultas Ekonomi dan Bisnis</option>
					<option value="FIT">Fakultas Ilmu Terapan</option>
			</select>
			<br><br>
				Jenis Kelamin	: 
					<input type="radio" name="jenkel" value="Laki"/>Laki-laki
					<input type="radio" name="jenkel" value="Perempuan"/>Perempuan<br/>
					<br/>

				File Gambar		:
					<input type="file" name="file_gbr" id="file_gbr" ><br/>

				<input type="submit" value="Kirim"></td>
			
</form>
</body>
</html>

<?php 
}else {
	header("Location: Login.html");
}
?>
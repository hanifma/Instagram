<html>
<head>
<title>Untitled Document</title>
</head>

<body>
<center>Akun Anda Berhasil Dibuat<br>
<table>
	<?php
		$nama=$_POST["nama"];
		$email=$_POST["email"];
		$notelepon=$_POST["notelepon"];
		$password=$_POST["password"];
		$password=str_repeat("*",strlen("password"));

		echo"<tr><td>Nama</td><td>:</td><td>$nama</td></tr>";
		echo"<tr><td>Nama Pengguna</td><td>:</td><td>$user</td></tr>";
		echo"<tr><td>Email</td><td>:</td><td>$email</td></tr>";
		echo"<tr><td>No Telepon</td><td>:</td><td>$notelepon</td></tr>";
		echo"<tr><td>Password</td><td>:</td><td>$password</td></tr>";
	?>
</body>
</html>

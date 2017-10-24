<html>
<head>
<title>Untitled Document</title>
</head>
<style type="text/css">
	
</style>
<body>

<table>
	<?php
		$host="localhost";
		$user="root";
		$password="";
		$database="dbinstagram";

		$nama=$_POST["name"];
		$username=$_POST["username"];
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$passwordig=$_POST["passwordig"];
		$passwordig=str_repeat("*",strlen("passwordig"));

		echo"<tr><td>Nama</td><td>:</td><td>$nama</td></tr>";
		echo"<tr><td>Nama Pengguna</td><td>:</td><td>$username</td></tr>";
		echo"<tr><td>Email</td><td>:</td><td>$email</td></tr>";
		echo"<tr><td>No Telepon</td><td>:</td><td>$phone</td></tr>";
		echo"<tr><td>Password</td><td>:</td><td>$passwordig</td></tr></table>";

		if($nama)
		{
			$conn=mysql_connect($host,$user,$password);
			$sql="insert into tinstagram values('$nama','$username','$email','$phone','$passwordig')";
			$hasil=mysql_query($sql,$conn);
			echo "Akun Anda Berhasil Dibuat";
		}
	?>
</body>
</html>

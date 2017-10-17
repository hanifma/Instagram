<html>
<style>
	body{
		padding-top: 50px;
		text-align: center;
		background-color:aqua ;
	}
	h2{
		font-family: chiller;
		font-size: 42px;
	}
	button{
		color:white;
		background-color:#348fe4;
		display:inline-block;
		border-color: white;
		border-radius: 3px;
		width:200px;
		height:30px;
		margin-top: 10px;
		margin-bottom: 10px;

	}
	.button{
		color:white;
		background-color:#348fe4;
		display:inline-block;
		border-color: white;
		border-radius: 3px;
		width:100px;
		height:30px;
		margin-bottom: 0px;
	}
	#content .table table tr td input{
		display:inline-block;
		border-radius: 3px 3px;
		padding:10px;
		width:250px;
	}
	.footer{
		padding-top: 10px;
	}
</style>
<body>

	<div id="title>"
		<center><h2>Instagram</h2>
	</div>

	<div id="content">
		
		<div class="sub">
			Buat akun untuk melihat foto dan<br>
			video dari teman Anda
		</div>

		<button>
		Masuk dengan Facebook
		</button>

		<br>Atau<br><br>

	<form action="hasil.php" method="POST">

		<div class="table">
		<table border=0 align="center">
			<tr>
				<td>
					<input type="text" name="nama" placeholder="Nama">
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="user" placeholder="Nama Pengguna">
				</td>
			</tr>
			<tr>
				<td>
					<input type="Email" name="email" placeholder="Email">
				</td>
			<tr>
			<tr>
				<td>
					<input type="text" name="notelepon" placeholder="No Telefon">
				</td>
			</tr>
			<tr>
				<td>
					<input type="password" name="password" class="password" placeholder="Password">
				</td>
			</tr>				
		</table>
		</div>

		<br>
		<input type="submit" value="Daftar" class="button">
		</center>

		<div class="footer">
			Dengan Mendaftar, Anda Menyeujui Ketentuan & Kebijakan Privasi Kami <br><br><br>
			Punya Akun? <a href="#">Masuk</a>
		</div>
	</div>
	</form>
</body>
</html>
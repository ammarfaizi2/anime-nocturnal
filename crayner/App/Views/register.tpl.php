<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<style type="text/css">
		body{
			font-family: Tahoma;
		}
		.fcg{

		}
		.tbf{
			margin: 3%;
			border: 3px solid black;
			padding: 3% 7% 10% 7%;
		}
		.tbd{
			margin-top: 4%;
		}
		.mgt{
			margin-top: 3%;
		}
	</style>
</head>
<body>
<center>
	<div class="fcg">
		<form action="<?php print base_url().'/register/action';?>" method="post">
			<table class="tbf">
				<thead>
					<tr><th colspan="3"><h2>Pendaftaran RedAngel</h2></th></tr>
				</thead>
				<tbody>
					<tr><td>Nama Lengkap</td><td>:</td><td><input type="text" name="nama"
					></td></tr>
					<tr><td>Alamat</td><td>:</td><td><input type="email" name="nama"></td></tr>
					<tr><td>Tanggal Lahir</td><td>:</td><td><?php print $tanggal_lahir; ?></td></tr>
					<tr><td>Alamat</td><td>:</td><td><textarea name="alamat"></textarea></td></tr>
					<tr><td colspan="3"><div class="mgt"></div></td></tr>
				</tbody>
				<thead>
					<tr><th colspan="3"><h3>Buat Akun</h3></th></tr>
				</thead>
				<tbody>
					<tr><td>Username</td><td>:</td><td><input type="text" name="username"></td></tr>
					<tr><td>Password</td><td>:</td><td><input type="password" name="password"></td></tr>
					<tr><td>Konfirmasi Password</td><td>:</td><td><input type="password" name="cpassword"></td></tr>
				</tbody>
			</table>
		</form>
	</div>
</center>
</body>
</html>
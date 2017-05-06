<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<?php print css('register'); ?>
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
					<tr><td>Nama Lengkap</td><td>:</td><td><input required type="text" name="nama"
					></td></tr>
					<tr><td>Alamat</td><td>:</td><td><input type="email" name="nama"></td></tr>
					<tr><td>Tanggal Lahir</td><td>:</td><td><?php print $tanggal_lahir; ?></td></tr>
					<tr><td>Alamat</td><td>:</td><td><textarea required name="alamat"></textarea></td></tr>
					<tr><td colspan="3"><div class="mgt"></div></td></tr>
				</tbody>
				<thead>
					<tr><th colspan="3"><h3>Buat Akun</h3></th></tr>
				</thead>
				<tbody>
					<tr><td>Username</td><td>:</td><td><input required type="text" name="username"></td></tr>
					<tr><td>Password</td><td>:</td><td><input required type="password" name="password"></td></tr>
					<tr><td>Konfirmasi Password</td><td>:</td><td><input required type="password" name="cpassword"></td></tr>
				</tbody>
				<tfoot>
					<tr><td colspan="3"><div class="mgt"><input type="hidden" name="rgtoken" value="<?php print $rgtoken; ?>"></div></td></tr>
					<tr><th colspan="3"><input type="submit" name="register" value="Daftar"></th></tr>
				</tfoot>
			</table>
		</form>
	</div>
</center>
</body>
</html>
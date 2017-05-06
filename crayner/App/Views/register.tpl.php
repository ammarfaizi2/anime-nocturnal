<!DOCTYPE html>
<html>
<head>
<?php 

$v = function($vz,$q=0) use($ps) {
	print ($q==1 and isset($ps[$vz])) ? $ps[$vz] : (isset($ps[$vz])?' value="'.$ps[$vz].'" ':'');
}
?>
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
					<tr><td>Nama Lengkap</td><td>:</td><td><input <?php $v('nama');?> required type="text" name="nama"
					></td></tr>
					<tr><td>Tempat Lahir</td><td>:</td><td><input <?php $v('tmplahir');?> required type="text" name="tmplahir"></td></tr>
					<tr><td>Tanggal Lahir</td><td>:</td><td><?php print $tanggal_lahir; ?></td></tr>
					<tr><td>Alamat</td><td>:</td><td><textarea required name="alamat"><?php $v('alamat',1);?></textarea></td></tr>
					<tr><td>E-Mail</td><td>:</td><td><input <?php $v('email');?>  required type="email" name="email"></td></tr>
					<tr><td>Nomor HP</td><td>:</td><td><input <?php $v('phone');?> required type="text" name="phone"></td></tr>
					<tr><td colspan="3"><div class="mgt"></div></td></tr>
				</tbody>
				<thead>
					<tr><th colspan="3"><h3>Buat Akun</h3></th></tr>
				</thead>
				<tbody>
					<tr><td>Username</td><td>:</td><td><input <?php $v('username');?>  required type="text" name="username"></td></tr>
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
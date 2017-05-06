<!DOCTYPE html>
<html>
<head>
	<title>404 Mboten Kepanggih</title>
	<style type="text/css">
		body{
			font-family: Heltevica, Arial;
		}
		.gbr{
			width:50%;
			height:50%;
			border: 4px solid black;
			border-radius: 10px;
			margin-bottom: 100px;
			margin-top: 30px;
		}
		.hi{
			font-size: 64px;
		}
	</style>
</head>
<body>
<center>
<?php
$list = array('asuna2','asuna3','bg1','bg2','bg3');
?>
<a href="<?php print base_url(); ?>"><h2>Halaman Utama</h2></a>
<h1 class="hi">404 Not Found !</h1>
<h2>Halaman sing digolek'i mboten kepanggih</h2>
<img class="gbr" src="<?php print base_url().'/assets/img/'.($list[rand(0,count($list)-1)]).'.jpg'; ?>">
</center>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title><?php print $title; ?></title>
	<?php css('header'); ?>
</head>
<body>
<header>
<div class="box">
	<div class="row header">
		<form method="get" action="<?php print base_url().'/search' ?>">
		<div class="inbx">
			<input type="text" size="30" name="q">
	     	<li class="bt">Beranda</li>
			<li class="bt">Profil</li>
			<li class="bt">Pengaturan</li>
			<a href="<?php print base_url()."/logout?ref=navbar&sess=".sha1($_COOKIE['sess']); ?>"><li class="bt">Log Out</li></a>
		</div>
		</form>
	</div>
</div>
  
</header>
	























<!-- <div class="row content">
    <p><b>content</b>
      (fills remaining space)
    </p>
  </div>
  <div class="row footer">
    <p><b>footer</b> (fixed height)</p>
  </div>
	 -->
	
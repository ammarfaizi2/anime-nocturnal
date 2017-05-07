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
		<form action="<?php print base_url().'/search'; ?>">
		<div class="inbx">
			<input type="text" name="q" placeholder="Cari...">
			<button type="submit" class="scbt">Cari</button>
	     	<a href="<?php print base_url()."/home?ref=tn_tnmn";?>"><li class="bt">Beranda</li></a>
			<a href="<?php print base_url()."/profile/".$u['username'];?>"><li class="bt">Profil</li></a>
			<a href="<?php print base_url()."/settings?ref=tn_tnmn"; ?>"><li class="bt">Pengaturan</li></a>
			<a href="<?php print base_url()."/logout?ref=tn_tnmn&sess=".sha1($_COOKIE['sess']); ?>"><li class="bt">Log Out</li></a>
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
	
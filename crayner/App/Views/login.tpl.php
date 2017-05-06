<?php 
if (isset($_COOKIE['alert'])) {
    $al = teadecrypt($_COOKIE['alert'], 'redangel');
    rmck(array('alert'));
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>RedAngel Login</title>
	<meta charset="UTF-8">
	<meta property="og:title" content="Login">
	<meta property="og:description" content="RedAngel Login">
  	<meta name="description" content="Login">
  	<meta name="keywords" content="RedAngel">
  	<meta name="author" content="Ammar Faizi">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<?php css('login'); ?>
	<?php js('login'); ?>
  	<?php if (isset($al)) { ?>
	<script type="text/javascript">
	alert('<?php print $al; ?>');
	</script>
	<?php } ?>
</head>
<body>
<center>
<div class="cgu">
<form action="<?php print base_url().'/login'; ?>" method="post">
	<div class="cg2">
		<div class="htr"><h3>Login</h3></div>
		<div class="lin">
			<label>Username :</label>
		</div>
		<div class="in">
			<input type="text" required name="username">
		</div>
		<div class="lin">
			<label>Password :</label>
		</div>
		<div class="in">
			<input type="password" required name="password">
		</div>
		<div class="insb">
			<input type="hidden" name="lgtoken" value="<?php print $token; ?>">
			<input type="submit" name="login" value="Login" id="sbbt">
		</div>
	</div>
</form>
</div>
</center>
</body>
</html>
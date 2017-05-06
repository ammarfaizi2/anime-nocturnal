<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		.cg2{
			margin-top: 3%;
		}
		.lin{
			margin-top: 2%;
		}
		.in{
			margin-top: 0.5%;
		}
		.insb{
			margin-top: 2%;
		}
	</style>
</head>
<body>
<center>
<form action="<?php print base_url().'/login'; ?>" method="post">
	<div class="cg2">
		<div class="lin">
			<label>Username :</label>
		</div>
		<div class="in">
			<input type="text" name="username">
		</div>
		<div class="lin">
			<label>Password :</label>
		</div>
		<div class="in">
			<input type="password" name="password">
		</div>
		<div class="insb">
			<input type="hidden" name="lgtoken" value="<?php print $token; ?>">
			<input type="submit" name="login" value="Login">
		</div>
	</div>
</form>
</center>
</body>
</html>
<?php 
include 'koneksi.php';
session_start();
unset($_SESSION['username']);
session_destroy();

 ?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	*{
		font-family:century gothic;
	}
	.form-login{
		padding: 100px;	
		width: 500px;
		height: auto;
		background: #039be5;
		border-radius: 30px;

	}
	.input{
		margin-top: 30px;
		border-radius: 10px;
		text-align: center;
		font-size: 23px;
		background: rgba(255,255,255,0.7);
		padding: 10px;
		border-width:0px;
		width: 350px;
	}
	.button{
		margin-top: 30px;
		width: 150px;
		height: 50px;
		color: white;
		border:0px;
		background:#0277bd;
		font-size: 20px;
		transition:0.5s ease-in-out;
	}
	.button:hover{
		background: rgba(55,55,55,0.1);
	}
</style>
	<title></title>
</head>
<body>
	<center>
		<div class="form-login">
			<h2 style="color: white;font-size: 40px;">Form Login</h2>
			<form method="post" name="login" action="cek-login.php">
				<h3>username</h3><input class="input" type="text" name="username" placeholder="Username"><br>
				<h3>password</h3>
				<input class="input" type="text" name="password" placeholder="password"><br>
				<button class="button" type="submit" class="btn btn-default login" value="login">Login</button>
			</form>
		</div>
	</center>
</body>
</html>
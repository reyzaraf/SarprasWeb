<?php 
$error = "failed login";
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
session_start();
$login = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'");
if (mysql_num_rows($login)<0) {
	echo "login gagal silahkan coba lagi";
}
else{
	$row = mysql_fetch_assoc($login);
	$_SESSION['username'] = $row['username'];
	$_SESSION['level']    = $row['level'];
	if ($row['level'] == "1") {
		header("location: admin/admin.php");
	}
	else if($row['level'] =='2'){
		header("location: petugas/index.php");
	}
	else{
	
	}


}

 ?>
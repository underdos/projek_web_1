<?php
session_start();
include "../conf/conn.php";

$username = $_POST["username"];
$password = $_POST["password"];


if (empty($username) && empty($password)){ 
	header('location:login.php?error=1');
	break;
}
else {
	$qry_perintah = mysqli_query($conn,"select count(*) as hasil from tbl_user where username=BINARY('$username') and password=BINARY('$password');");
	$result = mysqli_fetch_array($qry_perintah);
	
	if ($result['hasil'] == 0) {
		header('location:login.php?error=2');
	}
	elseif ($result['hasil'] == 1) {
		$_SESSION['username'] = $username;
		header('location:index.php');		
	}
}






?>
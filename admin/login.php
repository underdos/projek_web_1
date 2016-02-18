<Doctype html>
<html>

<head>
	<title>MMP Consulting</title>
<link rel='stylesheet' type='text/css' href='css/admin.css'>
<style type="text/css">
	@import(url:css/admin.css)
</style>
<script language="JavaScript">
	<?php 
		$error = $_GET['error'];
		if ($error==1) {echo "alert('Username & Password Masih Kosong Silahkan Isi Dahulu');";} 
			elseif($error==2){echo "alert('Username & Password Salah');";} 
	?>
</script>
</head>

<body>

<div id='container'>
	<div id="login">
	<form name="login" action="loginp.php" method="POST">
		<table border='0px' id="ico" cellpadding='5px' cellspacing='0px'>
			<tr>
				<td align='center' colspan="3">
					<img src='img/ico-login.png' height='150px' width='150px'>				
				</td>
			</tr>
			<tr >
				<td align='center' colspan="3">
					<div><h3>LOGIN REQUIRED</h3></div>
				</td>
			</tr>
			<tr>
				<td align="right" width="45%">Username</td>
				<td width="5%">:</td>
				<td width="50%"><input type="text" name="username"</td>
			</tr>
			<tr>
				<td align="right" >Password</td>
				<td>:</td>
				<td><input type="password" name="password"</td>
			</tr>
			<tr>
				<td colspan="3" align='center'>
				 <input type='image' height='40px' width='100px' src="img/login-button.png" alt='submit'/>
				</td>
			</tr>
			<tr>
				<td colspan='3' align='center'>
					<div><a href='http://www.cybervile.com'>Cybervile</a> Security on WWW.MMPCONS.COM</div>
				</td>
			</tr>
		</table>
	</form>
	</div>
	
</div>


</body>

</html>

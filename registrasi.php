<?php 
require 'function.php';
if ( isset($_POST["register"]) ) {
	
	if ( registrasi($_POST)>0) {
		echo "
		<script>
			alert('user baru berhasil ditambahkan')
			document.location.href='login.php';
		</script>";

		}else{
	echo mysqli_error($conn);


	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>halaman registrasi</title>
		<link rel="stylesheet" type="text/css" href="style.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<style>
	label{
		display: block;
	}
</style>
<body>
	 <br>  <a class=""> <center> <div style="font-family: arial,tahoma,sans-serif; color: white; font-size: 24px; font-weight: bold;">SELAMAT DATANG</div>
         <div style="font-family: sans-serif; color: white; font-size: 14px;">DI APLIKASI SISTEM INFORMASI REKAM MEDIS</div></center>

	<div class="container" style="width: 350px;">

			
			<!--  <p style="font-family:sans-serif; text-align: center; color:#8B4513;">APLIKASI SISTEM PENGELOLAAN DATA PASIEN</p> 	 -->    
			
			<div class="formlogin #e3f2fd blue lighten-5 " >

<form action="" method="post" class="#fafafa grey lighten-5 ">
	<ul style="padding: 20px;">
		
		<li style="text-align: center; color:#8B4513;"> REGISTRASI AKUN!</li>
					<li >
		<li>
			<br>
			<label for="username"> username :</label>
			<input type="text" name="username" id="username">
		</li>
	
		<li>
			<label for="password">password :</label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<label for="password2">konfirmasi password :</label>
			<input type="password" name="password2" id="password2">
		</li>
		<li>
			<button class="waves-effect waves-light btn #f50057 pink accent-3" type="submit" name="register">register!</button>
		</li>
		<li style="padding: 5px;"><a href="login.php">kembali..</a></li>
	</ul>
	
</form>
</div>
</div>
</div>
<a href="login.php"> kembali ! </a>
</body>
</html>
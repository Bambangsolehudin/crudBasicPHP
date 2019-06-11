<?php 
session_start();
require 'function.php'; 
// if (isset($_COOKIE["login"])) {
// 	if ($_COOKIE['login'] == 'true' ) {
// 		$_SESSION['login'] == true;
// 	} 
// }

//cek cookie
if (isset ($_COOKIE['id']) && isset($_COOKIE['key']) ) {
	$id = $_COOKIE['id'];
	$key  = $_COOKIE['key'];


	//ambil username berdasarkan id
	$result= mysqli_query($conn,  "SELECT FROM user WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	//cek cookie dan username
	if ($key == hash('sha256', $row['username'])) {
		$_SESSION['login'] = true;
	}
}
if (isset($_SESSION["login"])) {
	header("Location:pasien/index2.php");
}



 if (isset($_POST["login"])) {
 	$username=$_POST["username"];
 	$password=$_POST["password"];

$result=mysqli_query($conn,"SELECT * FROM user WHERE username='$username'");

if(mysqli_num_rows($result) === 1) {
	//cek password
	$row = mysqli_fetch_assoc($result);


//cek remember me
		if (isset($_POST["remember"])) {
		 	# buat cookie
		 	//setcookie('login','true',time() + 60);
		 	setcookie('id',$row['id'],time() + 60);
		 	setcookie('key',hash('sha256',$row['username']),time()+60); 
		 } 


	if(password_verify($password,$row["password"])){
			$_SESSION["login"]= true;
		header("Location:pasien/index2.php");
		exit;
		}
	}

	$error=true;
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>halaman login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      

	
</head>


	<body >
	
	<?php if ( isset($error)) :?>
		<!-- <p style="color: red; font-style: italic;">username/password salah</p> -->
		<script type="text/javascript">
			alert ('username/password salah');

		</script>
			<?php endif; ?>

	

<!-- navbar -->

      <br>  <a class=""> <center> <div style="font-family: arial,tahoma,sans-serif; color: white; font-size: 24px; font-weight: bold;">SELAMAT DATANG</div>
         <div style="font-family: sans-serif; color: white; font-size: 14px;">DI APLIKASI SISTEM INFORMASI REKAM MEDIS</div></center>
        
      

 


<!-- end navbar -->



	<div class="container" style="width: 350px;">
		

		
		
		<!-- <p style="text-align: center; color:#800000; ">APLIKASI SISTEM PENGELOLAAN DATA PASIEN</p>  -->
	
		<div class="form #fafafa grey lighten-5 ">
			<form action="" method="post">
				<ul style="padding:20px; ">
					
					
					<li class="" style="text-align: center; color:#800000;"> SILAHKAN LOGIN</li>
					<br>
					<li >
					
						<div class="input-field col s6">
						        <i class="material-icons prefix">account_circle</i>
						        <input name="username" id="icon_prefix" type="text" class="validate" placeholder="masukan username">
						       <!--  <label for="icon_prefix">username</label> -->
						 </div>
					</li>
					<li>
						<!-- <label for="password">Password :</label>
						<input type="password" name="password" id="password" placeholder="masukan password"> -->

						<div class="input-field col s6">
					          <i class="material-icons prefix">lock</i>
					          <input name="password" id="icon_telephone" type="password" class="validate" placeholder="masukan password">
					          <!-- <label for="icon_telephone">password</label> -->
       					</div>
					</li>
					<li>
					<br>
					<label>
			        <input type="checkbox" class="filled-in-small" checked="checked" />
			        <span>Remember me</span>
			      	</label>

				
						
						<button type="submit" name="login" class="waves-effect waves-light btn-small #f50057 pink accent-3 " style="float: right;"> 
						 Login!</button>
					
					<br>

					<br><a href="registrasi.php" style="padding: 3px; ">buat akun!</a>

				</ul>
			</form>

		</div>




<!-- footer -->



	</body>
</html>
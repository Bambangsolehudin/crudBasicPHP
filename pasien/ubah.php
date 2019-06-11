<?php 
session_start();
if (!isset($_SESSION["login"])) {
	header("Location:login.php");
	exit;
}
require 'function.php';

//ambil data diurl
$id=$_GET["id"];
$mhs = query("SELECT * FROM pasien WHERE id=$id")[0];

if (isset($_POST["submit"])) {


//ambil query


 		
 	if(ubah($_POST)>0){

	echo "
	<script>
	alert('data berhasil diubah');
	document.location.href='index2.php';
	</script>
		 ";
}else{
	echo "
	<script>
	alert('data gagal diubah');
	document.location.href='index2.php';
	</script>
		 ";
}

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>tambah data pasien </title>
	 <link rel="stylesheet" type="text/css" href="style.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body style="background-color: #FFFFFF;">
	<!-- navbar -->
	<div class="navbar fixed ">
    <nav class="#c2185b pink darken-2">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo"></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>
  	</div>
 	<!-- end navbar -->
	<div class="container" style="width: 550px; ">

	<form action="" method="post">
		<input type="hidden" name="id" value="<?=$mhs["id"] ?>" >
		<p style="text-align: center;">UBAH DATA PASIEN</p>
		<ul>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" value="<?= $mhs["nama"] ?>">
			</li>
			<li>
				<label for="umur">Umur :</label>
				<input type="text" name="umur" id="umur" value="<?= $mhs["umur"] ?>">
			</li>
			<li>
				<label for="alamat"> alamat :</label>
				<input type="text" name="alamat" id="alamat" value="<?= $mhs["alamat"] ?>">
			</li>
			<li>
				<label for="no_hp"> no_telp :</label>
				<input type="text" name="no_hp" id="no_hp" value="<?= $mhs["no_hp"] ?>">
			</li>
			<li>
				<button type="submit" name="submit" class="#c2185b pink darken-2"> Ubah data !</button>
			</li>
		</ul>

		<a href="index2.php">kembali!!</a>
	</form>
	
</div>
</body>
</html>
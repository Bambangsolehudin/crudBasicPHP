<?php 
session_start();
if (!isset($_SESSION["login"])) {
	header("Location:login.php");
	exit;
}
require 'function.php';

//ambil data diurl
$id=$_GET["id"];
$mhs = query("SELECT * FROM j_dokter WHERE id=$id")[0];

if (isset($_POST["submit"])) {


//ambil query


 		
 	if(ubah1($_POST)>0){

	echo "
	<script>
	alert('data berhasil diubah');
	document.location.href='j_dokter.php';
	</script>
		 ";
}else{
	echo "
	<script>
	alert('data gagal diubah');
	document.location.href='j_dokter.php';
	</script>
		 ";
}

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>tambah data pasien </title>
	<title>Daftar Pasien</title>
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
				<label for="kd_dokter">kd_dokter :</label>
				<input type="text" name="kd_dokter" id="kd_dokter" value="<?= $mhs["kd_dokter"] ?>">
			</li>
			<li>
				<label for="nm_dokter">nm_dokter :</label>
				<input type="text" name="nm_dokter" id="nm_dokter" value="<?= $mhs["nm_dokter"] ?>">
			</li>
			<li>
				<label for="spesialisasi"> spesialisasi :</label>
				<input type="text" name="spesialisasi" id="spesialisasi" value="<?= $mhs["spesialisasi"] ?>">
			</li>
			<li>
				<label for="telp_dokter">telp_dokter :</label>
				<input type="text" name="telp_dokter" id="telp_dokter" value="<?= $mhs["telp_dokter"] ?>">
			</li>
			<li>
				<label for="almt_dokter">almt_dokter :</label>
				<input type="text" name="almt_dokter" id="almt_dokter" value="<?= $mhs["almt_dokter"] ?>">
			</li>
			<li>
				<label for="jdwl_dokter">jdwl_dokter :</label>
				<input type="text" name="jdwl_dokter" id="jdwl_dokter" value="<?= $mhs["jdwl_dokter"] ?>">
			</li>
			<li>
				<button type="submit" name="submit" class="#c2185b pink darken-2"> Ubah data !</button>
			</li>
		</ul>

		<a href="j_dokter.php">kembali!!</a>
	</form>
	
</div>
</body>
</html>
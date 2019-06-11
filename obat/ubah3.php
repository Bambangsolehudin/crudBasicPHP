<?php 
session_start();
if (!isset($_SESSION["login"])) {
	header("Location:login.php");
	exit;
}
require 'function.php';

//ambil data diurl
$id=$_GET["id"];
$mhs = query("SELECT * FROM r_medis WHERE id=$id")[0];

if (isset($_POST["submit"])) {


//ambil query


 		
 	if(ubah3($_POST)>0){

	echo "
	<script>
	alert('data berhasil diubah');
	document.location.href='r_medis.php';
	</script>
		 ";
}else{
	echo "
	<script>
	alert('data gagal diubah');
	document.location.href='r_medis.php';
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
		<p style="text-align: center;">UBAH DATA </p>
		<ul>
			<li>
				<label for="no_rm">no_rm :</label>
				<input type="text" name="no_rm" id="no_rm" value="<?= $mhs["no_rm"] ?>">
			</li>
			<li>
				<label for="nm_pasien">nm_pasien :</label>
				<input type="text" name="nm_pasien" id="nm_pasien" value="<?= $mhs["nm_pasien"] ?>">
			</li>
			<li>
				<label for="kd_dokter"> kd_dokter :</label>
				<input type="text" name="kd_dokter" id="kd_dokter" value="<?= $mhs["kd_dokter"] ?>">
			</li>
			<li>
				<label for="kd_obat">kd_obat :</label>
				<input type="text" name="kd_obat" id="kd_obat" value="<?= $mhs["kd_obat"] ?>">
			</li>
			<li>
				<label for="diagnosa">diagnosa :</label>
				<input type="text" name="diagnosa" id="diagnosa" value="<?= $mhs["diagnosa"] ?>">
			</li>
			<li>
				<label for="resep">resep :</label>
				<input type="text" name="resep" id="resep" value="<?= $mhs["resep"] ?>">
			</li>
			<li>
				<label for="keluhan">keluhan :</label>
				<input type="text" name="keluhan" id="keluhan" value="<?= $mhs["keluhan"] ?>">
			</li>
			<li>
				<label for="tgl_periksa">tgl_periksa :</label>
				<input type="text" name="tgl_periksa" id="tgl_periksa" value="<?= $mhs["tgl_periksa"] ?>">
			</li>
			<li>
				<label for="ket">ket :</label>
				<input type="text" name="ket" id="ket" value="<?= $mhs["ket"] ?>">
			</li>
			<li>
				<button type="submit" name="submit" class="#c2185b pink darken-2"> Ubah data !</button>
			</li>
		</ul>

		<a href="obat.php">kembali!!</a>
	</form>
	
</div>
</body>
</html>
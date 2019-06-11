 <?php 
 session_start();
if (!isset($_SESSION["login"])) {
	header("Location:login.php");
	exit;
}
$conn = mysqli_connect("localhost","root","","programpi");
if (isset($_POST["submit"])) {


	$no_rm = $_POST["no_rm"];
	$nm_pasien = $_POST["nm_pasien"];
	$kd_dokter = $_POST["kd_dokter"];
	$kd_obat=$_POST["kd_obat"];
	$diagnosa=$_POST["diagnosa"];
	$resep=$_POST["resep"];
	$keluhan=$_POST["keluhan"];
	$tgl_periksa=$_POST["tgl_periksa"];
	$ket=$_POST["ket"];

//ambil query
$query="INSERT INTO r_medis
VALUES 
('','$no_rm','$nm_pasien','$kd_dokter','$kd_obat','$diagnosa','$resep','$keluhan','$tgl_periksa','$ket')";
mysqli_query($conn,$query);

 		
 	if(mysqli_affected_rows($conn)>0){

	echo "
	<script>
	alert('data berhasil ditambahkan');
	document.location.href='r_medis.php';
</script>
		 ";
}else{
	echo "gagal";
	echo "<br>";
	echo mysqli_error($conn);
}

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>tambah data pasien</title>
	<link rel="stylesheet" type="text/css" href="style.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
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
 

 <br>
	<div class="container" style="width: 600px;">
	
	<form action="" method="post" style="padding: 20px; font: bold;">
		<p style="text-align: center;">Tambah Data</p>
		
		<ul>
			
			<li>
				<label for="no_rm">no_rm :</label>
				<input type="text" name="no_rm" id="no_rm" req>
			</li>
			<li>
				<label for="nm_pasien">nm_pasien :</label>
				<input type="text" name="nm_pasien" id="nm_pasien">
			</li>
			<li>
				<label for="kd_dokter"> kd_dokter :</label>
				<input type="text" name="kd_dokter" id="kd_dokter">
			</li>
			<li>
				<label for="kd_obat"> kd_obat :</label>
				<input type="text" name="kd_obat" id="kd_obat">
			</li>
			<li>
				<label for="diagnosa"> diagnosa :</label>
				<input type="text" name="diagnosa" id="diagnosa">
			</li>
			<li>
				<label for="resep"> resep :</label>
				<input type="text" name="resep" id="resep">
			</li>
			<li>
				<label for="keluhan"> keluhan :</label>
				<input type="text" name="keluhan" id="keluhan">
			</li>
			<li>
				<label for="tgl_periksa"> tgl_periksa :</label>
				<input type="text" name="tgl_periksa" id="tgl_periksa">
			</li>
			<li>
				<label for="ket"> ket :</label>
				<input type="text" name="ket" id="ket">
			</li>


			<li>
				<button type="submit" name="submit" class="#c2185b pink darken-2"> kirim !</button>
			</li>
		</ul>
			<a href="r_medis.php">Kembali !!</a>

	</form>

</div>
</body>
</html>
 <?php 
 session_start();
if (!isset($_SESSION["login"])) {
	header("Location:login.php");
	exit;
}
$conn = mysqli_connect("localhost","root","","programpi");
if (isset($_POST["submit"])) {
$kd_dokter = $_POST["kd_dokter"];
$nm_dokter = $_POST["nm_dokter"];
$spesialisasi = $_POST["spesialisasi"];
$telp_dokter = $_POST["telp_dokter"];
$almt_dokter = $_POST["almt_dokter"];
$jdwl_dokter = $_POST["jdwl_dokter"];

//ambil query
$query="INSERT INTO j_dokter
VALUES 
('','$kd_dokter','$nm_dokter','$spesialisasi','$telp_dokter','almt_dokter','jdwl_dokter')";
mysqli_query($conn,$query);

 		
 	if(mysqli_affected_rows($conn)>0){

	echo "
	<script>
	alert('data berhasil ditambahkan');
	document.location.href='j_dokter.php';
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
	<title>tambah data Jadwal Dokter</title>
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
 

 <br>
	<div class="container" style="width: 600px;">
	
	<form action="" method="post" style="padding: 20px; font: bold;">
		<p style="text-align: center;">TAMBAH DATA JADWAL DOKTER</p>
		
		<ul>
			
			<li>
				<label for="kd_dokter">kd_dokter :</label>
				<input type="text" name="kd_dokter" id="kd_dokter" req>
			</li>
			<li>
				<label for="nm_dokter">nm_dokter :</label>
				<input type="text" name="nm_dokter" id="nm_dokter">
			</li>
			<li>
				<label for="spesialisasi"> spesialisasi :</label>
				<input type="text" name="spesialisasi" id="spesialisasi">
			</li>
			<li>
				<label for="telp_dokter"> telp_dokter :</label>
				<input type="text" name="telp_dokter" id="telp_dokter">
			</li>
			<li>
				<label for="almt_dokter"> almt_dokter :</label>
				<input type="text" name="almt_dokter" id="almt_dokter">
			</li>
			<li>
				<label for="jdwl_dokter"> jdwl_dokter :</label>
				<input type="text" name="jdwl_dokter" id="jdwl_dokter">
			</li>



			<li>
				<button type="submit" name="submit" class="#c2185b pink darken-2"> kirim !</button>
			</li>
		</ul>
			<a href="j_dokter.php">Kembali !!</a>

	</form>

</div>
</body>
</html>
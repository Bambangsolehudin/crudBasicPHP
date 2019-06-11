 <?php 
 session_start();
if (!isset($_SESSION["login"])) {
	header("Location:login.php");
	exit;
}
$conn = mysqli_connect("localhost","root","","programpi");
if (isset($_POST["submit"])) {
$kd_obat = $_POST["kd_obat"];
$nm_obat = $_POST["nm_obat"];
$jml_obat = $_POST["jml_obat"];
$ukuran = $_POST["ukuran"];
$harga = $_POST["harga"];

//ambil query
$query="INSERT INTO obat
VALUES 
('','$kd_obat','$nm_obat','$jml_obat','$ukuran','$harga')";
mysqli_query($conn,$query);

 		
 	if(mysqli_affected_rows($conn)>0){

	echo "
	<script>
	alert('data berhasil ditambahkan');
	document.location.href='obat.php';
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
		<p style="text-align: center;">Tambah Data Obat</p>
		
		<ul>
			
			<li>
				<label for="kd_obat">kd_obat :</label>
				<input type="text" name="kd_obat" id="kd_obat" req>
			</li>
			<li>
				<label for="nm_obat">nm_obat :</label>
				<input type="text" name="nm_obat" id="nm_obat">
			</li>
			<li>
				<label for="jml_obat"> jml_obat :</label>
				<input type="text" name="jml_obat" id="jml_obat">
			</li>
			<li>
				<label for="ukuran"> ukuran :</label>
				<input type="text" name="ukuran" id="ukuran">
			</li>
			<li>
				<label for="harga"> harga :</label>
				<input type="text" name="harga" id="harga">
			</li>



			<li>
				<button type="submit" name="submit" class="#c2185b pink darken-2"> kirim !</button>
			</li>
		</ul>
			<a href="obat.php">Kembali !!</a>

	</form>

</div>
</body>
</html>
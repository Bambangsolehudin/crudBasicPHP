 <?php 
 require 'function.php';
 session_start();
if (!isset($_SESSION["login"])) {
	header("Location:login.php");
	exit;
}
$conn = mysqli_connect("localhost","root","","programpi");
if (isset($_POST["submit"])) {
$nama = $_POST["nama"];
$umur = $_POST["umur"];
$alamat = $_POST["alamat"];
$no_telp = $_POST["no_telp"];

//ambil query
$query="INSERT INTO pasien
VALUES 
('','$nama','$umur','$alamat','$no_telp')";
mysqli_query($conn,$query);

 		
 	if(mysqli_affected_rows($conn)>0){

	echo "
	<script>
	alert('data berhasil ditambahkan');
	document.location.href='index2.php';
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
		<p style="text-align: center;">TAMBAH DATA PASIEN</p>
		
		<ul>
			
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" req>
			</li>
			<li>
				<label for="umur">umur :</label>
				<input type="text" name="umur" id="umur">
			</li>
			<li>
				<label for="alamat"> alamat :</label>
				<input type="text" name="alamat" id="alamat">
			</li>
			<li>
				<label for="no_telp"> no_telp :</label>
				<input type="text" name="no_telp" id="no_telp">
			</li>
			<li>
				<button type="submit" name="submit" class="#c2185b pink darken-2"> kirim !</button>
			</li>
		</ul>
			<a href="index2.php">Kembali !!</a>

	</form>

</div>
</body>
</html>
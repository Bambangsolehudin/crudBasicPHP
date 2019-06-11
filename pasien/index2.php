<?php
	session_start();
		if (!isset($_SESSION["login"])) {
			
			header("Location:login.php");

			exit;
		}
		require 'function.php';
// pagnition
//configuration 
		$pasien=query("SELECT * FROM pasien");

// $jumlahdataperhalaman = 5;
// $jumlahdata = count(query("SELECT * FROM pasien"));
// $jumlahhalaman = ceil($jumlahdata / $jumlahdataperhalaman);
// $halamanaktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
// $awaldata = ($jumlahdataperhalaman * $halamanaktif) - $jumlahdataperhalaman;


// $pasien=query("SELECT * FROM pasien LIMIT $awaldata ,$jumlahdataperhalaman ");


// while ($mhs = mysqli_fetch_assoc($result)) {
// 	var_dump($mhs);

//tombol cari diketik
		if (isset($_POST["cari"])) {
				$pasien = cari($_POST["keyword"]);
		}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pasien</title>
	   <link rel="stylesheet" type="text/css" href="style.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


</head>
	





<body style="background-color: #FFFFFF;">

	<!-- navbar -->
	<div class="navbar-fixed ">
    <nav class="#c2185b pink darken-2">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo"></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="../logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>
  	</div>
 	<!-- end navbar -->
 

 <br>

 <!-- container -->




	<!-- <div class="row">

      <div class="col s12 m4 l3 card">
      	<h5>APLIKASI SISTEM MEDIS Version 2.0</h5>
      	<img src="img/a.jpg " class="responsive-img">

      	<p style="text-align: center;"> SELAMAT DATANG 
						   
      	 	
      	 </p>
      	 <CENTER>
        <a class="waves-effect waves-light btn-small" href="index2.php">Daftar Pasien</a>
        <a class="waves-effect waves-light btn-small" href="index2.php">Daftar Dokter</a>
    	</CENTER>
      </div>
      <div class="col s12 m4 l1"></div> -->

      <!-- SIDE NAVBAR -->
      <div class="row">

      <div class="col s12 m4 l2">


       

  		<ul id="slide-out" class="sidenav">
		    <li>
		    	<div class="user-view">
		      	<div class="background">
		        <img src="../img/c.jpg " class="responsive-img" >

		      	</div>
			      	<a href="#user"><img class="circle" src="img/c.jpg"></a>
			      	<a href="#name"><span class="white-text name"></span></a>
			      	<a href="#email"><span class="white-text email"></span></a>
		   	 	</div></li>
				    <li><a href="#!"><i class="material-icons">cloud</i>Selamat Datang</a></li>
				    <li><a href="index2.php">Daftar Pasien</a></li>
				     <li><a href="../dokter/j_dokter.php">Daftar Jadwal Dokter</a></li>
				     <li><a href="../obat/obat.php">Daftar Obat</a></li>
				    <li><div class="divider"></div></li>
				    <li><a class="subheader">LAPORAN</a></li>
				    <li><a class="waves-effect" href="../r_medis.php">Rekam Medis</li>
				    
		  </ul>
  	<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
      
      <div class="col s12 m4 l1">
      	
      </div>  
      <!-- END SIDE NAVBAR -->

      














      <div class="col s12 m8 l7 card" style=" font-size: 10pt;"> <!-- Note that "m8 l9" was added -->
       		







       		<!-- cari -->
			<form action="" method="post">
				<p style="font-size: 15pt;">Daftar Pasien</p>
				<div class="cari" style="float: right;">
					<input type="text" name="keyword" autofocus placeholder="masukan keyword pencarian" autocomplete="off" style="width: 200px;" id="keyword">
					<button type="submit" name="cari" class="#00b0ff #00acc1 cyan darken-1" id="tombol-cari
					">cari!</button>
				</div>
			</form >
			<!-- akhir cari -->
					
			
			<!-- nav  pagnation-->
		<!-- 	<?php for ($i=1; $i<= $jumlahhalaman; $i++) :?>
					<?php if($i== $halamanaktif) :?>
					<a href="?halaman=<?=$i; ?>" style="font-weight: bold; color: red;"><?=$i; ?></a>
					<?php else : ?>
							<a href="?halaman=<?=$i; ?>"><?=$i; ?></a>
					<?php endif; ?>
			<?php endfor; ?>
			<-- end pagnation -->
			<br>
<div class="tabel" id="tabel">

	<!-- tabel Pasien -->
			<form action="" method="post">
				<button type="submit" class="#00acc1 cyan darken-1"><a href="tambah.php" style="color: white;">Tambah Data</a></button>
			</form>
			<table border="1" cellpadding="10" class="striped" class="">
					<tr class="#00acc1 cyan darken-1">
						<th>No</th>
						<th>Nama</th>
						<th>Umur</th>
						<th>Alamat</th>
						<th>No_telp</th>
						<th>Aksi</th>
					</tr>
					<?php $i=1; ?>
						<?php foreach ($pasien as $row ) : ?>
					<tr>
						
					
						<td><?= $i; ?></td>
						<td><?=$row["nama"]; ?></td>
						<td><?=$row["umur"]; ?></td>
						<td><?=$row["alamat"]; ?></td>
						<td><?=$row["no_hp"]; ?></td>
						<td>
							<a class="waves-eff btn-small" href="ubah.php?id=<?=$row["id"]; ?>" >ubah </a>
							<a class="waves-effect waves-light btn-small" href="hapus.php?id=<?=$row["id"]; ?>" >hapus</a>
						</td>
					</tr>
					<?php $i++; ?>
				<?php endforeach; ?>	
			</table>
				


      </div >
</div>
	<!-- akhir tabel pasien -->

	<div class="col s12 m4 l1">
		
	</div>
    </div>
















	

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>

 <script type="text/javascript">
 	 $(document).ready(function(){
    $('.sidenav').sidenav();
  });
 </script>
<!--  <script src="js/materialize.min.js"></script> -->













</body>
</html>
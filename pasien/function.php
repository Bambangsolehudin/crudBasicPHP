<?php 
$conn = mysqli_connect("localhost","root","","programpi");
function query($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows=[];
	while ($row=mysqli_fetch_assoc($result)){
		$rows[]=$row;
		} 
	return $rows;
	}




//tambah data


//PASIEN
function tambah($data){
	global $conn;
	$nama = $data["nama"];
	$umur = $data["umur"];
	$alamat = $data["alamat"];
	$no_hp=$data["no_hp"];
	$query="INSERT INTO pasien
	VALUES 
		('','$nama','$umur','$alamat','$no_hp')";
	
	mysqli_query($conn,$query);
	
	return mysqli_affected_rows($conn);
	

	}

//DOKTER
function tambah1($data){
	global $conn;
	$kd_dokter = $data["kd_dokter"];
	$nm_dokter = $data["nm_dokter"];
	$spesialisasi = $data["spesialisasi"];
	$telp_dokter=$data["telp_dokter"];
	$almt_dokter=$data["almt_dokter"];
	$jdwl_dokter=$data["jdwl_dokter"];
	$query="INSERT INTO j_dokter
	VALUES 
		('','$kd_dokter','nm_dokter','$spesialisasi','$telp_dokter','$almt_dokter','$jdwl_dokter')";
	
	mysqli_query($conn,$query);
	
	return mysqli_affected_rows($conn);
	

	}
//obat

function tambah2($data){
	global $conn;
	$kd_obat = $data["kd_obat"];
	$nm_obat = $data["nm_obat"];
	$jml_obat = $data["jml_obat"];
	$ukuran=$data["ukuran"];
	$harga=$data["harga"];
	$query="INSERT INTO obat
	VALUES 
		('','$kd_obat','$nm_obat','$jml_obat','$ukuran','$harga')";
	
	mysqli_query($conn,$query);
	
	return mysqli_affected_rows($conn);

	}

	//tambah r_medis
function tambah3($data){
	global $conn;
	$no_rm = $data["no_rm"];
	$nm_pasien = $data["nm_pasien"];
	$kd_dokter = $data["kd_dokter"];
	$kd_obat=$data["kd_obat"];
	$diagnosa=$data["diagnosa"];
	$resep=$data["resep"];
	$keluhan=$data["keluhan"];
	$tgl_periksa=$data["tgl_periksa"];
	$ket=$data["ket"];
	$query="INSERT INTO r_medis
	VALUES 
		('','$no_rm','$nm_pasien','$kd_dokter','$kd_obat','$diagnosa','$resep','$keluhan','$tgl_periksa','$ket')";
	
	mysqli_query($conn,$query);
	
	return mysqli_affected_rows($conn);

	}







//Hapus
//pasien
function hapus($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM pasien WHERE id=$id");
	return mysqli_affected_rows($conn);

}
//dokter

function hapus1($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM j_dokter WHERE id=$id");
	return mysqli_affected_rows($conn);

}

//obat
function hapus2($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM obat WHERE id=$id");
	return mysqli_affected_rows($conn);

}

//r_medis

function hapus3($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM r_medis WHERE id=$id");
	return mysqli_affected_rows($conn);


}








//UBAH DATA

//PASIEN
function ubah($data){
global $conn;
	$id =$data["id"];
	$nama =$data["nama"];
	$umur =$data["umur"];
	$alamat =$data["alamat"];
	$no_hp=$data["no_hp"];
	
	$query="UPDATE pasien 
	SET 
		nama='$nama'
		,umur='$umur'
		,alamat='$alamat'
		,no_hp='$no_hp'
		WHERE id = $id;
		";
	
	mysqli_query($conn,$query);
	
	return mysqli_affected_rows($conn);
}

//obat
function ubah2($data){
global $conn;
	$id=$data["id"];
	$kd_obat = $data["kd_obat"];
	$nm_obat= $data["nm_obat"];
	$jml_obat=$data["jml_obat"];
	$ukuran=$data["ukuran"];
	$harga=$data["harga"];

	
	$query="UPDATE obat
	SET 
	
		kd_obat='$kd_obat'
		,nm_obat='$nm_obat'
		,jml_obat='$jml_obat'
		,ukuran='$ukuran'
		,harga='$harga'
		

		WHERE id = $id;
		";
	
	mysqli_query($conn,$query);
	
	return mysqli_affected_rows($conn);
}

//dokter

function ubah1($data){
global $conn;
	$id=$data["id"];
	$kd_dokter = $data["kd_dokter"];
	$nm_dokter = $data["nm_dokter"];
	$spesialisasi=$data["spesialisasi"];
	$telp_dokter=$data["telp_dokter"];
	$almt_dokter=$data["almt_dokter"];
	$jdwl_dokter=$data["jdwl_dokter"];
	
	$query="UPDATE j_dokter
	SET 
	
		kd_dokter='$kd_dokter'
		,nm_dokter='$nm_dokter'
		,spesialisasi='$spesialisasi'
		,telp_dokter='$telp_dokter'
		,almt_dokter='$almt_dokter'
		,jdwl_dokter='$jdwl_dokter'

		WHERE id = $id;
		";
	
	mysqli_query($conn,$query);
	
	return mysqli_affected_rows($conn);
}


//r_medis
function ubah3($data){
global $conn;
	$id=$data["id"];
	$no_rm = $data["no_rm"];
	$nm_pasien = $data["nm_pasien"];
	$kd_dokter = $data["kd_dokter"];
	$kd_obat=$data["kd_obat"];
	$diagnosa=$data["diagnosa"];
	$resep=$data["resep"];
	$keluhan=$data["keluhan"];
	$tgl_periksa=$data["tgl_periksa"];
	$ket=$data["ket"];
	
	$query="UPDATE r_medis
	SET 
	
		no_rm='$no_rm'
		,nm_pasien='$nm_pasien'
		,kd_dokter='$kd_dokter'
		,kd_obat='$kd_obat'
		,diagnosa='$diagnosa'
		,resep='$resep'
		,keluhan='$keluhan'
		,tgl_periksa='$tgl_periksa'
		,ket='$ket'

		WHERE id = $id;
		";
	
	mysqli_query($conn,$query);
	
	return mysqli_affected_rows($conn);
}











//CARI

//PASIEN

function cari($keyword){
		$query="SELECT * FROM pasien
		WHERE
		nama LIKE '%$keyword%' OR
		umur LIKE '%$keyword%' OR
		alamat LIKE '%$keyword%' OR
		no_hp LIKE '%$keyword%' ";
		return query($query);
	}

//DOKTER

function cari1($keyword){
		$query="SELECT * FROM j_dokter
		WHERE
		kd_dokter LIKE '%$keyword%' OR
		nm_dokter LIKE '%$keyword%' OR
		spesialisasi LIKE '%$keyword%' OR
		telp_dokter LIKE '%$keyword%' OR
		jdwl_dokter LIKE '%$keyword%' ";
		return query($query);
	}
//obat

function cari2($keyword){
		$query="SELECT * FROM obat
		WHERE
		kd_obat LIKE '%$keyword%' OR
		nm_obat LIKE '%$keyword%' OR
		jml_obat LIKE '%$keyword%' OR
		ukuran LIKE '%$keyword%' OR
		harga LIKE '%$keyword%' ";
		return query($query);
	}
//r_medis


function cari3($keyword){
		$query="SELECT * FROM r_medis
		WHERE
		no_rm LIKE '%$keyword%' OR
		nm_pasien LIKE '%$keyword%' OR
		kd_dokter LIKE '%$keyword%' OR
		kd_obat LIKE '%$keyword%' OR
		diagnosa LIKE '%$keyword%' OR
		resep LIKE '%$keyword%' OR
		keluhan LIKE '%$keyword%' OR
		tgl_periksa LIKE '%$keyword%' OR
		ket LIKE '%$keyword%' ";
		return query($query);
	}




















	function registrasi($data){
		global $conn;

		$username= strtolower(stripslashes($data["username"]));
		$password=mysqli_real_escape_string($conn,$data["password"]);
		$password2=mysqli_real_escape_string($conn,$data["password2"]);
		//cek username
		$result=mysqli_query($conn,"SELECT username FROM user WHERE username='$username '");

		if (mysqli_fetch_assoc($result)){
			echo " <script>
					alert('username sudah terdaftar')
					</script>";
					return false;
					

		}
		//cek password
		if ($password !== $password2) {
			echo "<script>
					alert('password tidak sama silahkan ulangi!!')
					</script>";
			return false;
		}
		// enkripsi password
		$password = password_hash($password,PASSWORD_DEFAULT);

		//tambahkan userbaru ketabel user
		mysqli_query(
			$conn, "INSERT INTO user VALUES ('','$username','$password')"
			);
		return mysqli_affected_rows($conn);

	}

	
 ?>
<?php 
session_start();
if (!isset($_SESSION["login"])) {
	header("Location:r_medis.php");
	exit;
}
require 'function.php';
$id=$_GET["id"];

if (hapus3($id)>0) {
	echo "
	<script>
	alert('data berhasil dihapus');
	document.location.href='r_medis.php';
</script>
		 ";
}else{
	echo "
	<script>
		alert('data gagal dihapus');
		document.location.href='r_medis.php';
	</script>
		 ";
}



 ?>
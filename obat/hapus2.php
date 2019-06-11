<?php 
session_start();
if (!isset($_SESSION["login"])) {
	header("Location:obat.php");
	exit;
}
require 'function.php';
$id=$_GET["id"];

if (hapus2($id)>0) {
	echo "
	<script>
	alert('data berhasil dihapus');
	document.location.href='obat.php';
</script>
		 ";
}else{
	echo "
	<script>
		alert('data gagal dihapus');
		document.location.href='obat.php';
	</script>
		 ";
}



 ?>
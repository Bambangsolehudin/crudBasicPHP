//ambil element
var keyword = document.getElementsById('keyword');
var tombolCari = document.getElementsById('tombol-cari');
var container = document.getElementsById('tabel');


//tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup',function(){

	//buat objek ajax
	var xhr = new XMLHttpRequest();


	//cek kesiapan ajax
	xhr.onreadystatechange = function() {
		if (xhr.ready == 4 && xhr.status == 200) {
			container.innerHTML = xhr.ResponText;
		}
	}



//eksekusi ajax

xhr.open('GET','ajax/pasien.php',true);
	xhr.send();











})
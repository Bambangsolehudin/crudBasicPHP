p=confirm('apakah anda ingin bermain?');
while(p == true) {
var tanya = true;

while (tanya) {

//menangkap pilihan player
var p = prompt(' pilih : gunting,batu,kertas');
//menangkap pilihan komputer
//membangun bilangan random
var comp = Math.random();

if (comp < 0.34) {
	comp = 'gunting';
}else if(comp >= 0.34 && comp <0.67) {
	comp = 'batu';
}else{
	comp = 'kertas';
}


var hasil= '';
//rules
if(p == comp){
	hasil = 'seri';
}else if(p=='gunting'){
hasil = (comp == 'kertas')?'MENANG':'KALAH';
}else if (p== 'kertas'){
hasil=(comp == 'batu')?'MENANG':'KALAH';

}else if (p == 'batu') {
	hasil = (comp == 'kertas')? 'KALAH' : 'MENANG';

}else{
	hasil = 'Memasukan nilai yang salah!!!'
}

//tampilkan hasilnya 
alert ('kamu memilih : '+p+' dan komputer memilih : '+comp+'\nMaka hasilnya kamu'+hasil );
tanya = confirm('lagi ?');
}

alert ('terima kasih sudah bermain .')
}


//live search

 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
 	 });

 	 $(document).ready(function(){
    $('.sidenav').sidenav();
  });


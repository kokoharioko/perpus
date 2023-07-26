
var cari = document.getElementById('cari');
var tombolcari = document.getElementById('tombol-cari');
var tabel = document.getElementById('tabel');


cari.addEventListener('keyup', function(){

	var xhr = new XMLHttpRequest();

	xhr.onreadystatechange =function() {
		if(xhr.readyState == 4 && xhr.status ==200) {
			tabel.innerHTML = xhr.responseText;

		}
	}

	xhr.open('GET', 'ajax/trmobil.php?cari='+ cari.value, true);
	xhr.send();

});

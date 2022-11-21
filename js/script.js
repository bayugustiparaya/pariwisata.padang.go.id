// $(document).ready(function () {
var kualitas = document.getElementById("fr-kualitas");
var kualitasSuc = document.getElementById("fr-kualitas-suc");
kualitasSuc.style.display = "none";
function sendKualitas() {
	if (kualitas.style.display === "none") {
		kualitas.style.display = "block";
		kualitasSuc.style.display = "none";
	} else {
		kualitas.style.display = "none";
		kualitasSuc.style.display = "block";
	}
}

var publikasi = document.getElementById("fr-publikasi");
var publikasiSuc = document.getElementById("fr-publikasi-suc");
publikasiSuc.style.display = "none";
function sendPublikasi() {
	if (publikasi.style.display === "none") {
		publikasi.style.display = "block";
		publikasiSuc.style.display = "none";
	} else {
		publikasi.style.display = "none";
		publikasiSuc.style.display = "block";
	}
}
// });

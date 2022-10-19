var Calisan = new Object();

Calisan.isim = "Yusuf Kaan";
Calisan.soyisim = "Sari";
Calisan.isimBilgileri = function () {
	return "İsim Bilgileri: " + this.isim;
}

console.log(Calisan.isim);

console.log(Calisan.isimBilgileri());

var calisan = {
	isim: "Yusuf Kaan",
	soyisim: "Sari",
	numara: 123,
	diller: ["Php","Java","C++"],
	adres: {
		cadde: "Kabil",
		sokak: "1234.sokak"
	},
	isimBilgileri : function(){
		return "Çalışan İsmi: "+this.isim;
	}
};

console.log(calisan.isim);
console.log(calisan.numara);
console.log(calisan.diller);

console.log(calisan.adres.cadde);
console.log(calisan.adres.sokak);

console.log(calisan.isimBilgileri());

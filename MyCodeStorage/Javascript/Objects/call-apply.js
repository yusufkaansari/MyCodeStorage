var Calisan = {
    isim: "Yusuf",
    soyisim: "Sari",
    numara: 123,
    diller: ["Php", "Java", "C++"],
    adres: {
        cadde: "Kabil",
        sokak: "1234.sokak"
    },
    tamIsim: function () {
        return "Çalışan İsmi: " + this.isim + " " + this.soyisim;
    }
};

var Isveren = {
    isim: "Ysf",
    soyisim: "Kaan",
}

// Calisan nesnesindeki tamIsim methoduna Isveren nesnesi gönderiliyor
var x = Calisan.tamIsim.call(Isveren);
//var x = Calisan.tamIsim.apply(Isveren);
console.log(x);

//Tek farkları şudur:
//  - call() fonsiyonu bağımsız değişkenlerini ayrı ayrı alır
//  -apply() herhangi bir fonksiyon argümanını bir dizi olarak alır.
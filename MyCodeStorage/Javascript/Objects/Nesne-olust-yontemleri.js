//  Static Nesne oluşturma
var calisan = {
    isim: "Yusuf Kaan",
    soyisim: "Sari",
    numara: 123,
    diller: ["Php", "Java", "C++"],
    adres: {
        cadde: "Kabil",
        sokak: "1234.sokak"
    },
    isimBilgileri: function () {
        return "Çalışan İsmi: " + this.isim;
    }
};

// New Anahtar Kelimesiyle Tek Bir Nesne oluşturma
// yavaş programlamadır. bunu kullanmak önerilmez
var Person = new Object();
Person.firstName = "Yusuf Kaan";
Person.lastName = "SARI";
Person.age = 5;
Person.eyeColor = "Brown";

// Constructor Tanımlama
function Person(first, last, age, color) {
    this.firstName = first;
    this.lastName = last;
    this.age = age;
    this.eyeColor = color;
}
var MyPerson = new Person("Yusuf Kaan", "SARI", 28, "Brown");

// Nesneye Ulaşma
MyPerson.firstName;
MyPerson["firstName"];

var message = ""; //bu değer verme işlemini yapmazsak bu string'in ilk değeri undefined olur.

// Nesnenin Özelliklerine Müdahele Etme:
// Yeni Özellik oluşturma
MyPerson.hair = true;

//Prototype ile Yeni özellik ekleme
Person.prototype.hair = "Yellow";

// Özellik Silme
delete MyPerson.eyeColor;

// For in Döngüsü
for (x in MyPerson) {
    message += MyPerson[x] + "<br>";
}

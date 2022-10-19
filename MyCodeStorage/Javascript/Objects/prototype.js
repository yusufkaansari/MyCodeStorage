function Person(first, last, age, color) {
    this.firstName = first;
    this.lastName = last;
    this.age = age;
    this.eyeColor = color;
}

//Prototype ile Yeni Özellik Ekleme
Person.prototype.hair = "Yellow";

//Prototype ile Yeni Method Oluşturma
Person.prototype.changeName = function (name) {
    return this.firstName = name;
}
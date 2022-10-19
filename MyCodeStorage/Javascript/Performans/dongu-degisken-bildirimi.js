// döngülerde değişken bildirimini döngü içinde yapma dışarıda yap

for (var i = 0; i < 10; i++) {

}
// bunun yerine:

var i;
for (i = 0; i < 10; i++) {

}
// bunu kullan
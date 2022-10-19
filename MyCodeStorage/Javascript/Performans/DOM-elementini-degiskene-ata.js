// DOM değişkenini döngüde kullanıyorsak bunu döngü dışında bir değişkene atanmalıdır.

var i;
for (i = 0; i < 10; i++) {
    document.getElementById('result').innerHTML += num[i] + "<br>";
}
// bunun yerine

var i;
var result = document.getElementById('result');
for (i = 0; i < 10; i++) {
    result.innerHTML += num[i] + "<br>";
}
// bunu kullan
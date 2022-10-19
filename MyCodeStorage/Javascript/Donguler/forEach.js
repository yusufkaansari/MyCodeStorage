var sayilar = [32, 5, 1, 100, -1, 90];

console.log("Array elemanları...");

//pratik olmayan yöntem:
for (var i = 0; i < sayiler.length; i++) {
	console.log("Eleman: " + sayilar[i]);
}

//PRATİK yöntem:

sayilar.forEach(myFunction);

function myFunction(item, index) {
	console.log(index + ". Eleman: " + item);
}

//PRATİK yöntem2:

sayilar.forEach(function (sayi) {
	console.log("Eleman: " + sayi);
});

// SLICE ILE EKLEME
var fruits = ["Banana", "Orange", "Apple", "Mango"];
fruits.splice(2, 0, "Lemon", "Kiwi");
//İlk parametre (2), yeni elemanların ekleneceği (ekleneceği) konumu tanımlar.
//İkinci parametre (0), kaç öğenin kaldırılması gerektiğini tanımlar.

// SLICE ILE KALDIRMA
var fruits = ["Banana", "Orange", "Apple", "Mango"];
fruits.splice(0, 1);        // Removes the first element of fruits
//İlk parametre (0), yeni elemanların ekleneceği (ekleneceği) konumu tanımlar.
//İkinci parametre (1), kaç öğenin kaldırılması gerektiğini tanımlar.
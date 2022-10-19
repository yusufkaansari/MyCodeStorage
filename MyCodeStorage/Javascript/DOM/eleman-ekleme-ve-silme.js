// HTML öğesi oluşturma
document.createElement("link");

// HTML öğesini kaldırma
document.removeChild("link");

// HTML öğesi ekleme
document.head.appendChild("p");

// Bir HTML öğesini değiştirir
document.replaceChild("p");

// HTML çıktısını yazar
document.write("text");


newWindow = window.open("", "newWindow", "width=400,height=100");
// newWindow.document.write("Bu pencere javascript tarafından açıldı");

var headTag = newWindow.document.createElement("link");
headTag.rel = "stylesheet";
headTag.href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css";
headTag.integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm";
headTag.crossOrigin = "anonymous";
newWindow.document.head.appendChild(headTag);

var pTag = newWindow.document.createElement("p");
pTag.className = "alert-success text-center";
pTag.innerText = "Bu pencere javascript tarafından açıldı";
newWindow.document.body.appendChild(pTag);




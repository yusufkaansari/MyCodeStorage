function Calisan(isim,soyisim,numara){
	this.isim=isim;
	this.numara= numara;
	//burada properties tanımlamış olduk;
	this.bilgileriGoster = function(){
		return "İsim: "+this.isim+"\nNumara: "+this.numara;
	}
}

var calisan1=new Calisan("Yusuf","sari",123);
console.log(calisan1.bilgileriGoster());

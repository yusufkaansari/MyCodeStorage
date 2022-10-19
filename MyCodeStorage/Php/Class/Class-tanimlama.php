<?php
	class Kediler{
		public $adi;
		public $cinsiyeti;
		public $tuyRengi;
	function __construct(){
		// class ilk oluşunca burası çalışır.
        // class'ın nesnesi değer atanmasa bile buradaki değerler atanır
        $this->adi="isim bilinmiyor";
        $this->cinsiyeti="cinsiyet bilinmiyor";
        $this->tuyRengi="tüy rengi bilinmiyor";
	}
	public function Uyu(){
		echo "Kedi Uyuyor";
	}
	public function KediyiTanit(){
		echo "Kedinin ismi: ".$this->adi."<br>";
		echo "Kedinin cinsiyeti: ".$this->cinsiyeti."<br>";
		echo "Kedinin tüy rengi: ".$this->tuyRengi."<br>";
	}

	}

	// class'dan nesne üretmek

		$kedi1=new Kediler();
		$kedi1->adi="Tekir";
		$kedi1->cinsiyeti="Erkek";
        $kedi1->tuyRengi="Beyaz";

		$kedi1->KediyiTanit();

        echo "<br>";

        $kedi2=new Kediler();
        $kedi2->KediyiTanit();

?>

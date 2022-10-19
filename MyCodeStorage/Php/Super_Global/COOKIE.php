<?php
/*
Ziyaretçi takibinde kullanılır
Metin dosyasına veriler yazılır, daha sonra
bu dosyadan okunabilir, geçerliliğne göre.
	setcookie("ad","deger",geçerlilikzamani);

*/

	setcookie('Site','RC eğitim',time()+60);
// 60 değeri saniye cinsinden, istenilen saniye yazılır.
	$_COOKIE['Site'];
// bu kod ile değer alınır.
?>

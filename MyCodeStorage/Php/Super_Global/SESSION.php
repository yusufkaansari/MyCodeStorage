<?php
/*
Oturumda verileri tutmak ve bunları okumakta kullanılır.
Oturum tarayıcınızı açınca başlar ve kapatınca tamamlanır.
*/

	session_start();
// oturum başlatmak ve kaydetmek için kullanılır.

	session_unset();
// tüm oturum verilerini siler

	session_destroy();
// oturumu yok eder.

	$_SESSION['Site']="http://rcegitim.tv";


    //PHP Indexed Arrays
    $dizi=array("Adı","soyadi","no");

    //PHP Associative Arrays
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    $_SESSION['kullaniciBilgi']=$dizi;
    $_SESSION['kullaniciYasi']=$age;

    echo $_SESSION['kullaniciYasi']['Peter'];
    print("<br>");

    echo $_SESSION['kullaniciBilgi'][0];
?>

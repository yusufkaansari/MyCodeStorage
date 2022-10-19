<?php
	session_start();

	$_SESSION['Site']="http://rcegitim.tv";


//PHP Indexed Arrays
    $dizi=array("Adı","soyadi","no");
    $_SESSION['kullaniciBilgi']=$dizi;
    echo $_SESSION['kullaniciBilgi'][0];
    print("<br>");

//PHP Associative Arrays
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    $_SESSION['kullaniciYasi']=$age;
    echo $_SESSION['kullaniciYasi']['Peter'];
    print("<br>");

//Foreach ile İlişkisel dizi yazdırma
	foreach ($_SESSION['kullaniciYasi'] as $key => $value) {
        echo "isim: ".$key."<br>";
        echo "yaş: ".$value."<br>";
    }


?>

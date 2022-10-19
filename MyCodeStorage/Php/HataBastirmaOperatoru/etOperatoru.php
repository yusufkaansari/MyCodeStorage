<?php
/*
    Hata bastırma operatörü

    Hata bastırma operatörü (@) et işaretidir. Her deyimin önünde kullanılabilir. Hata oluşturacak yerlerin başına bunu koyduğunuzda ekrana bir hata çıktısı verdirmemeye yarar.

    Hatayı görmezden gelmeye ve sonucu olumsuz yapmamaya yarar.

    Diyelim bir bölme işlemi yaptırıyoruz, bu bölme işlemine belki 0 rakamını da yazabiliriz. 0 yazdığımızda PHP bir rakamı 0 a bölemeyeceği için hata verecektir. Bu durumda bu operatör kullanarak hatayı bastırabiliriz. Örnek:
**/
    
    $a = 10;
    $b = 0;
    $sonuc = @($a/$b);
    echo $sonuc;

    
    /*
    Ekranda hata yazmaz onun yerine olumsuz sonuç döner.
    
    */
?>
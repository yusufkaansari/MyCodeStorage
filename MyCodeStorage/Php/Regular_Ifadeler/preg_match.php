<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    // if (preg_match(/sorgu/,sorgunun yapıldığı veri, sorgu sonucu)){
    //.....
    //}

    $text = "php ile düzenli ifadeler ve işlemleri";
    if(preg_match("/düzenli/",$text,$sonuc)){
      print $sonuc[0];
    }

    //çıktısı => düzenli

    ?>
  </body>
</html>

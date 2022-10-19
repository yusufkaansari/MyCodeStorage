<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    // preg_split fonsiyonu ile istediğimiz bir veriyi, istediğimiz bir noktadan bölerek ayrıştırabiliriz.

    $bolme = preg_split("/:/",'1:2:3');
    foreach ($bolme as $eleman) {
      print "$eleman <br>";
    }

    //çıktısı => 1
    //           2
    //           3



    // Diğer örnek
    $veri="1:2:::3:4::::::::5:6:7";
    $bolme=preg_split("/:+/",$veri);
    foreach ($bolme as $eleman) {
      print "$eleman <br>";
    }
    ?>
  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $text = "php ile düzenli ifadeler ve işlemleri";
    if(preg_match("/düzenli/",$text,$sonuc)){
      print $sonuc[0];
    }

    echo "<br><br><br>";

    $bolme = preg_split("/:/",'1:2:3');
    foreach ($bolme as $eleman) {
      print "$eleman <br>";
    }

    echo "<br><br><br>";

    $veri="1:2:::3:4::::::::5:6:7";
    $bolme2=preg_split("/:+/",$veri);
    foreach ($bolme2 as $eleman) {
      print "$eleman <br>";
    }
    ?>
  </body>
</html>

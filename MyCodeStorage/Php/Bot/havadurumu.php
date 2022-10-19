<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    /* bir hava durumu sitesine girilir ve hava sıcaklığı
      yazan yerin kaynak kodları alınır.
      <ziko ng-bind="sondurum[0].sicaklik | comma " class="ng-binding">7,6</ziko>
      bu şekilde bir html olmalıdır.
      <ziko.*class="ng-binding">([0-9]{1,2})</ziko> şeklinde bir desen yazmak gerekir.
    */

    $iladi="samsun";
    $site=implode("",file("https://www.hurriyet.com.tr/hava-durumu/$iladi/"));

    $desen='/<div.*temp">([0-9]{1,2})<sup class="degree">/';
    preg_match_all($desen,$site,$durum);
    //print_r($durum);
    echo "$iladi hava sıcaklığı: ".strip_tags($durum[0][0])." Derecedir.<br>";

    /*
    //yeni kodlar:
    $iladi="samsun";
    $veri=file_get_contents("https://www.hurriyet.com.tr/hava-durumu/$iladi/");

    //preg_match_all('@eşlenecek değer başlangıç(.*?)eşlenecek değer bitiş@si',$veri,$baslik);
    //<div class="temp">8°<span class="after-temp">C</span></div>
    //<div class="content-card-temp">15<sup class="degree">°</sup>C</div>
    preg_match_all('@<div class="content-card-temp">(.*?)<sup class="degree">@si',$veri,$baslik);
    echo "$iladi hava sıcaklığı: ".$baslik[0][0]." Derecedir.<br>";
    //print_r($baslik);
    */
     ?>
  </body>
</html>

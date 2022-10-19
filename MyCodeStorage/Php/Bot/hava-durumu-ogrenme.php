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

    $iladi="Samsun";
    $site=implode("",file("https://www.mgm.gov.tr/?il=$iladi"));

    $desen='/<ziko.*class="ng-binding">([0-9]{1,2})<\/ziko>/';
    preg_match_all($desen,$site,$durum);
    echo "$iladi hava sıcaklığı: ".$durum[0][0]." Derecedir.<br>";
    
     ?>
  </body>
</html>

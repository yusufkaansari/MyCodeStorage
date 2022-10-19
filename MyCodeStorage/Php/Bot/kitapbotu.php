<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
  
    <?php
    
    function get_string_between($string, $start, $end){
      $string = ' ' . $string;
      $ini = strpos($string, $start);
      if ($ini == 0) return '';
      $ini += strlen($start);
      $len = strpos($string, $end, $ini) - $ini;
      return substr($string, $ini, $len);
    }
    if(!file_exists ('kitapbotu.json') ){
      $syf=2;
    for ($i=1; $i <=$syf ; $i++) {
      $veri[$i-1]=file_get_contents("https://www.idefix.com/kategori/Kitap/Edebiyat/Roman/grupno=00211?Page=$i");
      preg_match_all('@<a style="box-shadow: none;" title="(.*?)" href=@si',$veri[$i-1],$baslik);
      $baslikpg[$i-(1)]=$baslik;
      preg_match_all('@<div class="image-area">(.*?)</div>@si',$veri[$i-1],$resimurl);

      $resimurlpg[$i-(1)]=$resimurl;
      preg_match_all('@<span id="prices" class="price price" data-price=\'(.*?)\'@si',$veri[$i-1],$fiyat);
      $fiyatpg[$i-(1)]=$fiyat;
    }
    //<img class=" lazyloaded" data-src="https://i.idefix.com/cache/150x242-0/originals/0001836978001-1.jpg" alt="Ben Kirke" src="https://i.idefix.com/cache/150x242-0/originals/0001836978001-1.jpg">

    // print_r($resimurlpg);
    for ($j=0; $j <$syf ; $j++) {

    for ($i=0; $i < 36 ; $i++) {
      $isimler[$j][$i]=get_string_between($baslikpg[$j][0][$i],'title="','" href' );
      $resimler[$j][$i]=get_string_between($resimurlpg[$j][0][$i],'data-src="','" alt' );
      $fiyatlar[$j][$i]=get_string_between($fiyatpg[$j][0][$i],"data-price='","'" );
      }
    }
    //print_r($resimler);
    $sayi=0;
    for ($j=0; $j <$syf ; $j++) {
    for ($i=0; $i < 36 ; $i++) {
        $myObj[$sayi] = array(
        "name" => $isimler[$j][$i],
        "price" => $fiyatlar[$j][$i],
        "photourl" => $resimler[$j][$i]
        );
        $sayi++;
    }
    }
    $myJSON=json_encode($myObj);
    //print_r($myJSON);
    $fp = fopen('kitapbotu.json', 'w');
    fwrite($fp, $myJSON);
    fclose($fp);
    echo "<h3> kitapbotu.json dosyası oluşturuldu. Dosyayı açmak için <a href='kitapbotu.json' target='_blank'>tıklayın</a>. <br> Json dosyasının parse edilmiş hali için:<a href='kitapbotuoku.php' target='_blank'>tıklayın</a></h3>";
  } else {
    echo "<h3> kitapbotu.json dosyası daha önce oluşturulmuş. Dosyayı açmak için <a href='kitapbotu.json' target='_blank'>tıklayın</a><br> Json dosyasının parse edilmiş hali için:<a href='kitapbotuoku.php' target='_blank'>tıklayın</a></h3>";
  }
    ?>
  </body>
</html>

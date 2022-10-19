<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function get_between($input, $start, $end)
    {
      $substr = substr($input, strlen($start)+strpos($input, $start), (strlen($input) - strpos($input, $end))*(-1));
      return $substr;
    }

    function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
  }

      $veri=file_get_contents("https://www.idefix.com/kategori/Kitap/Edebiyat/Roman/grupno=00211");
      //preg_match_all('@eşlenecek değer başlangıç(.*?)eşlenecek değer bitiş@si',$veri,$baslik);
      preg_match_all('@<a style="box-shadow: none;" title="(.*?)" href=@si',$veri,$baslik);
      //preg_match_all('@<span id="prices" class="price price" data-price=\'(.*?)\'@si',$veri,$fiyat);
      preg_match_all('@<span id="prices" class="price price" data-price=\'(.*?)\'@si',$veri,$fiyat);
      //<span id="prices" class="price price" data-price="26,60">26,60 TL </span>
      //<a style="box-shadow: none;" title="Körlük" href="/Kitap/Korluk/Edebiyat/Roman/Dunya-Roman/urunno=0001704045001" class="product-image">
      //$isimler = explode('title="', $baslik);
      //echo count($baslik[0]);
      //print_r($baslik);
      //echo $baslik[0][0];
      //$isim=$baslik[0][0];
      //echo get_between($isim,'title="','" href');
      //echo get_between($baslik[0][1],'title="','"');

      for ($i=0; $i < count($baslik[0]) ; $i++) {
        $isimler[$i]=get_string_between($baslik[0][$i],'title="','" href' );
        $fiyatlar[$i]=get_string_between($fiyat[0][$i],"data-price='","'" );
      }

      for ($i=0; $i < count($baslik[0]) ; $i++) {
        echo $isimler[$i]."<br>";
        echo $fiyatlar[$i]."<br><br>";
      }


      //print_r($fiyatlar);
      //echo $fiyat[0][0];
      //echo get_between($fiyat[0][1],'data-price=\'','\'>' );
      //echo $fiyat[0][1];
      //echo strip_tags($baslik[0][$i]);

     ?>
  </body>
</html>

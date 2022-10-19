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
      for ($i=1; $i <=10 ; $i++) {
        $veri[$i-1]=file_get_contents("https://www.idefix.com/kategori/Kitap/Edebiyat/Roman/grupno=00211?Page=$i");
        preg_match_all('@<a style="box-shadow: none;" title="(.*?)" href=@si',$veri[$i-1],$baslik);
        $baslikpg[$i-(1)]=$baslik;
        preg_match_all('@<span id="prices" class="price price" data-price=\'(.*?)\'@si',$veri[$i-1],$fiyat);
        $fiyatpg[$i-(1)]=$fiyat;
      }

      /*
      $veri=file_get_contents("https://www.idefix.com/kategori/Kitap/Edebiyat/Roman/grupno=00211");
      preg_match_all('@<a style="box-shadow: none;" title="(.*?)" href=@si',$veri,$baslik);
      preg_match_all('@<span id="prices" class="price price" data-price=\'(.*?)\'@si',$veri,$fiyat);
      */

      for ($j=0; $j <10 ; $j++) {

      for ($i=0; $i < 36 ; $i++) {
        //$tempb=$baslikpg[$j][$i];
        //$tempf=$fiyatpg[$j][$i];
        $isimler[$j][$i]=get_string_between($baslikpg[$j][0][$i],'title="','" href' );
        $fiyatlar[$j][$i]=get_string_between($fiyatpg[$j][0][$i],"data-price='","'" );
        }

      }
      $sayi=0;
      for ($j=0; $j <10 ; $j++) {
      for ($i=0; $i < 36 ; $i++) {
        //echo $isimler[$j][$i]."<br>";
        //echo $fiyatlar[$j][$i]."<br><br>";
        //$j+1)*($i+1)
          $myObj[$sayi] = array(
          "name" => $isimler[$j][$i],
          "price" => $fiyatlar[$j][$i]
          );
          $sayi++;
      }
      }
      $myJSON=json_encode($myObj);
      print_r($myJSON);
      //$deger= $isimler[0][0];
      //$myObj->name =$deger;
      /*
      $myObj->name = "John";
      $myObj->age = 30;
      $myObj->city = "New York";

      $myJSON = json_encode($myObj);
      */
      //print_r($baslikpg[0][0][1]);
      //echo $fiyat[0][0];
      //echo get_between($fiyat[0][1],'data-price=\'','\'>' );
      //echo $fiyat[0][1];
      //echo strip_tags($baslik[0][$i]);

     ?>
  </body>
</html>

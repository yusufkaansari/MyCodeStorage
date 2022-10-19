<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .kitap{
        margin: 10px;
        text-align: center;
        float: left;
        width: 170px;
        height: 350px;
      }
    </style>
  </head>
  <body>

    <?php
    // Read JSON file
    $json = file_get_contents('kitapbotu.json');

    //Decode JSON
    $json_data = json_decode($json,true);

    //echo count($json_data);
    for ($i=0; $i < count($json_data); $i++) {
      echo '<div class="kitap"><img src="'.$json_data[$i]["photourl"].'" width="150px" height="242px">'."<br>";
      echo "Kitap: ".$json_data[$i]["name"]."<br>";
      echo "Fiyatı: ".$json_data[$i]["price"]."</div>";


    }
    //echo $json_data[0]["name"];150x242
    //print_r($json_data);


        ?>
  </body>
</html>

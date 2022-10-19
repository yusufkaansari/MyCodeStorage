<!DOCTYPE html>
<html>
<body>

<?php
//echo file_get_contents("https://www.turkanime.net/index.html");

$veri=file_get_contents("https://www.turkanime.net/");

//preg_match_all('@eşlenecek değer başlangıç(.*?)eşlenecek değer bitiş@si',$veri,$baslik);

preg_match_all('@<div class="panel-title">(.*?)</div>@si',$veri,$baslik);

//echo strip_tags($baslik[0][1]);
for ($i=2; $i < 12 ; $i++) {
  echo strip_tags($baslik[0][$i]);
}
//echo "Anime başlığı:".$baslik[0][2];
?>

</body>
</html>

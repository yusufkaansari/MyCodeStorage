<!DOCTYPE html>
<html>
<body>

  <?php
    $date = "1970-01-01 00:00:00";
    $pattern = "/[-\s:]/";
    /*üstteki kod şu anlama gelir:
     - karakteri veya \s yani boşluk karakteri veya : karakterine göre ayır
    */
    $components = preg_split($pattern, $date);
    print_r($components);

    /* çıktısı =>
        Array
    (
        [0] => 1970
        [1] => 01
        [2] => 01
        [3] => 00
        [4] => 00
        [5] => 00
    )
    */
  ?>

</body>
</html>

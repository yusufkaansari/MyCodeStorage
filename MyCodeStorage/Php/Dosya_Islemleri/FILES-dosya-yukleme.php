<html>
    <head>
        <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    // post değişkenine dosyaYukle isimli bir değişken atanmış ise $_FILES değişkeninin içeriğini ekrana yazdır.
    if(isset($_POST['dosyaYukle'])){
        echo "<pre>";
        print_r($_FILES);
        exit();
        // sayfanın akışını durdurur burdan sonra işlem yapılmaz.
    }
    ?><!-- $_SERVER['PHP_SELF'] kodu aynı sayfaya tekrar gelmeye yarar
    	     multipart/form-data kodu ile dosya yükleme işlemi yapılır-->
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="Dosya"/>
        <input type="submit" value="Yükle" name="dosyaYukle"/>
    </form>
</body>
</html>


<!-- ÇIKTISI
	 Array
(
    [Dosya] => Array
        (
            [name] => family-tree.jpg
            [type] => image/jpeg
            [tmp_name] => C:\xampp\tmp\phpF741.tmp
            [error] => 0
            [size] => 89652
        )

)
-->

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    // put your code here
    if(isset($_POST['dosyaYukle'])){
        echo "<pre>";
        print_r($_FILES);
        exit();
    }
    ?>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="Dosya"/>
        <input type="submit" value="Yükle" name="dosyaYukle"/>
    </form>
</body>
</html>

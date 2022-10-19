<html>
    <head>
        <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
	if(isset($_POST['dosyaYukle'])){
		echo "Dosya Adı: ". $_FILES['Dosya']['name']."<br>";
                echo "Dosya Type: ". $_FILES['Dosya']['type']."<br>";
                echo "Dosya Size: ". $_FILES['Dosya']['size']."<br>";
                echo "Dosya geçici dosya konumu: ". $_FILES['Dosya']['tmp_name']."<br><br>";

                echo "Resim Adı: ".$_FILES['Resim']['name']."<br>";
                echo "Resim Type: ".$_FILES['Resim']['type']."<br>";
                echo "Resim Size: ".$_FILES['Resim']['size']."<br>";
                echo "Resim geçici dosya konumu: ".$_FILES['Resim']['tmp_name']."<br>";
	}
    ?>

	<!-- 2 tane giriş alanı yaptık 2 dosya yüklemek için-->
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="Dosya"/>
        <input type="file" name="Resim"/>
        <input type="submit" value="Yükle" name="dosyaYukle"/>
    </form>
</body>
</html>
<!-- ÇIKTISI
Dosya Adı: 4.5.190.pdf
Dosya Type: application/pdf
Dosya Size: 1348237
Dosya geçici dosya konumu: C:\xampp\tmp\php54C7.tmp

Resim Adı: family-tree.jpg
Resim Type: image/jpeg
Resim Size: 89652
Resim geçici dosya konumu: C:\xampp\tmp\php54D8.tmp
-->

<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Örnek: PHP GET method</title>

</head>
<body>
<title>Örnek: PHP GET method</title>

<?php
if(isset($_GET["name"])){

    echo "<p>Merhaba,".$_GET["name"]."</p>";
}
?>
<form method="get"

action="<?php echo $_SERVER['PHP_SELF'];?>">

  <label for="inputName">Adınız:</label>

  <input type="text" name="name" id="inputName">

  <input type="submit" value="Submit">

</form>
<body>

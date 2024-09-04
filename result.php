<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $GelenAdSoyadDegeri=$_REQUEST["AdSoyad"];
    $GelenEmailDegeri=$_REQUEST["Email"];
    $GelenTelDegeri=$_REQUEST["phone"];
    $GelenCinsiyetDegeri=$_REQUEST["Cinsiyet"];
    $GelenYasDegeri=$_REQUEST["Yas"];
    echo"Adınız Ve Soyadınız:" .$GelenAdSoyadDegeri."<br/>";
    echo"Email Adresiniz:" .$GelenEmailDegeri."<br/>";
    echo"Telefon Numaranız:" .$GelenTelDegeri."<br/>";
    echo"Cinsiyetiniz:" .$GelenCinsiyetDegeri."<br/>";
    echo"Yaşınız:" .$GelenYasDegeri."<br/>";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Gelenaddegeri=$_GET["Adiniz"];
    $Gelenhobiler=$_GET["hobiler"];


    echo "Adınız Ve Soyadınız:".$Gelenaddegeri."<br/>";
    print_r($Gelenhobiler);
    ?>
</body>
</html>
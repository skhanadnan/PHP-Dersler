<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        *{
            margin:0;
            padding:0;
            box-sizing:0;
        }
    
        h1{
            background-color:purple;
            color:white;
            font-style:italic;
            font-weight:bold;
            text-shadow:5px 5px 10px black;
            width:100%;
            padding:20px;
          }

    </style>
</head>
<body>
<h1>PHP DERSLERİNE GİRİŞ</h1>
<?php
$SinavNotu=100;
echo ($SinavNotu>50) ? "Sinavdan Gectiniz" : "Sinavdan Kaldiniz";
?>
<br>
<?php
$Deger="Adnan";
$Sonuc=($Deger=="Adem") ? "Dogru" : "Yanlis";
echo $Sonuc;
?>
<br>
<?php
$deger1=1;
$message1="Merhaba Adnan Nasilsin?";
$message2="Merhaba Adem Nasilsin?";
$result = ($deger1==1) ? ($message1) : ($message2);
echo $result;
?>
<br>
<?php
$Deger1=100;
$Deger2=50;
$Sonuc = ($Deger1>$Deger2) ? ("x sayisi y sayisindan buyuktur.") : ("x sayisi y sayisindan kucuktur");
print($Sonuc);
?>


</body>
</html>
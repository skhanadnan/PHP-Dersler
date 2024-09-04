<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $urunAdi="Iphone 15";
    $urunFiyat=30000;
    $kdvOran=0.18;
    $kdvFiyat=$urunFiyat+($urunFiyat*$kdvOran);
    $sonuc="{$urunAdi} isimli ürün'ün fiyati {$kdvFiyat} TL dir";
    echo $sonuc."<br>";
    echo $sonuc[0]."<br>";
    echo $sonuc[10]."<br>";
    echo "Sonuc İsimli Cümlenin Uzunlugu:".strlen($sonuc)."<br>";
    echo "Sonuc İsimli Cümlenin Kelime Uzunlugu:".str_word_count($sonuc)."<br>";
    echo strtolower($sonuc)."<br>";
    echo strtoupper($sonuc)."<br>";
     ?>
     <?php
     $Num1=500;
     $Num2=250;
     echo "Sonuc:".($Num1+$Num2)."<br>";
     echo "Sonuc:".($Num1-$Num2)."<br>";
     echo "Sonuc:".($Num1*$Num2)."<br>";
     echo "Sonuc:".($Num1/$Num2)."<br>";
     echo ceil(4.7)."<br/>";
    echo floor(12.456)."<br/>";
    echo round(12.656)."<br/>";
    //Matematik işlemi Yapan Fonksiyonlar//
    echo sqrt(9)."<br/>";
    echo pow(2,5)."<br/>";
    echo abs(-50)."<br/>";
    ?>
</body>
</html>
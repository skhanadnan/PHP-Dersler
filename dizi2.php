<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        div{
            background-color:purple;
            color:White;
            font-size:35px;
            font-style:italic;
            text-decoration:underline;
            letter-spacing:2px;
            text-shadow:10px 10px 25px black;
            padding:50px;
        }
    </style>
</head>
<body>
   <div>
    Php Derslerine Giris
   </div> 
   <?php
   $Language = array("HTML5","CSS3","JAVASCRİPT","PHP","ASP.NET");
   echo "<pre>";
   print_r($Language);
   echo "</pre>";
   $dergerbir=current($Language);
   $degeriki=next($Language);
   echo "Dizinin bir ve ikinci elemanlari:".$dergerbir." ve ".$degeriki."<br/>";
   $degerson= end($Language);
   $degersonbir = prev($Language);
   echo "Dizinin Son ve sondan bir önceki elemani:".$degerson." ve ".$degersonbir."<br/>";
   ?>
   <?php
   $Deger="Adnan İsikhan PHP Egitim Seti";
   $Result= explode(" ",$Deger);
   echo "Metnin İlk Hali:".$Deger."<br/>";
   echo "Metnin Dizi Hali:";
   print_r($Result);
   ?>
   <?php
   $Name = array("Adnan","Adem","Can","Gülseren","Merve","Sude");
   echo "<pre>";
   print_r($Name);
   echo "</pre>";
   $Names = implode(" Isikhan, ",$Name);
   echo $Names;
   ?>
   <?php
   $dizi1 = array("Adnan","Gülseren","Merve");
   $dizi2 = array("Melike","Ece","Beyza");
   $result = array_merge($dizi1,$dizi2);
   echo "<pre>";
   print_r($result);
   echo "</pre>";
   ?>
   <?php
   $a = array("ad","soyad","yas");
   $b = array("Adnan","İsikhan","27");
   $c = array_combine($a,$b);
   print_r($c);
   ?>
   <?php
   $isim = array("Adnan","Adem","Gülcan","Bedi","Gülseren","Merve");
   echo "<pre>";
   print_r($isim);
   echo "</pre>";
   $sonuc=array_slice($isim,0,1);
   echo "<pre>";
   print_r($sonuc);
   echo "</pre>";
   ?>
</body>
</html>
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
            font-size:30px;
            font-style:italic;
            padding:50px;

        }
    </style>
</head>
<body>
    <div>
        PHP DERSLERİNE GİRİS
    </div>
    <?php
    $Language = array("HTML5","CSS3","JAVASCRİPT","PHP","ASP.NET","PYTHON");
    echo "<pre>";
    print_r($Language);  
    echo"</pre>";
    array_unshift($Language,"JAVA");
    echo "<pre>";
    print_r($Language);
    echo "</pre>";
    ?>
    <?php
    $cars = array("Mercedes","Bmw","Hyundai","Fiat","Volkswagen","Toyota");
    echo "<pre>";
    print_r($cars);
    echo "</pre>";
    array_push($cars,"Land Rover");
    echo "<pre>";
    print_r($cars);
    echo "</pre>";
    ?>
    <?php
    $Colors = array("Blue","White","Red","Orange","Pink","Gray","Black","Purple","Yellow","Green");
    echo "<pre>";
    print_r($Colors);
    echo "</pre>";
    $silbir=array_pop($Colors);
    $siliki=array_pop($Colors);
    $siluc=array_pop($Colors);
    echo "<pre>";
    print_r($Colors);
    echo "Silinen ELemanın Degeri:".$silbir."<br/>";
    echo "Silinen ELemanın Degeri:".$siliki."<br/>";
    echo "Silinen ELemanın Degeri:".$siluc."<br/>";
    echo "</pre>";
    ?>
    <?php
    $dizi = array ("A","B","C","D","E","F","G","H","K","L","M","N");
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";
    $birinci=current($dizi);
    echo"Dizi degiskenin ilk elemani:".$birinci."<br/>";
    ?>

    <?php
    $Names = array("Adnan","Adem","Beren","Gülseren","Ece","Merve","Melike","Gülcan");
    echo "<pre>";
    print_r($Names);
    $degerson = end($Names);
    echo "</pre>";
    echo "Dizi Degerinin Son Elemaani:".$degerson."<br/>";
    ?>
</body>
</html>


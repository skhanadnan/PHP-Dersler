<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$Colors= array("Blue","Black","Red","Orange","White","Purple","Pink");
$Nesne= array("Car","House","Chair","Table","Computer","Coat","T-shirt");
foreach($Colors as $color){
    foreach($Nesne as $obje){
        echo $color." ".$obje."<br/>";
    }
}
?>
</body>
</html>
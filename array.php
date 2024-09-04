<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$Languages=array("PHP",
"JAVASVRİPT",
"PYTHON",
"NODE JS",
"REACT JS",
"C#",
"HTML",
"CSS");
$LengthArr=count($Languages);
for($i=0;$i<$LengthArr;$i++){
    echo $Languages[$i]."<br/>";
}
?>
<?php
$Age=array("Adnan" => "27",
           "Merve" => "23",
           "Gülseren" => "25");
echo "Adnan is " . $Age["Adnan"] . " years old"."<br/>";
echo "Gülseren is ".$Age["Gülseren"]." years old"."<br/>";
echo "Merve is ". $Age["Merve"]. " years old"."<br/>";
?>
<?php
$cars=array(
    array("Mercedes",10,20),
    array("Bmw",5,10),
    array("Skoda",8,10),
    array("Hyundai",10,15)
);

echo $cars[0][0]." Satilan Arac Stokta kalan ".$cars[0][1]." Satilan Arac Sayisi ".$cars[0][2];
 ?>
<br>
<?php
$Colors= array();
$Colors[]="Blue"."<br/>";
$Colors[]="Red"."<br/>";
$Colors[]="Black"."<br/>";
$Colors[]="Orange"."<br/>";
$Colors[]="Purple"."<br/>";
$Colors[]="Pink"."<br/>";
print_r($Colors);
?>
<br>
<?php
$Names=array("PHP" => "Adnan","HTML" => "Adem","CSS" => "Burak","JS" => "Beyza");
$Names["JS"]="SUDE";
print_r($Names);
?>
<?php
$Languages = array("HTML","CSS","JAVASCRIPT","PHP","PYTHON","C#","ASP.NET");

echo"<pre>";
print_r($Languages);
echo"</pre>";

$Programme =  $Languages;
echo"<pre>";
print_r($Programme);
echo"</pre>";
?> 

<?php
$Cars= array("Mercedes","Bmw","Volkswagen","Hyundai","Toyota","Fiat");
$Model= array("Benz A180","320İ","Passat","İ20","Corolla","Punto");
?>
<?php
$Lessons = array("Matematik","Fizik","Kimya","Edebiyat");
echo $Lessons[0]."<br/>";
echo $Lessons[1]."<br/>";
echo $Lessons[2]."<br/>";
echo $Lessons[3]."<br/>";
?>
<br>
<?php
$City = array("İstanbul","Ankakara","Adana","Bursa","Mardin","Muş","Hakkari","Şırnak");
$say=count($City);
echo $City[0]."<br/>";
echo $City[1]."<br/>";
echo $City[2]."<br/>";
echo $City[3]."<br/>";
echo $City[4]."<br/>";
echo $City[5]."<br/>";
echo $City[6]."<br/>";
echo $City[7]."<br/>";
echo $say;
?>
<?php
$Degerler = array(
    
);

?>
</body>
</html>
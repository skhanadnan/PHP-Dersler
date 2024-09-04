<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$kurslar=array(
"PHP",
"BOOTSTRAP",
"JAVASCRIPT",
"JS"
);
?>
<?php
$kurslar=[
    "PHP",
    "BOOTSTRAP",
    "JAVASCRIPT",
    "JS"
];
?>
<?php
echo "<pre>";
print_r($kurslar);
echo "</pre>";
?>
<?php
echo $kurslar[0]."<br/>";
echo $kurslar[1]."<br/>";;
echo $kurslar[2]."<br/>";;
echo $kurslar[3];
?>
<?php
$kurslar=[
    "PHP"=>["Egitmen"=>"Adnan","Sure"=>"42 Saat","Puan"=>"5"],
    "JAVASCRİPT"=>["Egitmen"=>"Adem","Sure"=>"40 Saat","Puan"=>"5"],
    "HTML"=>["Eğitmen"=>"Ali","Sure"=>"11 Saat","Puan"=>"10"]
];
?>

<?php
echo $kurslar["PHP"]["Egitmen"];
echo $kurslar["JAVASCRİPT"]["Sure"];
echo $kurslar["HTML"]["Puan"];
?>
<br>
<?php
$Language = [
    "PHP",
    "HTML",
    "CSS",
    "JAVASCRIPT",
    "JQUERY",
    "PYTHON",
    "BOOTSTRAP"
];
echo count($Language)."<br/>";
echo implode("<br/>",$Language)."<br/>";
echo is_array($Language)."<br/>";
print_r(array_reverse($Language))."<br/>";
asort($Language)."<br/>";
print_r($Language);
?>
</body>
</html>
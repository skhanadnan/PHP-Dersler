<?php
function familyNames($name,$age){
        echo "$name Işıkhan. Yasiniz:$age <br/>";
}

familyNames("Adnan",27);
familyNames("Adem",20);
familyNames("Gülseren",25);
familyNames("Merve",22);
familyNames("Sude",10);
familyNames("Gülcan",52);
familyNames("Bedi",58);
familyNames("Melike",28);
familyNames("Şencan",40);
?>

<?php

function topla($Num1,$Num2){
    echo $Num1 + $Num2;
}

topla(19,20);

?>


<?php
function cikar($Num3,$Num4){
    echo $Num3 - $Num4;
}
cikar(50,20);
?>

<?php
function carp($Num5,$Num6){

    echo $Num5 * $Num6;

}

carp(10,100);
?>

<?php
function bol($Num7,$Num8){
    echo $Num7 / $Num8;
}

bol(30,2);
?>

<?php

function sum($sayi1,$sayi2)
{
    return $sayi1 + $sayi2;
}

echo sum(10,20) + topla(10,20) + topla(10,20);

?>

<?php
$a=10;
function islem($b){
return $a+$b;
}

echo(20);
?>

<br><br>

<?php
$c=100;
function calculate1($d){
    global $c;
    return $c+$d;
}
echo calculate1(20);
?>
<br><br>
<?php
$x=20; $y=40;
function calculate($z){
    global $x , $y;
    return $x+$y+$z;
}
echo calculate(10);
?>
<br><br>
<?php
function toplama($sayi3,$sayi4){
    function carpma($sayi3,$sayi4){
        echo "İki Sayinin Caripimi:" .($sayi3*$sayi4).;
    }
    echo "Toplama Sonucu:" .($sayi3+$sayi4);
}

toplama(10,20);
carpma(10,10);
?>
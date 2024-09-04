<?php
$kodu="skhanadnan";
$password="1234";
if($kodu=="skhanadnan" and $password=="1234"){
    echo "Giriş Başarılı";
}else{
    echo "Giriş Başarısız";
}

?>
<br>
<?php
$num1=11;
if($num1%2==0){
    echo "Girilen Sayi Çifttir";
}else{
    echo "Girilen Sayı Tektir";
}
?>

<br>

<?php
$num2=-10;
if($num2>0){
    echo "Girilen sayi pozitiftir";
}else{
    echo "Girilen sayi negatiftir";
}

?>
<br>
<?php
$not1=60;
$not2=30;
$not3=20;
$ort=(($not1+$not2+$not3)/3);

if($ort>=50){
    echo "Geçti";
}else{
    echo "Kaldi";
}

?>
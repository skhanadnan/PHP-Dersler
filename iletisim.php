<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result.php" method="post">
       <table>
        <tr>
            <td>Adınız Soyadınız:</td>
            <td><input type="text" name="AdSoyad" id=""></td>
        </tr>
        <tr>
            <td>E-mail Adresiniz:</td>
            <td><input type="email" name="Email" id=""></td>
        </tr>
        <tr>
            <td>Cep:</td>
            <td><input type="tel" name="phone" id=""></td>
        </tr>
        <tr>
            <td>Cinsiyet:</td>
            <td><input type="radio" name="Cinsiyet" id="" value="Kadın">Kadın
            <input type="radio" name="Cinsiyet" value="Erkek" id="">Erkek</td>
        </tr>
        <tr>
        <td>Yaşınız:</td>
        <td><select name="Yas" id="">
        <option value=""></option>
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="40">40</option>
        <option value="50">50</option>
        <option value="60">60</option>
        </select></td>
       </tr>
        <tr>
        <td><input type="submit" value="Gönder"></td>
       </tr>
       </table>

    </form>   
</body>
</html>
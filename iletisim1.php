<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result1.php" method="get">
        <table>
            <tr>
                <td>Adınız:</td>
                <td><input type="text" name="Adiniz" id=""></td>
            </tr>
            <tr>
                <td>Hobileriniz:</td>
                <td><input type="checkbox" name="hobiler[]" value="book" id="">Kitap Okumak <br>
                <input type="checkbox" name="hobiler[]" value="spor" id="">Spor Yapmak <br>
                <input type="checkbox" name="hobiler[]" value="computer" id="">Bilgisayar <br>
                <input type="checkbox" value="Shopping" name="Alisveris" id="">Alışveriş <br>
                <input type="checkbox" value="Movie" name="hobiler[]" id="">Sinema <br>
                <input type="checkbox" value="Tiyatro" name="hobiler[]" id="">Tiyatro</td>
            </tr>
            <tr>
                <td><input type="submit" value="Kaydet"></td>
            </tr>

        </table>
    </form>
</body>
</html>
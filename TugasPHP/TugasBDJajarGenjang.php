<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas & Keliling Jajar Genjang</title>
</head>
<body>
    <h1>Menghitung Luas Jajar Genjang</h1>
    <form method="POST">
        <table>
            <tr>
                <td>Alas Jajar Genjang </td>
                <td>:</td>
                <td>
                    <input type="text" name="alas" required>
                </td>
            </tr>
            <tr>
                <td>Tinggi Jajar Genjang </td>
                <td>:</td>
                <td>
                    <input type="text" name="tinggi" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Hitung Luas">
                </td>
            </tr>
        </table>
    </form>
    <br><hr><h1>Menghitung Keliling Jajar Genjang</h1>
    <form method="POST">
        <table>
        <tr>
                <td>Sisi A Jajar Genjang </td>
                <td>:</td>
                <td>
                    <input type="text" name="sisia" required>
                </td>
            </tr>
            <tr>
                <td>Sisi B Jajar Genjang </td>
                <td>:</td>
                <td>
                    <input type="text" name="sisib" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit2" value="Hitung Keliling">
                </td>
            </tr>
        </table>
    </form>
    <hr>
</body>
<?php
if(isset($_POST['submit'])){
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];

    $luasjajargenjang = $alas * $tinggi;
    echo 'Menghitung Luas Jajar Genjang';
    echo '<br> Alas Jajar Genjang= '.$alas;
    echo '<br> Tinggi Jajar Genjang = '.$tinggi;
    echo '<br> Luas Jajar Genjang (alas x tinggi) : '.$luasjajargenjang;
}
if(isset($_POST['submit2'])){
    $a = $_POST['sisia'];
    $b = $_POST['sisib'];

    $kelilingjajargenjang = 2 * ($a + $b);
    echo 'Menghitung Keliling Jajar Genjang';
    echo '<br> Sisi A Jajar Genjang= '.$a;
    echo '<br> Sisi B Jajar Genjang = '.$b;
    echo '<br> Luas Jajar Genjang 2 x (sisi A + sisi B) : '.$kelilingjajargenjang;
}
?>
</html>
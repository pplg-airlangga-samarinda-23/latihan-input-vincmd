<!DOCTYPE html>
<html lang="en">
<head>
    <title>volume tabung</title>
</head>
<body>
    <form method="POST">
        <div>
            <label>tinggi tabung</label><br>
            <input  name="tinggi" type="tabung" placeholder="Masukkan tinggi tabung">
        </div>
        <div>
            <label>jari-jari tabung</label><br>
            <input name="jari" type="jari tabung" placeholder="Masukkan jari-jari tabung">
        </div>
        <div>
            <button>volume tabung</button>
        </div>
    </form>
    <?php
    $phi =3.14159;
    $tinggi = @$_POST['tinggi'];
    $jari = @$_POST['jari'];
    $volume = ($phi *  $jari * $jari * $tinggi);
    echo "Volume tabung = $volume";
    ?>
</body>
</html>
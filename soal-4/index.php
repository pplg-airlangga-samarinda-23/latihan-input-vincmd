<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 4</title>
</head>
<body>
    <h1>Soal 4</h1>
    <form method="POST">
        <div>
            <label>Masukkan Tanggal Lahir:</label><br>
            <input type="date" name="tanggal_lahir" required>
        </div>
        <div>
            <button type="submit">Hitung Umur</button>
        </div>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["tanggal_lahir"])) {
            $tanggal_lahir = $_POST["tanggal_lahir"];
            $tanggal_lahir = new DateTime($tanggal_lahir);
            $sekarang = new DateTime();
            $umur = $sekarang->diff($tanggal_lahir)->y;
            echo "Umur Anda adalah $umur tahun.";
        }
    ?>

</body>
</html>
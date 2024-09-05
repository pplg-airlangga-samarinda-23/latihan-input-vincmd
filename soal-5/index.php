<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 5</title>
</head>
<body>
    <h1>Soal 5</h1>
    <form method="post">
        <div>
            <label>Masukkan Nama Anda</label><br>
            <input name="nama" type="text" placeholder="Masukkan nama">
        </div>
        <div>
            <label>Masukkan Angka </label><br>
            <input name="bilangan" type="number" placeholder="angka antara 5-20"><br>
        </div>
        <button type="submit">Konversi</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan = (int)$_POST["bilangan"];
        $nama = $_POST["nama"]; 

        if ($bilangan >= 5 && $bilangan <= 20) {
            echo "<h2>Hasil:</h2>";
            for ($i = 1; $i <= $bilangan; $i++) {
                if ($i % 2 == 0) {
                    echo "$i $nama <br>"; 
                } else {
                    echo "$i <br>"; 
                }
            }
        } else {
            echo "<p>Bilangan harus antara 5 dan 20.</p>";
            
        }
    }
    ?>
</body>
</html>
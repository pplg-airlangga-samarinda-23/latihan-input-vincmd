<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Soal 1</title>
</head>
<body>
    <h1>Soal 1</h1>
    <form method="post">
        <input type="number" name="nilai" placeholder="Masukkan nilai KM" required>
        <select name="pilihan">
            <option value="km_to_m">KM ke M</option>
            <option value="km_to_cm">KM ke CM</option>
            <option value="km_to_mm">KM ke MM</option>
        </select>
        <button type="submit">Konversi</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pilihan = $_POST["pilihan"];
            $nilai = $_POST["nilai"];
        
            if (is_numeric($nilai)) {
                if ($pilihan == "km_to_m") {
                    $hasil = $nilai * 1000;
                    $satuan = "Meter";
                } elseif ($pilihan == "km_to_cm") {
                    $hasil = $nilai * 100000;
                    $satuan = "Centimeter";
                } elseif ($pilihan == "km_to_mm") {
                    $hasil = $nilai * 1000000;
                    $satuan = "Milimeter";
                } else {
                    $hasil = "Pilihan tidak valid";
                    $satuan = "";
                }
                
                echo "Hasil konversi: $nilai Kilometer = $hasil $satuan";
            } else {
                echo "Nilai harus berupa angka";
            }
        }
    ?>
</body>
</html>
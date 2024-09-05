<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 3</title>
</head>
<body>
    <h1>Soal 3</h1>
    <form method="POST">
        <div>
            <label>Masukkan Angka Pertama</label><br>
            <input  name="pertama" type="pertama" placeholder="Masukkan angka ">
        </div>
        <div>
            <label>Masukkan Angka Kedua</label><br>
            <input name="kedua" type="kedua" placeholder="Masukkan angka"><br>
            <label>Pilih operasi</label><br>
        <select name="value">
            <option value="tambah">tambah</option>
            <option value="kurang">kurang</option>
            <option value="kali">kali</option>
            <option value="bagi">bagi</option>
        </select>
        </div>
        <div>
            <button>submit</button>
        </div>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $value = $_POST["value"];
            $pertama = $_POST["pertama"];
            $kedua = $_POST["kedua"];
                if ($value == "tambah") {
                    $hasil = $pertama + $kedua ;
                } elseif ($value == "kurang") {
                    $hasil = $pertama - $kedua;
                } elseif ($value == "kali") {
                    $hasil = $pertama * $kedua;
                } elseif ($value == "bagi") {
                    $hasil = $pertama / $kedua;
                } else {
                    $hasil = "Pilihan tidak valid";
                    $satuan = "";
                }
                
                echo "Hasil konversi: $hasil";
            } 
        else {
            echo "Anda belum mengirimkan form";
        }
    ?>
</body>
</html>
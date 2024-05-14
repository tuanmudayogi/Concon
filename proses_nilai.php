<!DOCTYPE html>
<html>
<head>
    <title>Hasil Nilai</title>
</head>
<body>
    <h1>Hasil Nilai</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $nilai_absen = $_POST["nilai_absen"];
        $nilai_tugas = $_POST["nilai_tugas"];
        $nilai_uts = $_POST["nilai_uts"];
        $nilai_uas = $_POST["nilai_uas"];

        $jumlah = ($nilai_absen * 0.10) + ($nilai_tugas * 0.20) + ($nilai_uts * 0.30) + ($nilai_uas * 0.40);

        if ($jumlah >= 85) {
            $grade = "A";
        } elseif ($jumlah >= 71) {
            $grade = "B";
        } elseif ($jumlah >= 65) {
            $grade = "C";
        } elseif ($jumlah >= 50) {
            $grade = "D";
        } else {
            $grade = "E";
        }

        // Fungsi Hlookup untuk Keterangan
        $keterangan = "";
        switch ($grade) {
            case "A":
                $keterangan = "Sangat Memuaskan";
                break;
            case "B":
                $keterangan = "Memuaskan";
                break;
            case "C":
                $keterangan = "Cukup";
                break;
            case "D":
                $keterangan = "Kurang";
                break;
            case "E":
                $keterangan = "Tidak Lulus";
                break;
        }

        // Output hasil
        echo "<p>NIM: $nim</p>";
        echo "<p>Nama: $nama</p>";
        echo "<p>Jumlah: $jumlah</p>";
        echo "<p>Grade: $grade</p>";
        echo "<p>Keterangan: $keterangan</p>";
    }
    ?>
</body>
</html>

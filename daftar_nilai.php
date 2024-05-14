<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_nilai";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

$sql = "SELECT NIM, Nama, Jumlah, Grade, Keterangan FROM nilai";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>NIM</th>
    <th>Nama</th>
    <th>Jumlah</th>
    <th>Grade</th>
    <th>Keterangan</th>
    </tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['NIM'] . "</td>";
        echo "<td>" . $row['Nama'] . "</td>";
        echo "<td>" . $row['Jumlah'] . "</td>";
        echo "<td>" . $row['Grade'] . "</td>";
        echo "<td>" . $row['Keterangan'] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "Tidak ada data yang ditemukan.";
}

$conn->close();
?>

<?php
$nama   = $_GET['nama'];
$alamat = $_GET['alamat'];
$hp     = $_GET['hp'];
$umur   = $_GET['umur'];
$status = $_GET['status'];
$hobi   = implode(", ", $_GET['hobi']);
echo "<h2>Data Mahasiswa (GET)</h2>";
echo "Nama: $nama <br>";
echo "Alamat: $alamat <br>";
echo "No HP: $hp <br>";
echo "Umur: $umur <br>";
echo "Status: $status <br>";
echo "Hobi: $hobi <br>";
?>
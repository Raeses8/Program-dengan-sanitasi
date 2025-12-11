<?php
$koneksi = mysqli_connect("localhost", "root", "", "universitas");
$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];
$hp     = $_POST['hp'];
$umur   = $_POST['umur'];
$status = $_POST['status'];
$hobi   = implode(", ", $_POST['hobi']);
$query = "INSERT INTO mahasiswa (nama, alamat, hp, umur, status_kawin, hobi)
VALUES ('$nama', '$alamat', '$hp', '$umur', '$status', '$hobi')";
if(mysqli_query($koneksi, $query)){
    echo "Data berhasil disimpan! <br>";
    echo "<a href='tampil.php'>Lihat Data</a>";
} else {
    echo "Gagal menyimpan data.";
}

// fungsi sanitasi 
function bersihkan ($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

$nim        = bersihkan($_POST['nim']);
$nama        = bersihkan($_POST['nama']);
$umur       = bersihkan($_POST['umur']);
$tempat_lahir       = bersihkan($_POST['tempat_lahir']);
$tanggal_lahir        = bersihkan($_POST['tanggal_lahir']);
$hp        = bersihkan($_POST['hp']);
$alamat        = bersihkan($_POST['alamat']);
$email        = bersihkan($_POST['email']);

//sanitasi kota
$kota = bersihkan($_POST['kota']);

// sanitasi jenis kelamin
$jk = isset($_POST['jk']) ? bersihkan($_POST['jk']) : "-";

//sanitasi status kawin
$status = isset($_POST['status']) ? bersihkan($_POST['status']) : "-";

//sanitasi checkbox hobi
$hobi_list =[];

if (!empty($_POST['hobi'])) {
    foreach ($_POST['hobi']as $h);
}

$hobi_output = implode (",", $hobi_list);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Data POST</title>
</head>
<body>
    <h2>Hasil Input Data MAhasiswa (Metode POST)</h2>

    <p><b>NIM:</b> <?=$nim ?></p>
    <p><b>Nama:</b> <?=$nama ?></p>
    <p><b>Umur:</b> <?=$umur ?></p>
    <p><b>Tempat Lahir:</b> <?=$tempat_lahir ?></p>
    <p><b>Tanggal Lahir:</b> <?=$tanggal_lahir ?></p>
    <p><b>No HP:</b> <?=$hp ?></p>
    <p><b>Alamat:</b> <?=$alamat ?></p>

    <p><b>Kota:</b>
    <?php
        if ($kota =="Semarang") echo "Semarang";
        elseif ($kota =="Solo") echo "Solo";
        elseif ($kota =="Brebes") echo "Brebes";
        elseif ($kota =="Kudus") echo "Kudus";
        elseif ($kota =="Demak") echo "Demak";
        else echo "Salatiga";
        ?>
        </p>

        <p><b>Jenis Kelamin:</b> <?= $jk ?></p>
        <p><b>Status:</b> <?= $status ?></p>

        <p><b>Hobi:</b> <?= $hobi ?></p>

        <p><b>Email:</b> <?= $email ?></p>
</body>
</html>
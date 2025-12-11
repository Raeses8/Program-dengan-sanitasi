<!DOCTYPE html>
<html>
<head><title>Form GET</title></head>
<body>
<h2>Input Data Mahasiswa - Metode GET</h2>
<form action="proses_get.php" method="GET">
Nama: <input type="text" name="nama"><br><br>
Alamat: <input type="text" name="alamat"><br><br>
No HP: <input type="text" name="hp"><br><br>
Umur: <input type="number" name="umur"><br><br>
    Email : <input type="email" name="email"><br><br>
Status:<br>
<input type="radio" name="status" value="Kawin"> Kawin <br>
<input type="radio" name="status" value="Belum Kawin"> Belum Kawin <br><br>
Kota : 
<select name="kota">
    <option>Semarang</option>
    <option>Solo</option>
    <option>Salatiga</option>
    <option>Kudus</option>
    <option>Salatiga</option>
    </select><br><br>


Jenis Kelamin : 
    <input type="radio" name="jk" value="Laki-Laki">Laki Laki
    <input type="radio" name="jk" value="Perempuan"> Perempuan
    <br><br>

 Hobi:<br>
    <input type="checkbox" name="hobi[]" value="Membaca"> Membaca <br>
    <input type="checkbox" name="hobi[]" value="Olah Raga"> Olah Raga <br>
    <input type="checkbox" name="hobi[]" value="Musik"> Musik <br>
    <input type="checkbox" name="hobi[]" value="Traveling"> Traveling <br><br>

      <input type="submit" value="Kirim">
</form>
</body>
</html>

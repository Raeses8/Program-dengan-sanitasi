<!-- <!DOCTYPE html>
<html>
<head>
<title>Form POST</title>
<link rel="stylesheet" href="style1.css">

<script>

let keepFocus = false;


function keepInputFocus(e) {
    if (keepFocus) {
        keepFocus = false;
        e.target.focus();
        return true;
    }
    return false;
}


function cekNamaInput(e) {
    let input = e.target;
    input.value = input.value.replace(/\d/g, "");
}
function cekNamaBlur(e) {
    if (keepInputFocus(e)) return;

    let input = e.target;
    let val = input.value.trim();

    if (val === "") {
        alert("Nama tidak boleh kosong!");
        keepFocus = true;
        input.focus();
        return false;
    }

    return true;
}


function cekAlamatBlur(e) {
    if (keepInputFocus(e)) return;

    let input = e.target;
    if (input.value.trim() === "") {
        alert("Alamat tidak boleh kosong!");
        keepFocus = true;
        input.focus();
        return false;
    }
    return true;
}


function cekHPInput(e) {
    let input = e.target;
    input.value = input.value.replace(/[a-zA-Z]/g, "");
}
function cekHPBlur(e) {
    if (keepInputFocus(e)) return;

    let input = e.target;
    let val = input.value.trim();

    if (val === "") {
        alert("Nomor HP tidak boleh kosong!");
        keepFocus = true;
        input.focus();
        return false;
    }

    return true;
}


function cekUmurInput(e) {
    let input = e.target;
    input.value = input.value.replace(/[a-zA-Z]/g, "");
}
function cekUmurBlur(e) {
    if (keepInputFocus(e)) return;

    let input = e.target;
    let val = input.value.trim();

    if (val === "") {
        alert("Umur tidak boleh kosong!");
        keepFocus = true;
        input.focus();
        return false;
    }

    return true;
}


function cekEmailBlur(e) {
    if (keepInputFocus(e)) return;

    let input = e.target;
    let email = input.value.trim();
    let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!regex.test(email)) {
        alert("Email tidak valid!");
        keepFocus = true;
        input.focus();
        return false;
    }

    return true;
}

function cekSubmit() {
    // Status
    if (!document.querySelector('input[name="status"]:checked')) {
        alert("Status harus dipilih!");
        return false;
    }

    // Kota
    if (document.forms["fpost"]["kota"].value === "") {
        alert("Kota harus dipilih!");
        return false;
    }

    // Jenis kelamin
    if (!document.querySelector('input[name="jk"]:checked')) {
        alert("Jenis kelamin harus dipilih!");
        return false;
    }

    // Hobi
    if (!document.querySelector('input[name="hobi[]"]:checked')) {
        alert("Minimal pilih 1 hobi!");
        return false;
    }

    return true;
}

</script>

</head>
<body>

<h2>Input Data Mahasiswa </h2>

<form name="fpost" action="proses_post_sanitasi.php" method="POST" onsubmit="return cekSubmit()">

Nama:
<input type="text" name="nama" 
       oninput="cekNamaInput(event)" 
       onblur="cekNamaBlur(event)">
<br><br>

Alamat:
<input type="text" name="alamat" 
       onblur="cekAlamatBlur(event)">
<br><br>

No HP:
<input type="text" name="hp" 
       oninput="cekHPInput(event)" 
       onblur="cekHPBlur(event)">
<br><br>

Umur:
<input type="text" name="umur" 
       oninput="cekUmurInput(event)" 
       onblur="cekUmurBlur(event)">
<br><br>

Email:
<input type="email" name="email" 
       onblur="cekEmailBlur(event)">
<br><br>

Status:<br>
<input type="radio" name="status" value="Kawin"> Kawin <br>
<input type="radio" name="status" value="Belum Kawin"> Belum Kawin <br><br>

Kota:
<select name="kota">
    <option value="">--Pilih Kota--</option>
    <option>Semarang</option>
    <option>Solo</option>
    <option>Salatiga</option>
    <option>Kudus</option>
</select><br><br>

Jenis Kelamin:
<input type="radio" name="jk" value="Laki-Laki"> Laki-Laki
<input type="radio" name="jk" value="Perempuan"> Perempuan
<br><br>

Hobi:<br>
<input type="checkbox" name="hobi[]" value="Membaca"> Membaca <br>
<input type="checkbox" name="hobi[]" value="Olah Raga"> Olah Raga <br>
<input type="checkbox" name="hobi[]" value="Musik"> Musik <br>
<input type="checkbox" name="hobi[]" value="Traveling"> Traveling <br><br>

<input type="submit" value="Simpan">

</form>

</body>
</html>
 -->
<!DOCTYPE html>
<html>
<head>
<title>Form POST</title>
<link rel="stylesheet" href="style1.css">

<script>

let keepFocus = false;

function keepInputFocus(e) {
    if (keepFocus) {
        keepFocus = false;
        e.target.focus();
        return true;
    }
    return false;
}
function cekNimBlur(e) {
    if (keepInputFocus(e)) return;

    let input = e.target;
    if (input.value.trim() === "") {
        alert("Nim tidak boleh kosong!");
        keepFocus = true;
        input.focus();
        return false;
    }
    return true;
}

function cekNamaInput(e) {
    let input = e.target;
    input.value = input.value.replace(/\d/g, "");
}


function cekNamaBlur(e) {
    if (keepInputFocus(e)) return;

    let input = e.target;
    let val = input.value.trim();

    if (val === "") {
        alert("Nama tidak boleh kosong!");
        keepFocus = true;
        input.focus();
        return false;
    }

    return true;
}

function cekTempatLahirBlur(e) {
    if (keepInputFocus(e)) return;

    let input = e.target;
    if (input.value.trim() === "") {
        alert("Tempat Lahir tidak boleh kosong!");
        keepFocus = true;
        input.focus();
        return false;
    }
    return true;
}

function cekTanggalLahirBlur(e) {
    if (keepInputFocus(e)) return;

    let input = e.target;
    if (input.value.trim() === "") {
        alert("Tanggal Lahir tidak boleh kosong!");
        keepFocus = true;
        input.focus();
        return false;
    }
    return true;
}


function cekAlamatBlur(e) {
    if (keepInputFocus(e)) return;

    let input = e.target;
    if (input.value.trim() === "") {
        alert("Alamat tidak boleh kosong!");
        keepFocus = true;
        input.focus();
        return false;
    }
    return true;
}

function cekHPInput(e) {
    let input = e.target;
    input.value = input.value.replace(/[a-zA-Z]/g, "");
}

function cekHPBlur(e) {
    if (keepInputFocus(e)) return;

    let input = e.target;
    let val = input.value.trim();

    if (val === "") {
        alert("Nomor HP tidak boleh kosong!");
        keepFocus = true;
        input.focus();
        return false;
    }

    return true;
}

function cekUmurInput(e) {
    let input = e.target;
    input.value = input.value.replace(/[a-zA-Z]/g, "");
}

function cekUmurBlur(e) {
    if (keepInputFocus(e)) return;

    let input = e.target;
    let val = input.value.trim();

    if (val === "") {
        alert("Umur tidak boleh kosong!");
        keepFocus = true;
        input.focus();
        return false;
    }

    

    return true;
}

function cekEmailBlur(e) {
    if (keepInputFocus(e)) return;

    let input = e.target;
    let email = input.value.trim();
    let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!regex.test(email)) {
        alert("Email tidak valid!");
        keepFocus = true;
        input.focus();
        return false;
    }


    return true;
}

function cekSubmit() {

    if (!document.querySelector('input[name="status"]:checked')) {
        alert("Status harus dipilih!");
        return false;
    }

    if (document.forms["fpost"]["kota"].value === "") {
        alert("Kota harus dipilih!");
        return false;
    }

    if (!document.querySelector('input[name="jk"]:checked')) {
        alert("Jenis kelamin harus dipilih!");
        return false;
    }

    if (!document.querySelector('input[name="hobi[]"]:checked')) {
        alert("Minimal pilih 1 hobi!");
        return false;
    }

    return true;
}

</script>

</head>
<body>

<h2>Input Data Mahasiswa </h2>

<form name="fpost" action="proses_post_sanitasi.php" method="POST" onsubmit="return cekSubmit()">

NIM:
<input type="text" name="nim"
       oninput="cekNimInput(event)"
       onblur="cekNimBlur(event)">
<br><br>

Nama:
<input type="text" name="nama" 
       oninput="cekNamaInput(event)" 
       onblur="cekNamaBlur(event)">
<br><br>

Tempat Lahir:
<input type="text" name="tempat_lahir"
 onblur="cekTempatLahirBlur(event)">
<br><br>

Tanggal Lahir:
<input type="date" name="tanggal_lahir"
onblur="cekTanggalLahirBlur(event)">
<br><br>

Alamat:
<input type="text" name="alamat" 
       onblur="cekAlamatBlur(event)">
<br><br>

No HP:
<input type="text" name="hp" 
       oninput="cekHPInput(event)" 
       onblur="cekHPBlur(event)">
<br><br>

Umur:
<input type="text" name="umur" 
       oninput="cekUmurInput(event)" 
       onblur="cekUmurBlur(event)">
<br><br>

Email:
<input type="email" name="email" 
       onblur="cekEmailBlur(event)">
<br><br>

Status:<br>
<input type="radio" name="status" value="Kawin"> Kawin <br>
<input type="radio" name="status" value="Belum Kawin"> Belum Kawin <br><br>

Kota:
<select name="kota">
    <option value="">--Pilih Kota--</option>
    <option>Semarang</option>
    <option>Solo</option>
    <option>Salatiga</option>
    <option>Kudus</option>
</select><br><br>

Jenis Kelamin:
<input type="radio" name="jk" value="Laki-Laki"> Laki-Laki
<input type="radio" name="jk" value="Perempuan"> Perempuan
<br><br>

Hobi:<br>
<input type="checkbox" name="hobi[]" value="Membaca"> Membaca <br>
<input type="checkbox" name="hobi[]" value="Olah Raga"> Olah Raga <br>
<input type="checkbox" name="hobi[]" value="Musik"> Musik <br>
<input type="checkbox" name="hobi[]" value="Traveling"> Traveling <br><br>

<input type="submit" value="Simpan">

</form>

</body>
</html>

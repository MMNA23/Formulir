<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Nilai Tugas</title>
    <link rel="stylesheet" href="style_formulir.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
  <title>Form Nilai</title>
</head>
<body>
<form method="POST" class="right">
    <div>
        <label>Nama</label> <br>
        <input name="nama" type="text" placeholder="Masukkan nama">
    </div>
    <div>
        <label>NIM</label> <br>
        <input name="NIM" type="text" placeholder="Masukkan NIM">
    </div>
    <br><br>
    <div>
        <label>Nilai</label> <br>
        <input name="Nilai" type="text" placeholder="Nilai">
    </div>
    <br>
    <div>
        <label>Absen</label> <br>
        <input name="Absen" type="text" placeholder="Absen">
    </div>
    <br>
    <div>
        <button class="btn">Submit</button>
    </div>
</form>

<?php
    $nama = @$_POST['nama'];
    $NIM = @$_POST['NIM'];
    $Absen = @$_POST['Absen'];
    $Nilai = @$_POST['Nilai'];
    if ($Nilai >= 75 && $Absen >=80)
    {
        $status = "LULUS";
    }
    else{
        $status = "TIDAK LULUS";
    }
    echo "<br><br>";
    echo <<<hasil
    <p>
    Hai, nama saya adalah $nama, <br>
    Dengan NIM $NIM <br>
    Saya memiliki nilai $Nilai<br>
    saya memiliki nilai absen $Absen
    <br><br>
    Dengan ini dinyatakan $status
    <p>
    hasil;
?>
</body>
</html>

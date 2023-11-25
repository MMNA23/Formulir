<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Penjumlahan</title>
    <link rel="stylesheet" href="style_formulir.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
<form method="POST" class="right">
        <h1>Penjumlahan</h1>
        <div>
            <label>Angka Pertama</label> 
            <br>
            <input name="angka1" type="text" placeholder="Jawab">
        </div>
        <br>
        <div>
            <label>Angka Kedua</label> 
            <br>
            <input name="angka2" type="text" placeholder="Jawab">
        </div>
        <br>
        <div>
            <input type="radio" id="tambah" name="penjumlahan" value="tambah" required>
            <label for="tambah">+</label><br>
        </div>
        <br>
        <div>
            <button class="btn">Submit</button>
        </div>
    </form>
    

    <?php
        $angka1 = @$_POST['angka1'];
        $angka2 = @$_POST['angka2'];
        $penjumlahan = @$_POST['penjumlahan'];
        if ($penjumlahan == "tambah"){
            $hasil = $angka1 + $angka2;
            echo <<<jawaban
            <p class="right">
            Hasilnya adalah: $hasil <br>
            <p>
            jawaban;
        }
    ?>    
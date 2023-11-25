<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Aritmatika</title>
    <link rel="stylesheet" href="style_formulir.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
<form method="POST" class="right">
        <h1>Aritmatika</h1>
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
        <div>
            <label>Pilih Operasi Aritmatika</label><br>
            <input type="radio" id="kali" name="aritmatika" value="kali" required>
            <label for="kali">x</label><br>
            <input type="radio" id="bagi" name="aritmatika" value="bagi" required>
            <label for="bagi">:</label><br>
            <input type="radio" id="tambah" name="aritmatika" value="tambah" required>
            <label for="tambah">+</label><br>
            <input type="radio" id="kurang" name="aritmatika" value="kurang" required>
            <label for="kurang">-</label>
        </div>
        <br>
        <div>
            <button class="btn">Submit</button>
        </div>
    </form>
    

    <?php
        $angka1 = @$_POST['angka1'];
        $angka2 = @$_POST['angka2'];
        $aritmatika = @$_POST['aritmatika'];
        if($aritmatika == "kali"){
            $hasil = $angka1 * $angka2;
            echo <<<jawaban
            <p class= "right">
            Hasilnya adalah: $hasil <br>
            kamu memilih operasi perkalian.
            <p>
            jawaban;
        }
        elseif($aritmatika == "bagi"){
            $hasil = $angka1 / $angka2;
            echo <<<jawaban
            <p class="right">
            Hasilnya adalah: $hasil <br>
            kamu memilih operasi pembagian.
            <p>
            jawaban;
        }
        elseif($aritmatika == "tambah"){
            $hasil = $angka1 + $angka2;
            echo <<<jawaban
            <p class="right">
            Hasilnya adalah: $hasil <br>
            kamu memilih operasi penjumlahan.
            <p>
            jawaban;
        }
        elseif($aritmatika == "kurang"){
            $hasil = $angka1 - $angka2;
            echo <<<jawaban
            <p class="right">
            Hasilnya adalah: $hasil <br>
            kamu memilih operasi pengurangan.
            <p>
            jawaban;
        }
    ?>
    
</body>
</html>
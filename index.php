<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    //belajar 1
    # belajar 2
    /*
        saya belajara
        web pemrograman
        dasar 1
    */
    // $a = 10;
    // $nama = "Mufid";
    // var_dump($a);
    // echo "<br>Selamat Belajar Pemrograman Web Ananda <b>" .$nama. " </b> Di Kelas TI A";

    /*
    1. Buatlah form input nama lengkap kalian!
    2. Buatalah form input bilangan pertama!
    3. Buatlah form input bilangan kedua!
    4. Buatlah file hasil.php, dimana didalamnya bisa menampilkan :
        a. Kebalikan nama kalian
        b. Jumlah karakter nama yang dimasukkan 
        c. Merubah karakter dari nama menjadi huruf besar semua
        d. Menampilkan akar dari bilangan pertama
        e. Menampilkan pangkat dari bilangan kedua

    */
    ?>

    <form action="hasil.php" method="post">
        <input type="text" name="nama" placeholder="nama"><br>
        <input type="number" name="bil1" placeholder="bilangan 1"><br>
        <input type="number" name="bil2" placeholder="bilangan 2"><br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>
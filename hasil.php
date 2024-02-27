<html>
<body>
<?php 
$nama = $_POST["nama"]; 
?>

Kebalikan Nama Lengkap : <?php echo strrev($nama); ?><br>
Bilangan 1 : <?php echo $_POST["bil1"]; ?><br>
Bilangan 2 : <?php echo $_POST["bil2"]; ?><br>

</body>
</html> 
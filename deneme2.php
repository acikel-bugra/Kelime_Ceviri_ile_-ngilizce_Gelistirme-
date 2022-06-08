
<?php 
include'ayar.php'; 
$adi=$_POST['ad'];
$soyadi=$_POST['soyad'];

$kayit=$baglan->query("INSERT INTO deneme (ad,soyad) VALUES ('$adi','$soyadi')");


?>

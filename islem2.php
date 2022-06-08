<?php 

include 'ayar.php';
ob_start();
session_start();

if(isset($_POST['giris']))
{
	$username=$_POST['login-email'];
	$sifre=$_POST['login-password'];


	$kullanici= $baglan->prepare('SELECT * FROM uyeler where kullanici_adi= ? && sifre= ?');
	$kullanici->execute([
		$username,$sifre

	]);
	echo $say=$kullanici->rowCount();
	$kk=$kullanici->fetch(PDO::FETCH_ASSOC);
	if($say==1){
		$_SESSION['login']=$username;
		$_SESSION['loginid']=$kk['id'];
		$_SESSION['girildi']="true";
		header('Location: index.php');

	}
	else{
		echo "hata";
	}
}
 ?>
<?php 
include 'ayar.php';

if($_GET['islem']=="notsil")
{
	 $sil = $baglan->exec("DELETE  FROM notlar WHERE id=".$_GET['id']);
	 header('Location:notlar.php');
	 
}
if($_GET['islem']=="gorevsil")
{
	 $sil = $baglan->exec("DELETE  FROM gorevler WHERE id=".$_GET['id']);
	 header('Location:gorevler.php');
	 
}

 ?>
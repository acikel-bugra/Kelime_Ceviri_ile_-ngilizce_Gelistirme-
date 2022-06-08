<?php 
ob_start();
session_start();
include 'ayar.php';


$durum=$_POST['islem'];
if($durum=="gorevadd" && !isset($_POST['check1']))
{
	
	$g_baslik=$_POST['todoTitleAdd'];
	$g_atama=$_POST['task-assigned'];
	$g_baslangic_tarih=$_POST['task-due-date'];
	$g_bitis_tarih=$_POST['task-due-date2'];
	$g_etiket=$_POST['task-tag'];
	$g_icerik=$_POST['todoTitleAdd2'];
	$kullaniciid=$_SESSION['loginid'];
	if ($g_bitis_tarih<$g_baslangic_tarih) {
		$hata=5;
	}

	if(isset($hata)){
		echo "3";
	}else{
		$kayit=$baglan->query("INSERT INTO gorevler (g_baslik,g_atama,g_baslangic_tarih,g_bitis_tarih,g_etiket,g_icerik,kullanici) VALUES ('$g_baslik','$g_atama','$g_baslangic_tarih','$g_bitis_tarih','$g_etiket','$g_icerik','$kullaniciid')");
		echo "2";

	}
}

if($durum=="gorevadd" && isset($_POST['check1']))
{
	
	$g_baslik=$_POST['todoTitleAdd'];
	$g_atama=$_POST['task-assigned'];
	$g_baslangic_tarih=$_POST['task-due-date'];
	$g_bitis_tarih=$_POST['task-due-date2'];
	$g_etiket=$_POST['task-tag'];
	$g_icerik=$_POST['todoTitleAdd2'];
	$check=$_POST['check1'];
	$kullaniciid=$_SESSION['loginid'];


	$kayit=$baglan->query("INSERT INTO gorevler (g_baslik,g_atama,g_baslangic_tarih,g_bitis_tarih,g_etiket,g_icerik,onemlimi,kullanici) VALUES ('$g_baslik','$g_atama','$g_baslangic_tarih','$g_bitis_tarih','$g_etiket','$g_icerik','$check','$kullaniciid')");
	echo "2";
}

if($durum=="notedit")
{
	

	$id=$_POST['id'];
	$baslik=$_POST['baslik'];
	$icerik=$_POST['nott'];

//
	$update = $baglan -> prepare("UPDATE notlar SET baslik = ? , icerik= ? WHERE id = ?");
	$update->execute([$baslik,$icerik,$id]);

	echo 2;
	//

	//
	/*$insert = $dbh -> prepare("INSERT into products SET foto = ? ");
	$insert->execute([$foto_name,$produc]);*/

	/*$satir = [
		"product_id"=>$produc->id,
		"variant_id"=>$vark->id,
		"option_name"=>$_POST['varyant_name'.$i][$ii],
		"option_stok"=>$_POST['varyant_stok'.$i][$ii],
		"option_price"=>$_POST['varyant_fiyat'.$i][$ii],
		"option_price"=>$_POST['varyant_fiyat'.$i][$ii],
		"img"=>$fotovrn,

	];

	$sql = "INSERT INTO product_variants SET   product_id=:product_id, variant_id=:variant_id, option_name=:option_name, option_stok=:option_stok, option_price=:option_price, img=:img";
	$insert = ($dbh->prepare($sql))->execute($satir);*/

	//
/*$vark  = $dbh->prepare("SELECT * FROM variants where varkey=? ");
			$vark-> execute(array($vs));
			$vark  = $vark->fetch(PDO::FETCH_OBJ);*/

///


		}

		if($durum=="gorevtamam"){
			print_r($_POST);
			$kont  = $baglan->prepare("SELECT * FROM gorevler where id=? ");
			$kont-> execute(array($_POST['id']));
			$kont  = $kont->fetch(PDO::FETCH_OBJ);
			if($kont->durum==1){
				$durum=0;
			}else{
				$durum=1;

			}
			echo $_POST['id'];
			$kayit=$baglan->query("UPDATE  gorevler set durum=".$durum." where id=".$_POST['id']);
			exit();
		}
		if($durum=="guncelle"){

			$g_baslik=$_POST['todoTitleAdd'];

			$g_baslangic_tarih=$_POST['task-due-date'];
			$g_bitis_tarih=$_POST['task-due-date2'];

			$g_icerik=$_POST['todoTitleAdd2'];

			$kayit=$baglan->query("UPDATE  gorevler set g_baslik='$g_baslik' where id=".$_POST['id']);
			echo "2";
		}
		if($durum=="notadd")
		{

			$notbaslik=$_POST['baslik'];
			$noticerik=$_POST['nott'];
			$kullanici_id=$_SESSION['loginid'];
			$kayit2=$baglan->query("INSERT INTO notlar (baslik,icerik,kullanici) VALUES ('$notbaslik','$noticerik','$kullanici_id')");
			echo "2";
		}
		if($durum=="setting")
		{

			$ad=$_POST['username'];
			$soyad=$_POST['name'];
			$mail=$_POST['email'];

			$kayit=$baglan->query("UPDATE  uyeler set ad='$ad',soyad='$soyad',kullanici_adi='$mail' where id=".$_POST['id']);
			header("Location:page-account-settings.php");
		}
		if($durum=="sifredegis")
		{

			$sifre1=$_POST['new-password'];
			$sifre2=$_POST['confirm-new-password'];
			if ($sifre1!=$sifre2) {
				$hata=5;
			}

			if(isset($hata)){
				echo "4";
			}
			
			else{
				$kayit=$baglan->query("UPDATE  uyeler set sifre='$sifre1' where id=".$_POST['id']);
				echo "2";
			}
			
		}

		if($durum=="yenikullanici")
		{
			$ad=$_POST['adi'];
			$soyad=$_POST['soyad'];
			$mail=$_POST['email'];
			$sifre=$_POST['sifre'];
			$durum="1";

			$kayit2=$baglan->query("INSERT INTO uyeler (ad,soyad,kullanici_adi,sifre,durum) VALUES ('$ad','$soyad','$mail','$sifre','$durum')");
			echo "2";
		}
			if($durum=="duyuruadd")
		{
			$baslik=$_POST['baslik'];
			$icerik=$_POST['icerik'];
		

			$kayit2=$baglan->query("INSERT INTO duyurular (baslik,icerik) VALUES ('$baslik','$icerik')");
			echo "2";
		}



		?>
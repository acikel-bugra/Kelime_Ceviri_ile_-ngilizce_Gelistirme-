<?php 
include 'ayar.php';

ob_start();
session_start();
$kullanici_id=$_SESSION['loginid'];
$durum1="0";
$durum2="1";
$durum3="1";
if(!isset($_POST['tur'])){
	$_POST['tur']="gorevlerim";
}



if($_POST['tur']=="gorevlerim" ){
	/*$dizi=$baglan->query("select * from gorevler where durum=0 order by id desc",PDO::FETCH_ASSOC);*/


	$dizi = $baglan -> prepare("SELECT * FROM gorevler where durum = ? AND (kullanici= ? || g_atama=? )");
	$dizi->execute([$durum1,$kullanici_id,$kullanici_id]);
	foreach ($dizi as $item) {?>

		<li class="todo-item">
			<div class="todo-title-wrapper">
				<div class="todo-title-area">
					<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical drag-icon"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
					<div class="title-wrapper">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" onclick="gorevtamam(<?=$item["id"]?>,'gorevlerim')" id="customCheck1<?=$item["id"]?>a">
							<label class="custom-control-label" for="customCheck1<?=$item["id"]?>a"></label>
						</div>
						<span class="todo-title"><?=$item["g_baslik"]?></span>
					</div>
				</div>
				<div class="todo-item-action">
					<div class="badge-wrapper mr-1">
						<button type="button" class="btn btn-outline-secondary waves-effect" data-toggle="modal" data-target="#secondary<?=$item["id"]?>">
							Düzenle
						</button>

						
					</div>
					<div class="badge badge-pill badge-light-primary">Bitiş Tarihi </div>
					<div class="badge badge-pill badge-light-success"><?=$item["g_bitis_tarih"]?></div>

					
					
				</div>
			</div>
		</li>

		<!-- Button trigger modal -->

		<!-- Modal -->
		<div class="modal fade modal-secondary text-left" id="secondary<?=$item["id"]?>" tabindex="-1" aria-labelledby="myModalLabel1660" style="display: none;" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myModalLabel1660">Görev Düzenle</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<form action="islem.php" method="POST" data-xhr="true">
						<input type="hidden" name="islem" value="guncelle">
						<div class="modal-body">

							<div class="form-group">
								<input type="hidden" name="id" value="<?=$item["id"]?>">
								<label for="todoTitleAdd" class="form-label">Başlık</label>
								<input type="text" id="gorevbaslik" name="todoTitleAdd" class="new-todo-item-title form-control" placeholder="Görev Başlığı" value="<?=$item["g_baslik"]?>" />
							</div>
							<div class="form-group">
								<label for="task-due-date" class="form-label">Başlangıç Tarihi</label>
								<input type="text" class="form-control task-due-date" id="gorevbaslangic" name="task-due-date" value="<?=$item["g_baslangic_tarih"]?>" />
							</div>
							<div class="form-group">
								<label for="task-due-date" class="form-label">Bitiş Tarihi</label>
								<input type="text" class="form-control task-due-date" id="gorevbitis" name="task-due-date2" value="<?=$item["g_bitis_tarih"]?>" />
							</div>
							<div class="form-group">
								<label for="todoTitleAdd" class="form-label">İçerik</label>
								<input type="text" id="gorevicerik" name="todoTitleAdd2" class="new-todo-item-title form-control" placeholder="Görev İçerik" value="<?=$item["g_icerik"]?>" />
							</div>
							<input type="hidden" id="gorevicerik" name="todoTitleAdd2" class="new-todo-item-title form-control" placeholder="Görev İçerik" value="<?=$item["id"]?>" />

						</div>
						<div class="modal-footer">
							<button  type="button" class="btn btn-secondary waves-effect waves-float waves-light"  data-dismiss="modal">Kapat</button>
							<button  type="submit" class="btn btn-secondary waves-effect waves-float waves-light"  >Düzenle</button>
							<a  href="sil.php?islem=gorevsil&id=<?=$item['id']?>" class="btn btn-secondary waves-effect waves-float waves-light"  >Sil</a>

						</div>
					</form>
				</div>
			</div>
		</div>

	<?php }
}




if($_POST['tur']=="tamam" ){
	$dizi = $baglan -> prepare("SELECT * FROM gorevler where durum = ? AND (kullanici= ? || g_atama=? ) ");
	$dizi->execute([$durum2,$kullanici_id,$kullanici_id]);
	foreach ($dizi as $item) {?>

		<li class="todo-item">
			<div class="todo-title-wrapper">
				<div class="todo-title-area">
					<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical drag-icon"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
					<div class="title-wrapper">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" checked="" onclick="gorevtamam(<?=$item["id"]?>,'gorevlerim')" id="customCheck1<?=$item["id"]?>a">
							<label class="custom-control-label" for="customCheck1<?=$item["id"]?>a"></label>
						</div>
						<span class="todo-title"><?=$item["g_baslik"]?></span>
					</div>
				</div>
				<div class="todo-item-action">
					
					<div class="badge badge-pill badge-light-success">Tamamlandı</div>
				</div>
			</div>
		</li>

		<!-- Button trigger modal -->

		<!-- Modal -->
		<div class="modal fade modal-secondary text-left" id="secondary<?=$item["id"]?>" tabindex="-1" aria-labelledby="myModalLabel1660" style="display: none;" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myModalLabel1660">Secondary Modal<?=$item["id"]?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						Tart lemon drops macaroon oat cake chocolate toffee chocolate bar icing. Pudding jelly beans
						carrot cake pastry gummies cheesecake lollipop. I love cookie lollipop cake I love sweet gummi
						bears cupcake dessert.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary waves-effect waves-float waves-light" data-dismiss="modal">Accept</button>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
<?php } ?>

<?php 

if($_POST['tur']=="onemli" ){

	$durum1="1";
	$dizi = $baglan -> prepare("SELECT * FROM gorevler where onemlimi = ? AND kullanici= ? ");
	$dizi->execute([$durum1,$kullanici_id]);
	foreach ($dizi as $item) {?>
		<li class="todo-item">
			<div class="todo-title-wrapper">
				<div class="todo-title-area">
					<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical drag-icon"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
					<div class="title-wrapper">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" checked="" onclick="gorevtamam(<?=$item["id"]?>,'gorevlerim')" id="customCheck1<?=$item["id"]?>a">
							<label class="custom-control-label" for="customCheck1<?=$item["id"]?>a"></label>
						</div>
						<span class="todo-title"><?=$item["g_baslik"]?></span>
					</div>
				</div>
				<div class="todo-item-action">
					
					
					<div class="badge badge-pill badge-light-danger">Önemli</div>
					<div class="badge badge-pill badge-light-primary">Bitiş Tarihi </div>
					<div class="badge badge-pill badge-light-success"><?=$item["g_bitis_tarih"]?></div>
				</div>
			</div>
		</li>
	<?php } ?>
<?php } ?>

<?php 
if($_POST['tur']=="Etiket1" ){
	$team="Etiket1";
	$dizi = $baglan -> prepare("SELECT * FROM gorevler where durum = ? AND (kullanici= ? || g_atama=? ) AND g_etiket=? ");
	$dizi->execute([$durum1,$kullanici_id,$kullanici_id,$team]);
	foreach ($dizi as $item) {?>

		
		<li class="todo-item">
			<div class="todo-title-wrapper">
				<div class="todo-title-area">
					<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical drag-icon"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
					<div class="title-wrapper">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" onclick="gorevtamam(<?=$item["id"]?>,'gorevlerim')" id="customCheck1<?=$item["id"]?>a">
							<label class="custom-control-label" for="customCheck1<?=$item["id"]?>a"></label>
						</div>
						<span class="todo-title"><?=$item["g_baslik"]?></span>
					</div>
				</div>
				<div class="todo-item-action">
					<div class="badge-wrapper mr-1">
						<button type="button" class="btn btn-outline-secondary waves-effect" data-toggle="modal" data-target="#secondary<?=$item["id"]?>">
							Düzenle
						</button>

						
					</div>
					<div class="badge badge-pill badge-light-primary">Bitiş Tarihi </div>
					<div class="badge badge-pill badge-light-success"><?=$item["g_bitis_tarih"]?></div>
					
					
				</div>
			</div>
		</li>

			<div class="modal fade modal-secondary text-left" id="secondary<?=$item["id"]?>" tabindex="-1" aria-labelledby="myModalLabel1660" style="display: none;" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myModalLabel1660">Görev Düzenle</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<form action="islem.php" method="POST" data-xhr="true">
						<input type="hidden" name="islem" value="guncelle">
						<div class="modal-body">

							<div class="form-group">
								<input type="hidden" name="id" value="<?=$item["id"]?>">
								<label for="todoTitleAdd" class="form-label">Başlık</label>
								<input type="text" id="gorevbaslik" name="todoTitleAdd" class="new-todo-item-title form-control" placeholder="Görev Başlığı" value="<?=$item["g_baslik"]?>" />
							</div>
							<div class="form-group">
								<label for="task-due-date" class="form-label">Başlangıç Tarihi</label>
								<input type="text" class="form-control task-due-date" id="gorevbaslangic" name="task-due-date" value="<?=$item["g_baslangic_tarih"]?>" />
							</div>
							<div class="form-group">
								<label for="task-due-date" class="form-label">Bitiş Tarihi</label>
								<input type="text" class="form-control task-due-date" id="gorevbitis" name="task-due-date2" value="<?=$item["g_bitis_tarih"]?>" />
							</div>
							<div class="form-group">
								<label for="todoTitleAdd" class="form-label">İçerik</label>
								<input type="text" id="gorevicerik" name="todoTitleAdd2" class="new-todo-item-title form-control" placeholder="Görev İçerik" value="<?=$item["g_icerik"]?>" />
							</div>
							<input type="hidden" id="gorevicerik" name="todoTitleAdd2" class="new-todo-item-title form-control" placeholder="Görev İçerik" value="<?=$item["id"]?>" />

						</div>
						<div class="modal-footer">
							<button  type="button" class="btn btn-secondary waves-effect waves-float waves-light"  data-dismiss="modal">Kapat</button>
							<button  type="submit" class="btn btn-secondary waves-effect waves-float waves-light"  >Düzenle</button>
							<a  href="sil.php?islem=gorevsil&id=<?=$item['id']?>" class="btn btn-secondary waves-effect waves-float waves-light"  >Sil</a>

						</div>
					</form>
				</div>
			</div>
		</div>

<?php } ?>
<?php } ?>
<?php 
if($_POST['tur']=="Etiket2" ){
	$team="Etiket2";
	$dizi = $baglan -> prepare("SELECT * FROM gorevler where durum = ? AND (kullanici= ? || g_atama=? ) AND g_etiket=? ");
	$dizi->execute([$durum1,$kullanici_id,$kullanici_id,$team]);
	foreach ($dizi as $item) {?>

		
		<li class="todo-item">
			<div class="todo-title-wrapper">
				<div class="todo-title-area">
					<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical drag-icon"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
					<div class="title-wrapper">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" onclick="gorevtamam(<?=$item["id"]?>,'gorevlerim')" id="customCheck1<?=$item["id"]?>a">
							<label class="custom-control-label" for="customCheck1<?=$item["id"]?>a"></label>
						</div>
						<span class="todo-title"><?=$item["g_baslik"]?></span>
					</div>
				</div>
				<div class="todo-item-action">
					<div class="badge-wrapper mr-1">
						<button type="button" class="btn btn-outline-secondary waves-effect" data-toggle="modal" data-target="#secondary<?=$item["id"]?>">
							Düzenle
						</button>

						
					</div>
					<div class="badge badge-pill badge-light-primary">Bitiş Tarihi </div>
					<div class="badge badge-pill badge-light-success"><?=$item["g_bitis_tarih"]?></div>
					
					
				</div>
			</div>
		</li>

			<div class="modal fade modal-secondary text-left" id="secondary<?=$item["id"]?>" tabindex="-1" aria-labelledby="myModalLabel1660" style="display: none;" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myModalLabel1660">Görev Düzenle</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<form action="islem.php" method="POST" data-xhr="true">
						<input type="hidden" name="islem" value="guncelle">
						<div class="modal-body">

							<div class="form-group">
								<input type="hidden" name="id" value="<?=$item["id"]?>">
								<label for="todoTitleAdd" class="form-label">Başlık</label>
								<input type="text" id="gorevbaslik" name="todoTitleAdd" class="new-todo-item-title form-control" placeholder="Görev Başlığı" value="<?=$item["g_baslik"]?>" />
							</div>
							<div class="form-group">
								<label for="task-due-date" class="form-label">Başlangıç Tarihi</label>
								<input type="text" class="form-control task-due-date" id="gorevbaslangic" name="task-due-date" value="<?=$item["g_baslangic_tarih"]?>" />
							</div>
							<div class="form-group">
								<label for="task-due-date" class="form-label">Bitiş Tarihi</label>
								<input type="text" class="form-control task-due-date" id="gorevbitis" name="task-due-date2" value="<?=$item["g_bitis_tarih"]?>" />
							</div>
							<div class="form-group">
								<label for="todoTitleAdd" class="form-label">İçerik</label>
								<input type="text" id="gorevicerik" name="todoTitleAdd2" class="new-todo-item-title form-control" placeholder="Görev İçerik" value="<?=$item["g_icerik"]?>" />
							</div>
							<input type="hidden" id="gorevicerik" name="todoTitleAdd2" class="new-todo-item-title form-control" placeholder="Görev İçerik" value="<?=$item["id"]?>" />

						</div>
						<div class="modal-footer">
							<button  type="button" class="btn btn-secondary waves-effect waves-float waves-light"  data-dismiss="modal">Kapat</button>
							<button  type="submit" class="btn btn-secondary waves-effect waves-float waves-light"  >Düzenle</button>
							<a  href="sil.php?islem=gorevsil&id=<?=$item['id']?>" class="btn btn-secondary waves-effect waves-float waves-light"  >Sil</a>

						</div>
					</form>
				</div>
			</div>
		</div>

<?php } ?>
<?php } ?>
<?php 
if($_POST['tur']=="Etiket3" ){
	$team="Etiket3";
	$dizi = $baglan -> prepare("SELECT * FROM gorevler where durum = ? AND (kullanici= ? || g_atama=? ) AND g_etiket=? ");
	$dizi->execute([$durum1,$kullanici_id,$kullanici_id,$team]);
	foreach ($dizi as $item) {?>

		
		<li class="todo-item">
			<div class="todo-title-wrapper">
				<div class="todo-title-area">
					<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical drag-icon"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
					<div class="title-wrapper">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" onclick="gorevtamam(<?=$item["id"]?>,'gorevlerim')" id="customCheck1<?=$item["id"]?>a">
							<label class="custom-control-label" for="customCheck1<?=$item["id"]?>a"></label>
						</div>
						<span class="todo-title"><?=$item["g_baslik"]?></span>
					</div>
				</div>
				<div class="todo-item-action">
					<div class="badge-wrapper mr-1">
						<button type="button" class="btn btn-outline-secondary waves-effect" data-toggle="modal" data-target="#secondary<?=$item["id"]?>">
							Düzenle
						</button>

						
					</div>
					<div class="badge badge-pill badge-light-primary">Bitiş Tarihi </div>
					<div class="badge badge-pill badge-light-success"><?=$item["g_bitis_tarih"]?></div>
					
					
				</div>
			</div>
		</li>

			<div class="modal fade modal-secondary text-left" id="secondary<?=$item["id"]?>" tabindex="-1" aria-labelledby="myModalLabel1660" style="display: none;" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myModalLabel1660">Görev Düzenle</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<form action="islem.php" method="POST" data-xhr="true">
						<input type="hidden" name="islem" value="guncelle">
						<div class="modal-body">

							<div class="form-group">
								<input type="hidden" name="id" value="<?=$item["id"]?>">
								<label for="todoTitleAdd" class="form-label">Başlık</label>
								<input type="text" id="gorevbaslik" name="todoTitleAdd" class="new-todo-item-title form-control" placeholder="Görev Başlığı" value="<?=$item["g_baslik"]?>" />
							</div>
							<div class="form-group">
								<label for="task-due-date" class="form-label">Başlangıç Tarihi</label>
								<input type="text" class="form-control task-due-date" id="gorevbaslangic" name="task-due-date" value="<?=$item["g_baslangic_tarih"]?>" />
							</div>
							<div class="form-group">
								<label for="task-due-date" class="form-label">Bitiş Tarihi</label>
								<input type="text" class="form-control task-due-date" id="gorevbitis" name="task-due-date2" value="<?=$item["g_bitis_tarih"]?>" />
							</div>
							<div class="form-group">
								<label for="todoTitleAdd" class="form-label">İçerik</label>
								<input type="text" id="gorevicerik" name="todoTitleAdd2" class="new-todo-item-title form-control" placeholder="Görev İçerik" value="<?=$item["g_icerik"]?>" />
							</div>
							<input type="hidden" id="gorevicerik" name="todoTitleAdd2" class="new-todo-item-title form-control" placeholder="Görev İçerik" value="<?=$item["id"]?>" />

						</div>
						<div class="modal-footer">
							<button  type="button" class="btn btn-secondary waves-effect waves-float waves-light"  data-dismiss="modal">Kapat</button>
							<button  type="submit" class="btn btn-secondary waves-effect waves-float waves-light"  >Düzenle</button>
							<a  href="sil.php?islem=gorevsil&id=<?=$item['id']?>" class="btn btn-secondary waves-effect waves-float waves-light"  >Sil</a>

						</div>
					</form>
				</div>
			</div>
		</div>

<?php } ?>
<?php } ?>
<?php 
if($_POST['tur']=="Etiket4" ){
	$team="Etiket4";
	$dizi = $baglan -> prepare("SELECT * FROM gorevler where durum = ? AND (kullanici= ? || g_atama=? ) AND g_etiket=? ");
	$dizi->execute([$durum1,$kullanici_id,$kullanici_id,$team]);
	foreach ($dizi as $item) {?>

		
		<li class="todo-item">
			<div class="todo-title-wrapper">
				<div class="todo-title-area">
					<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical drag-icon"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
					<div class="title-wrapper">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" onclick="gorevtamam(<?=$item["id"]?>,'gorevlerim')" id="customCheck1<?=$item["id"]?>a">
							<label class="custom-control-label" for="customCheck1<?=$item["id"]?>a"></label>
						</div>
						<span class="todo-title"><?=$item["g_baslik"]?></span>
					</div>
				</div>
				<div class="todo-item-action">
					<div class="badge-wrapper mr-1">
						<button type="button" class="btn btn-outline-secondary waves-effect" data-toggle="modal" data-target="#secondary<?=$item["id"]?>">
							Düzenle
						</button>

						
					</div>
					<div class="badge badge-pill badge-light-primary">Bitiş Tarihi </div>
					<div class="badge badge-pill badge-light-success"><?=$item["g_bitis_tarih"]?></div>
					
					
				</div>
			</div>
		</li>

			<div class="modal fade modal-secondary text-left" id="secondary<?=$item["id"]?>" tabindex="-1" aria-labelledby="myModalLabel1660" style="display: none;" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myModalLabel1660">Görev Düzenle</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<form action="islem.php" method="POST" data-xhr="true">
						<input type="hidden" name="islem" value="guncelle">
						<div class="modal-body">

							<div class="form-group">
								<input type="hidden" name="id" value="<?=$item["id"]?>">
								<label for="todoTitleAdd" class="form-label">Başlık</label>
								<input type="text" id="gorevbaslik" name="todoTitleAdd" class="new-todo-item-title form-control" placeholder="Görev Başlığı" value="<?=$item["g_baslik"]?>" />
							</div>
							<div class="form-group">
								<label for="task-due-date" class="form-label">Başlangıç Tarihi</label>
								<input type="text" class="form-control task-due-date" id="gorevbaslangic" name="task-due-date" value="<?=$item["g_baslangic_tarih"]?>" />
							</div>
							<div class="form-group">
								<label for="task-due-date" class="form-label">Bitiş Tarihi</label>
								<input type="text" class="form-control task-due-date" id="gorevbitis" name="task-due-date2" value="<?=$item["g_bitis_tarih"]?>" />
							</div>
							<div class="form-group">
								<label for="todoTitleAdd" class="form-label">İçerik</label>
								<input type="text" id="gorevicerik" name="todoTitleAdd2" class="new-todo-item-title form-control" placeholder="Görev İçerik" value="<?=$item["g_icerik"]?>" />
							</div>
							<input type="hidden" id="gorevicerik" name="todoTitleAdd2" class="new-todo-item-title form-control" placeholder="Görev İçerik" value="<?=$item["id"]?>" />

						</div>
						<div class="modal-footer">
							<button  type="button" class="btn btn-secondary waves-effect waves-float waves-light"  data-dismiss="modal">Kapat</button>
							<button  type="submit" class="btn btn-secondary waves-effect waves-float waves-light"  >Düzenle</button>
							<a  href="sil.php?islem=gorevsil&id=<?=$item['id']?>" class="btn btn-secondary waves-effect waves-float waves-light"  >Sil</a>

						</div>
					</form>
				</div>
			</div>
		</div>

<?php } ?>
<?php } ?>
<?php 
if($_POST['tur']=="Etiket5" ){
	$team="Etiket5";
	$dizi = $baglan -> prepare("SELECT * FROM gorevler where durum = ? AND (kullanici= ? || g_atama=? ) AND g_etiket=? ");
	$dizi->execute([$durum1,$kullanici_id,$kullanici_id,$team]);
	foreach ($dizi as $item) {?>

		
		<li class="todo-item">
			<div class="todo-title-wrapper">
				<div class="todo-title-area">
					<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical drag-icon"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
					<div class="title-wrapper">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" onclick="gorevtamam(<?=$item["id"]?>,'gorevlerim')" id="customCheck1<?=$item["id"]?>a">
							<label class="custom-control-label" for="customCheck1<?=$item["id"]?>a"></label>
						</div>
						<span class="todo-title"><?=$item["g_baslik"]?></span>
					</div>
				</div>
				<div class="todo-item-action">
					<div class="badge-wrapper mr-1">
						<button type="button" class="btn btn-outline-secondary waves-effect" data-toggle="modal" data-target="#secondary<?=$item["id"]?>">
							Düzenle
						</button>

						
					</div>
					<div class="badge badge-pill badge-light-primary">Bitiş Tarihi </div>
					<div class="badge badge-pill badge-light-success"><?=$item["g_bitis_tarih"]?></div>
					
					
				</div>
			</div>
		</li>

			<div class="modal fade modal-secondary text-left" id="secondary<?=$item["id"]?>" tabindex="-1" aria-labelledby="myModalLabel1660" style="display: none;" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myModalLabel1660">Görev Düzenle</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<form action="islem.php" method="POST" data-xhr="true">
						<input type="hidden" name="islem" value="guncelle">
						<div class="modal-body">

							<div class="form-group">
								<input type="hidden" name="id" value="<?=$item["id"]?>">
								<label for="todoTitleAdd" class="form-label">Başlık</label>
								<input type="text" id="gorevbaslik" name="todoTitleAdd" class="new-todo-item-title form-control" placeholder="Görev Başlığı" value="<?=$item["g_baslik"]?>" />
							</div>
							<div class="form-group">
								<label for="task-due-date" class="form-label">Başlangıç Tarihi</label>
								<input type="text" class="form-control task-due-date" id="gorevbaslangic" name="task-due-date" value="<?=$item["g_baslangic_tarih"]?>" />
							</div>
							<div class="form-group">
								<label for="task-due-date" class="form-label">Bitiş Tarihi</label>
								<input type="text" class="form-control task-due-date" id="gorevbitis" name="task-due-date2" value="<?=$item["g_bitis_tarih"]?>" />
							</div>
							<div class="form-group">
								<label for="todoTitleAdd" class="form-label">İçerik</label>
								<input type="text" id="gorevicerik" name="todoTitleAdd2" class="new-todo-item-title form-control" placeholder="Görev İçerik" value="<?=$item["g_icerik"]?>" />
							</div>
							<input type="hidden" id="gorevicerik" name="todoTitleAdd2" class="new-todo-item-title form-control" placeholder="Görev İçerik" value="<?=$item["id"]?>" />

						</div>
						<div class="modal-footer">
							<button  type="button" class="btn btn-secondary waves-effect waves-float waves-light"  data-dismiss="modal">Kapat</button>
							<button  type="submit" class="btn btn-secondary waves-effect waves-float waves-light"  >Düzenle</button>
							<a  href="sil.php?islem=gorevsil&id=<?=$item['id']?>" class="btn btn-secondary waves-effect waves-float waves-light"  >Sil</a>

						</div>
					</form>
				</div>
			</div>
		</div>

<?php } ?>
<?php } ?>
<?php 
if($_POST['tur']=="gelecek" ){
	$team="Update";
	$dizi = $baglan -> prepare("SELECT * FROM gorevler where durum = ? AND (kullanici= ? || g_atama=? ) AND g_baslangic_tarih>CURDATE() ");
	$dizi->execute([$durum1,$kullanici_id,$kullanici_id]);
	foreach ($dizi as $item) {?>

		
		<li class="todo-item">
			<div class="todo-title-wrapper">
				<div class="todo-title-area">
					<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical drag-icon"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
					<div class="title-wrapper">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" onclick="gorevtamam(<?=$item["id"]?>,'gorevlerim')" id="customCheck1<?=$item["id"]?>a">
							<label class="custom-control-label" for="customCheck1<?=$item["id"]?>a"></label>
						</div>
						<span class="todo-title"><?=$item["g_baslik"]?></span>
					</div>
				</div>
				<div class="todo-item-action">
					<div class="badge-wrapper mr-1">
						<button type="button" class="btn btn-outline-secondary waves-effect" data-toggle="modal" data-target="#secondary<?=$item["id"]?>">
							Düzenle
						</button>

						
					</div>
					<div class="badge badge-pill badge-light-primary">Başlangıç Tarihi </div>
					<div class="badge badge-pill badge-light-success"><?=$item["g_baslangic_tarih"]?></div>
					
					
				</div>
			</div>
		</li>

		<div class="modal fade modal-secondary text-left" id="secondary<?=$item["id"]?>" tabindex="-1" aria-labelledby="myModalLabel1660" style="display: none;" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myModalLabel1660">Görev Düzenle</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<form action="islem.php" method="POST" data-xhr="true">
						<input type="hidden" name="islem" value="guncelle">
						<div class="modal-body">

							<div class="form-group">
								<input type="hidden" name="id" value="<?=$item["id"]?>">
								<label for="todoTitleAdd" class="form-label">Başlık</label>
								<input type="text" id="gorevbaslik" name="todoTitleAdd" class="new-todo-item-title form-control" placeholder="Görev Başlığı" value="<?=$item["g_baslik"]?>" />
							</div>
							<div class="form-group">
								<label for="task-due-date" class="form-label">Başlangıç Tarihi</label>
								<input type="text" class="form-control task-due-date" id="gorevbaslangic" name="task-due-date" value="<?=$item["g_baslangic_tarih"]?>" />
							</div>
							<div class="form-group">
								<label for="task-due-date" class="form-label">Bitiş Tarihi</label>
								<input type="text" class="form-control task-due-date" id="gorevbitis" name="task-due-date2" value="<?=$item["g_bitis_tarih"]?>" />
							</div>
							<div class="form-group">
								<label for="todoTitleAdd" class="form-label">İçerik</label>
								<input type="text" id="gorevicerik" name="todoTitleAdd2" class="new-todo-item-title form-control" placeholder="Görev İçerik" value="<?=$item["g_icerik"]?>" />
							</div>
							<input type="hidden" id="gorevicerik" name="todoTitleAdd2" class="new-todo-item-title form-control" placeholder="Görev İçerik" value="<?=$item["id"]?>" />

						</div>
						<div class="modal-footer">
							<button  type="button" class="btn btn-secondary waves-effect waves-float waves-light"  data-dismiss="modal">Kapat</button>
							<button  type="submit" class="btn btn-secondary waves-effect waves-float waves-light"  >Düzenle</button>
							<a  href="sil.php?islem=gorevsil&id=<?=$item['id']?>" class="btn btn-secondary waves-effect waves-float waves-light"  >Sil</a>

						</div>
					</form>
				</div>
			</div>
		</div>

<?php } ?>
<?php } ?>







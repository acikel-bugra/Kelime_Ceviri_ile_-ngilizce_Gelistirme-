<?php 
ob_start();
session_start();
include 'ayar.php';
?>

<?php include 'header.php'; ?>
<!-- END: Main Menu-->
<div class="modal fade text-left" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Not Ekle</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form class="p-30-notop" action="islem.php" method="post" enctype="multipart/form-data" data-xhr="true">
                <div class="modal-body">

                    <input type="hidden" name="islem" value="notadd">
                    <label>Başlık: </label>
                    <div class="form-group">
                        <input type="text" placeholder="Başlık" required="" name="baslik" class="form-control">
                    </div>

                    <label>Not: </label>
                    <div class="form-group">
                        <textarea class="form-control" name="nott"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect waves-float waves-light" data-dismiss="modal">Vazgeç</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Ekle</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- BEGIN: Content-->
<div class="app-content content kanban-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Ekip Arkadaşların</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Ana Sayfa</a>
                                </li>
                                <li class="breadcrumb-item active">Arkadaşların
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">



        </div>
    </div>
    <div class="content-body">


        <!-- Table Hover Animation start -->
        <div class="row" id="table-hover-animation">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Arkadaşların</h4>
                    </div>

                    <div class="table-responsive">
                        <div class="modal fade text-left" id="sil36" tabindex="-1" role="dialog" aria-labelledby="hesapduzenle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel33">Kullanıcıyı Çıkar</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <form class="p-30-notop" action="/arkadas-sil" method="post" enctype="multipart/form-data" data-xhr="true"></form>
                                    <div class="modal-body">
                                     <h5>Eminmisinnnn</h5>
                                     <input type="hidden" name="id" value="36">
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-danger waves-effect waves-float waves-light" data-dismiss="modal">Vazgeç</button>
                                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Evet</button>
                                </div>

                            </div>
                        </div>
                    </div><div class="modal fade text-left" id="sil1" tabindex="-1" role="dialog" aria-labelledby="hesapduzenle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Kullanıcıyı Çıkar</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form class="p-30-notop" action="/arkadas-sil" method="post" enctype="multipart/form-data" data-xhr="true"></form>
                                <div class="modal-body">
                                 <h5>Eminmisinnnn</h5>
                                 <input type="hidden" name="id" value="1">
                             </div>
                             <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect waves-float waves-light" data-dismiss="modal">Vazgeç</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Evet</button>
                            </div>

                        </div>
                    </div>
                </div><table class="table table-hover-animation">
                    <thead>
                        <tr>
                            <th>Ad / Soyad</th>
                            <th>Gmail</th>
                            <th>Durum</th>
                            <th>Detay/Sil</th>

                        </tr>
                    </thead>
                    <tbody>
                       <?php  
                       $ekip = $baglan->prepare("SELECT * FROM uyeler WHERE durum=:du  ");
                       $ekip->execute(array('du' => 1));
                       $veri = $ekip->fetchAll(PDO::FETCH_ASSOC);

                       ?>
                       <?php foreach ( $veri as $row ){?>
                        <tr>

                            <td>
                                <span class="font-weight-bold"><?php echo $row["ad"]; ?></span>
                            </td>

                            <td><?php echo $row["kullanici_adi"]; ?></td>
                            <td><button type="button" class="btn btn-outline-success round waves-effect">Arkadaşın</button></td>



                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                    </button>
                                   
                                </div>
                            </td>
                        </tr>
<?php } ?>
                        <tr>


                        
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Table head options end -->


</div>
</div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<?php include 'footer.php' ?>
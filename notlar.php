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
                        <h2 class="content-header-title float-left mb-0">Notlar</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Ana Sayfa</a>
                                </li>
                                <li class="breadcrumb-item active">Notlar
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">



                <div class="form-group breadcrumb-right">
                    <button type="button" class="btn btn-outline-primary waves-effect" data-toggle="modal" data-target="#inlineForm">
                        Not Ekle
                    </button>

                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row match-height">


                    <!-- Statistics Card -->
                    
                    <?php  
           $not = $baglan->prepare("SELECT * FROM notlar WHERE kullanici=:du ORDER BY id ");
           $not->execute(array('du' => $_SESSION['loginid']));
           $veri = $not->fetchAll(PDO::FETCH_ASSOC);

           ?>
           <?php foreach ( $veri as $row ){?>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card card-statistics" style=" flex: 0 1 auto!important;">
                            <div id="headingCollapse<?php echo $row["id"]; ?>" class="card-header collapsed" data-toggle="collapse" role="button" data-target="#collapse<?php echo $row["id"]; ?>" aria-expanded="false" aria-controls="collapse<?php echo $row["id"]; ?>">
                                <span class="lead collapse-title"> <?php echo $row["baslik"]; ?></span>

                                <div class="dropdown">
                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#notduzenle<?=$row['id']?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                            <span>Düzenle</span>
                                        </a>

                                       
                                        <a href="sil.php?islem=notsil&id=<?=$row["id"]; ?>" class="dropdown-item" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                            <span>Sil</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <style type="text/css">
                                .dark-layout pre {
                                    color: #fff;
                                    background-color: #161D31;
                                    border: 0;
                                }
                            </style>
                            <div id="collapse<?php echo $row["id"]; ?>" role="tabpanel" aria-labelledby="headingCollapse<?php echo $row["id"]; ?>" class="collapse" style="">
                                <div class="card-body">
                                    <pre style="    padding: 6px;"><?php echo $row["icerik"]; ?></pre>
                                </div>
                            </div>
                        </div>
                    </div>


                     <div class="modal fade text-left" id="notduzenle<?=$row['id']?>" tabindex="-1" role="dialog" aria-labelledby="hesapduzenle<?=$row['id']?>" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Notu Düzenle</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form class="p-30-notop" action="islem.php" method="post" enctype="multipart/form-data" data-xhr="true">
                                    <input type="hidden" name="id" value="<?=$row['id']?>">
                                    <input type="hidden" name="islem" value="notedit">
                                    <div class="modal-body">
                                        <label>Başlık: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Başlık" value="<?php echo $row["baslik"]; ?>" required="" name="baslik" class="form-control">
                                        </div>

                                        <label>Not: </label>
                                        <div class="form-group">
                                            <textarea class="form-control" name="nott"><?php echo $row["icerik"]; ?></textarea>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger waves-effect waves-float waves-light" data-dismiss="modal">Vazgeç</button>
                                        <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Düzenle</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                  
<?php } ?>

                   


                




                    <!--/ Statistics Card -->
                </div>


            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<?php include 'footer.php' ?>
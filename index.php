<?php ob_start(); session_start(); include 'ayar.php';?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>ToDo Ana Sayfa</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/bordered-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="" data-layout="dark-layout">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>


            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">

                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="sun"></i></a></li>
                

                <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 mr-auto">Bildirimler</h4>
                                <div class="badge badge-pill badge-light-primary">6 Yeni</div>
                            </div>
                        </li>

                        <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="javascript:void(0)">Tüm Bildirimleri Gör</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder"><?=$_SESSION['login']?></span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="page-account-settings.php"><i class="mr-50" data-feather="settings"></i> Ayarlar</a><a class="dropdown-item" href="logout.php"><i class="mr-50" data-feather="power"></i> Çıkış</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
        <div class="d-flex justify-content-start"><span class="mr-75" data-feather="alert-circle"></span><span>No results found.</span></div>
    </a></li>
</ul>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template-dark/index.html"><span class="brand-logo">
            </span>
                <h2 class="brand-text">ToDo</h2>
            </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Kategoriler</span><i data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="index.php"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Email">Ana Sayfa</span></a>
            </li>

            <li class=" nav-item"><a class="d-flex align-items-center" href="gorevler.php"><i data-feather="check-square"></i><span class="menu-title text-truncate" data-i18n="Todo">Görevler</span></a>
            </li>
           

            <li class=" nav-item"><a class="d-flex align-items-center" href="notlar.php"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Notlar</span></a>

            </li>


            <li class=" nav-item"><a class="d-flex align-items-center" href="ekip.php"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="User">Ekip</span></a>

            </li>
            


        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">


            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row match-height">

                    <!-- Greetings Card starts -->
                    <div class="col-lg-6 col-md-12 col-sm-12">

                        <div class="card card-congratulations">
                            <div class="card-body text-center">
                               <?php  
                               $ekip = $baglan->prepare("SELECT * FROM uyeler WHERE id=:du  ");
                               $ekip->execute(array('du' => $_SESSION['loginid']));
                               $veri = $ekip->fetchAll(PDO::FETCH_ASSOC);

                               ?>
                               <?php $a= $baglan->query("SELECT * FROM gorevler"); $a= $a->rowCount();   ?>
                               <?php $b= $baglan->query("SELECT * FROM notlar"); $b= $b->rowCount();   ?>
                               <div class="avatar avatar-xl bg-primary shadow">
                                <div class="avatar-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award font-large-1"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                                </div>
                            </div>
                            <div class="text-center">
                                <h1 class="mb-1 text-white">HOŞGELDİN <?=$veri['0']['ad']?>,</h1>
                                <p class="card-text m-auto w-75">
                                    Bugün seni gayet iyi görüyorum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Greetings Card ends -->


                <!-- Statistics Card -->
                <div class="col-xl-6 col-md-6 col-12">
                    <div class="card card-statistics">
                        <div class="card-header">
                            <h4 class="card-title">Özet</h4>

                        </div>
                        <div class="card-body statistics-body">
                            <div class="row">
                                <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="media">
                                        <div class="avatar bg-light-primary mr-2">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up avatar-icon"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h4 class="font-weight-bolder mb-0"><?=$a;?></h4>
                                            <p class="card-text font-small-3 mb-0">Görevler</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-sm-0">
                                    <div class="media">
                                        <div class="avatar bg-light-danger mr-2">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box avatar-icon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h4 class="font-weight-bolder mb-0"><?=$b;?></h4>
                                            <p class="card-text font-small-3 mb-0">Notlar</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Statistics Card -->
                <!-- Timeline Card -->


                <div class=" col-md-8 offset-md-2">

                </div>
                <div class="modal fade text-left" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel33">Duyuru Ekle</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form class="p-30-notop" action="islem.php" method="post" enctype="multipart/form-data" data-xhr="true">
                                <div class="modal-body">

                                    <input type="hidden" name="islem" value="duyuruadd">
                                    <label>Başlık: </label>
                                    <div class="form-group">
                                        <input type="text" placeholder="Başlık" required="" name="baslik" class="form-control">
                                    </div>

                                    <label>Duyuru: </label>
                                    <div class="form-group">
                                        <textarea class="form-control" name="icerik"></textarea>
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

                <div class=" col-md-8 offset-md-2">
                    <div class="card card-user-timeline">
                        <div class="card-header">


                            <div class="d-flex align-items-center" style="    margin-bottom: 15px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list user-timeline-title-icon"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                                <h4 class="card-title">Duyurular</h4>
                            </div>
                            <div class="form-group breadcrumb-right">
                                <button type="button" class="btn btn-outline-primary waves-effect" data-toggle="modal" data-target="#inlineForm">
                                    Duyuru Ekle
                                </button>

                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="timeline ml-50 mb-0">
                                <li class="timeline-item">
                                    <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                                    <?php  
                                    $duyuru = $baglan->prepare("SELECT * FROM duyurular WHERE durum=:du  ");
                                    $duyuru->execute(array('du' => 1));
                                    $veri = $duyuru->fetchAll(PDO::FETCH_ASSOC);

                                    ?>
                                    <?php foreach ( $veri as $row ){?>
                                        <div class="timeline-event">
                                            <h6><?php echo $row["baslik"]; ?></h6>
                                            <p><?php echo $row["icerik"]; ?> </p>


                                        </div>
                                    <?php } ?>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>


                    <!--/ Timeline Card -->
                </div>

                <div class="row match-height">
                    <div class="col-lg-4 col-12">
                        <div class="row match-height">

                        </div>

                        <div class="row match-height">

                        </div>
                    </div></div></section>
                    <!-- Dashboard Ecommerce ends -->

                </div>
            </div>
        </div>
        <!-- END: Content-->

        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <?php include 'footer.php'; ?>
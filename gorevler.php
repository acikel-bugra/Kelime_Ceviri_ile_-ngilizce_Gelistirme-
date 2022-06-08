<?php include 'ayar.php'; 
ob_start();
session_start();
if(!isset($_SESSION["girildi"])){

    header('Location: login.php');
}

?>

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
    <title>ToDo</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/editors/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/editors/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/dragula.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/toastr.min.css">
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
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/forms/form-quill-editor.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/extensions/ext-component-toastr.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/app-todo.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout content-left-sidebar navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar" data-layout="dark-layout">

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
                                <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
                                <div class="badge badge-pill badge-light-primary">6 New</div>
                            </div>
                        </li>

                        <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="javascript:void(0)">Read all notifications</a></li>
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

<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="../html/ltr/vertical-menu-template-dark/index.html"><span class="brand-logo">
               </span>
                <h2 class="brand-text">ToDo</h2>
            </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Kategoriler </span><i data-feather="more-horizontal"></i>
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
<div class="app-content content todo-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-area-wrapper">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content todo-sidebar">
                    <div class="todo-app-menu">
                        <div class="add-task">
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#new-task-modal">
                                Görev Ekle
                            </button>
                        </div>
                        <div class="sidebar-menu-list">
                            <div class="list-group list-group-filters">
                                <a href="javascript:void(0)" onclick="gorevgetir('gorevlerim');" class="list-group-item list-group-item-action active">
                                    <i data-feather="mail" class="font-medium-3 mr-50"></i>
                                    <span class="align-middle"> Görevlerim</span>
                                </a>
                                <a href="javascript:void(0)" onclick="gorevgetir('onemli');" class="list-group-item list-group-item-action">
                                    <i data-feather="star" class="font-medium-3 mr-50"></i> <span class="align-middle">Önemli</span>
                                </a>
                                <a href="javascript:void(0)" onclick="gorevgetir('tamam');" class="list-group-item list-group-item-action">
                                    <i data-feather="check" class="font-medium-3 mr-50"></i> <span class="align-middle">Tamamlananlar</span>
                                </a>
                               <a href="javascript:void(0)" onclick="gorevgetir('gelecek');" class="list-group-item list-group-item-action">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock font-medium-3 mr-50"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> <span class="align-middle">Gelecek Görevler</span>
                            </a>
                            </div>








                            <div class="mt-3 px-2 d-flex justify-content-between">
                                <h6 class="section-label mb-1">Etiketler</h6>
                                <i data-feather="plus" class="cursor-pointer"></i>
                            </div>
                            <div class="list-group list-group-labels">
                                <a href="javascript:void(0)" onclick="gorevgetir('Etiket1');" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-primary mr-1"></span>Etiket1
                                </a>
                                <a href="javascript:void(0)" onclick="gorevgetir('Etiket2');" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-success mr-1"></span>Etiket2
                                </a>
                                <a href="javascript:void(0)" onclick="gorevgetir('Etiket3');" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-warning mr-1"></span>Etiket3
                                </a>
                                <a href="javascript:void(0)" onclick="gorevgetir('Etiket4');" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-danger mr-1"></span>Etiket4
                                </a>
                                <a href="javascript:void(0)" onclick="gorevgetir('Etiket5');"class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-info mr-1"></span>Etiket5
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="content-right">
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <div class="body-content-overlay"></div>
                    <div class="todo-app-list">
                        <!-- Todo search starts -->
                        <div class="app-fixed-search d-flex align-items-center">
                            <div class="sidebar-toggle d-block d-lg-none ml-1">
                                <i data-feather="menu" class="font-medium-5"></i>
                            </div>
                            <div class="d-flex align-content-center justify-content-between w-100">
                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="todo-search" placeholder="Search task" aria-label="Search..." aria-describedby="todo-search" />
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle hide-arrow mr-1" id="todoActions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i data-feather="more-vertical" class="font-medium-2 text-body"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="todoActions">
                                    <a class="dropdown-item sort-asc" href="javascript:void(0)">Sort A - Z</a>
                                    <a class="dropdown-item sort-desc" href="javascript:void(0)">Sort Z - A</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Sort Assignee</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Sort Due Date</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Sort Today</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Sort 1 Week</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Sort 1 Month</a>
                                </div>
                            </div>
                        </div>
                        <!-- Todo search ends -->

                        <!-- Todo List starts -->
                        <div class="todo-task-list-wrapper list-group">
                            <ul class="todo-task-list media-list" id="todo-task-list">
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                                    <label class="custom-control-label" for="customCheck1"></label>
                                                </div>
                                                <span class="todo-title">Fix Responsiveness for new structure 💻</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-primary">Team</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 08</small>
                                            <div class="avatar">
                                                <img src="../app-assets/images/portrait/small/avatar-s-4.jpg" alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2" />
                                                    <label class="custom-control-label" for="customCheck2"></label>
                                                </div>
                                                <span class="todo-title">Plan a party for development team 🎁</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-primary">Team</div>
                                                <div class="badge badge-pill badge-light-danger">High</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 30</small>
                                            <div class="avatar bg-light-warning">
                                                <div class="avatar-content">MB</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3" />
                                                    <label class="custom-control-label" for="customCheck3"></label>
                                                </div>
                                                <span class="todo-title">Hire 5 new Fresher or Experienced, frontend and backend developers </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-info">Update</div>
                                                <div class="badge badge-pill badge-light-warning">Medium</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 28</small>
                                            <div class="avatar">
                                                <img src="../app-assets/images/portrait/small/avatar-s-5.jpg" alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item completed">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck4" checked />
                                                    <label class="custom-control-label" for="customCheck4"></label>
                                                </div>
                                                <span class="todo-title">Skype Tommy for project status & report</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-danger">High</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 18</small>
                                            <div class="avatar">
                                                <img src="../app-assets/images/portrait/small/avatar-s-8.jpg" alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck5" />
                                                    <label class="custom-control-label" for="customCheck5"></label>
                                                </div>
                                                <span class="todo-title">Send PPT with real-time reports</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-warning">Medium</div>
                                                <div class="badge badge-pill badge-light-success">Low</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 22</small>
                                            <div class="avatar bg-light-danger">
                                                <div class="avatar-content">LM</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6" />
                                                    <label class="custom-control-label" for="customCheck6"></label>
                                                </div>
                                                <span class="todo-title">Submit quotation for Abid's ecommerce website and admin project </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-primary">Team</div>
                                                <div class="badge badge-pill badge-light-success">Low</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 24</small>
                                            <div class="avatar">
                                                <img src="../app-assets/images/portrait/small/avatar-s-11.jpg" alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item completed">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck7" checked />
                                                    <label class="custom-control-label" for="customCheck7"></label>
                                                </div>
                                                <span class="todo-title">Reminder to mail clients for holidays</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-primary">Team</div>
                                                <div class="badge badge-pill badge-light-warning">Medium</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 27</small>
                                            <div class="avatar">
                                                <img src="../app-assets/images/portrait/small/avatar-s-4.jpg" alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck8" />
                                                    <label class="custom-control-label" for="customCheck8"></label>
                                                </div>
                                                <span class="todo-title">Refactor Code and fix the bugs and test it on server </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-success">Low</div>
                                                <div class="badge badge-pill badge-light-warning">Medium</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 27</small>
                                            <div class="avatar bg-light-success">
                                                <div class="avatar-content">KL</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck9" />
                                                    <label class="custom-control-label" for="customCheck9"></label>
                                                </div>
                                                <span class="todo-title">List out all the SEO resources and send it to new SEO team. </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <small class="text-nowrap text-muted mr-1">Sept 15</small>
                                            <div class="avatar">
                                                <img src="../app-assets/images/portrait/small/avatar-s-11.jpg" alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck10" />
                                                    <label class="custom-control-label" for="customCheck10"></label>
                                                </div>
                                                <span class="todo-title">Finish documentation and make it live</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-success">Low</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 28</small>
                                            <div class="avatar">
                                                <img src="../app-assets/images/portrait/small/avatar-s-7.jpg" alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item completed">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck11" checked />
                                                    <label class="custom-control-label" for="customCheck11"></label>
                                                </div>
                                                <span class="todo-title">Pick up Nats from her school and drop at dance class😁 </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <small class="text-nowrap text-muted mr-1">Aug 17</small>
                                            <div class="avatar bg-light-primary">
                                                <div class="avatar-content">PK</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck12" />
                                                    <label class="custom-control-label" for="customCheck12"></label>
                                                </div>
                                                <span class="todo-title">Plan new dashboard design with design team for Google app store. </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-info">Update</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Sept 02</small>
                                            <div class="avatar bg-light-danger">
                                                <div class="avatar-content">LO</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck13" />
                                                    <label class="custom-control-label" for="customCheck13"></label>
                                                </div>
                                                <span class="todo-title">Conduct a mini awareness meeting regarding health care. </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <small class="text-nowrap text-muted mr-1">Sept 05</small>
                                            <div class="avatar">
                                                <img src="../app-assets/images/portrait/small/avatar-s-17.jpg" alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item completed">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck14" checked />
                                                    <label class="custom-control-label" for="customCheck14"></label>
                                                </div>
                                                <span class="todo-title">Test functionality of apps developed by dev team for enhancements. </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-danger">High</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Sept 07</small>
                                            <div class="avatar bg-light-info">
                                                <div class="avatar-content">VB</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck15" />
                                                    <label class="custom-control-label" for="customCheck15"></label>
                                                </div>
                                                <span class="todo-title">Answer the support tickets and close completed tickets. </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-primary">Frontend</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Sept 12</small>
                                            <div class="avatar bg-light-success">
                                                <div class="avatar-content">SW</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <i data-feather="more-vertical" class="drag-icon"></i>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck16" />
                                                    <label class="custom-control-label" for="customCheck16"></label>
                                                </div>
                                                <span class="todo-title">Meet Jane and ask for coffee ❤️</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-info">Update</div>
                                                <div class="badge badge-pill badge-light-warning">Medium</div>
                                                <div class="badge badge-pill badge-light-success">Low</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 10</small>
                                            <div class="avatar">
                                                <img src="../app-assets/images/portrait/small/avatar-s-2.jpg" alt="user-avatar" height="32" width="32" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="no-results">
                                <h5>No Items Found</h5>
                            </div>
                        </div>
                        <!-- Todo List ends -->
                    </div>

                    <!-- Right Sidebar starts -->
                    <div class="modal modal-slide-in sidebar-todo-modal fade" id="new-task-modal">
                        <div class="modal-dialog sidebar-lg">
                            <div class="modal-content p-0">
                                <form  id="form-modal-todo" method="post" action="islem.php" class="todo-modal needs-validation" data-xhr="true" novalidate onsubmit="return false">
                                    <div class="modal-header align-items-center mb-1">
                                        <h5 class="modal-title">Görev Ekle</h5>
                                        <div class="todo-item-action d-flex align-items-center justify-content-between ml-auto">
                                            <span class="todo-item-favorite cursor-pointer mr-75"><i data-feather="star" class="font-medium-2"></i></span>
                                            <button type="button" class="close font-large-1 font-weight-normal py-0" data-dismiss="modal" aria-label="Close">
                                                ×
                                            </button>
                                        </div>
                                    </div>
                                    <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                                        <div class="action-tags">
                                            <div class="form-group">
                                                <label for="todoTitleAdd" class="form-label">Başlık</label>
                                                <input type="text" id="gorevbaslik" name="todoTitleAdd" class="new-todo-item-title form-control" placeholder="Görev Başlığı" />
                                            </div>
                                            <div class="form-group position-relative">
                                                <label for="task-assigned" class="form-label d-block">Görev Atama</label>
                                                <select class="select2 form-control" id="gorevatama" name="task-assigned">
                                                    <option value="<?=$_SESSION['loginid']?>" >Bana Özel</option>
                                                    <?php  
                                                    $ekip = $baglan->prepare("SELECT * FROM uyeler WHERE durum=:du  ");
                                                    $ekip->execute(array('du' => 1));
                                                    $veri = $ekip->fetchAll(PDO::FETCH_ASSOC);

                                                    ?>
                                                    <?php foreach ( $veri as $row ){?>
                                                        <option value="<?= $row['id']?>" ><?php echo $row["ad"]; ?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="task-due-date" class="form-label">Başlangıç Tarihi</label>
                                                    <input type="text" class="form-control task-due-date" id="gorevbaslangic" name="task-due-date" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="task-due-date" class="form-label">Bitiş Tarihi</label>
                                                    <input type="text" class="form-control task-due-date" id="gorevbitis" name="task-due-date2" />
                                                </div>

                                                 <div class="form-group">
                                                    <label for="task-tag" class="form-label d-block">Etiketler</label>
                                                    <select class="form-control task-tag" id="task-tag" name="task-tag" multiple="multiple">
                                                        <option value="Etiket1">Etiket1</option>
                                                        <option value="Etiket2">Etiket2</option>
                                                        <option value="Etiket3">Etiket3</option>
                                                        <option value="Etiket4">Etiket4</option>
                                                        <option value="Etiket5">Etiket5</option>
                                                    </select>
                                                </div>

                                              
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="check1" id="inlineCheckbox1" value="1"/>
                                                    <label class="form-check-label" for="inlineCheckbox1">Önemli</label>
                                                </div>


                                                <div class="form-group">
                                                    <label for="todoTitleAdd" class="form-label">İçerik</label>
                                                    <input type="text" id="gorevicerik" name="todoTitleAdd2" class="new-todo-item-title form-control" placeholder="Görev İçeriği" />
                                                </div>
                                            </div>
                                            <input type="hidden" name="islem" value="gorevadd">
                                            <div class="form-group my-1">
                                                <button name="eklebtn" type="submit" onclick="ekle()" class="btn btn-primary d-none add-todo-item mr-1">Ekle</button>
                                                <button type="button" class="btn btn-outline-secondary add-todo-item d-none" data-dismiss="modal">
                                                    İptal
                                                </button>
                                                <button type="button" class="btn btn-primary d-none update-btn update-todo-item mr-1">Update</button>
                                                <button type="button" class="btn btn-outline-danger update-btn d-none" data-dismiss="modal">Delete</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Right Sidebar ends -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="ml-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">ToDo Proje</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <script src="ajax.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../app-assets/vendors/js/editors/quill/katex.min.js"></script>
    <script src="../app-assets/vendors/js/editors/quill/highlight.min.js"></script>
    <script src="../app-assets/vendors/js/editors/quill/quill.min.js"></script>
    <script src="../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="../app-assets/vendors/js/extensions/dragula.min.js"></script>
    <script src="../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pages/app-todo.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

</body>
<!-- END: Body-->

</html>

<script >

    $("#todo-task-list").load("listele.php");
    function gorevtamam($id, tur){
        $.ajax({
            url     : 'islem.php',
            data    : 'islem=gorevtamam&id='+$id,
            type    : 'POST',
            success : function(data){
                gorevgetir('gorevlerim');
            }
        });
    }
    
    



    function gorevgetir($tur){


        $('#todo-task-list').html('<div class="d-flex justify-content-center my-1"><div class="spinner-border" role="status" aria-hidden="true"></div></div>');

        $.ajax({
            url     : 'listele.php',
            data    : 'durum=gorevgetir&tur='+$tur,
            type    : 'POST',
            success : function(data){
                $('#todo-task-list').html(data); 
            }
        });
    }


</script>
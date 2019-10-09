<?php 
session_start();
    if (!(isset($_SESSION['pasien']))) {
        die("<script type=text/Javascript> alert('Session Telah Habis/Tidak Ada!')
                window.location = '../../login.php';
            </script>");
    }
    $localStorage = $_SESSION['data'];
    include '../../settings/koneksi.php';

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Sahabat</title>
    <!-- Custom CSS -->
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    
<![endif]-->


</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.php">
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text"> 
                            <img src="../../img/hiv.png" style="width:20%;" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <!-- <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a> -->
                            <!-- <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form> -->
                        <!-- </li> -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="profile.php"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="../logout.php"><i class="ti-power-off m-r-5 m-l-5"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <div class="user-profile d-flex no-block dropdown m-t-20">
                                <div class="user-content hide-menu m-l-10">
                                    <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h5 class="m-b-0 user-name font-medium"><?= $localStorage['namaLengkap'] ?> <i class="fa fa-angle-down"></i></h5>
                                        <span class="op-5 user-email"><?= $localStorage['email'] ?></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="profile.php"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                        <a class="dropdown-item" href="../logout.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="informasi.php" aria-expanded="false"><i class="ti-info-alt"></i><span class="hide-menu">Informasi </span></a>
                            <!-- <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="info_hiv.php" class="sidebar-link"><i class="mdi mdi-face"></i><span class="hide-menu"> Apa itu HIV/AIDS ? </span></a></li>
                                <li class="sidebar-item"><a href="info_arv.php" class="sidebar-link"><i class="mdi mdi-face"></i><span class="hide-menu"> Infor ARV </span></a></li>
                                <li class="sidebar-item"><a href="info_penularan.php" class="sidebar-link"><i class="mdi mdi-face"></i><span class="hide-menu"> Penularan </span></a></li>
                                <li class="sidebar-item"><a href="info_prinsip.php" class="sidebar-link"><i class="mdi mdi-face"></i><span class="hide-menu"> Prinsip Penularan </span></a></li>
                            </ul> -->
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="list_rs.php" aria-expanded="false"><i class="ti-list-ol"></i><span class="hide-menu">List RS/Puskes</span></a></li>
                        <li class="sidebar-item"> <a href="alur_pengobatan.php" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-account-network"></i><span class="hide-menu">Alur Pengobatan</span></a></li>
                        <li class="sidebar-item"> <a href="obat.php" class="sidebar-link waves-effect waves-dark sidebar-link" href="table-basic.html" aria-expanded="false"><i class="mdi mdi-border-all"></i><span class="hide-menu">Obat</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Tim Pelayanan </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="list_tim.php?jenis=Dokter" class="sidebar-link"><i class="mdi mdi-face"></i><span class="hide-menu"> Dokter </span></a></li>
                                <li class="sidebar-item"><a href="list_tim.php?jenis=Petugas Lapangan" class="sidebar-link"><i class="mdi mdi-face"></i><span class="hide-menu"> Petugas Lapangan </span></a></li>
                                <li class="sidebar-item"><a href="list_tim.php?jenis=Petugas Sebaya" class="sidebar-link"><i class="mdi mdi-face"></i><span class="hide-menu"> Petugas Sebaya </span></a></li>
                                <li class="sidebar-item"><a href="list_tim.php?jenis=Komunitas" class="sidebar-link"><i class="mdi mdi-face"></i><span class="hide-menu"> Komunitass </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="booking_tes.php" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Booking Tes</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chat.php" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Bimbingan</span></a></li>
                        
                    </ul>
                    
                </nav>
            </div>
        </aside>
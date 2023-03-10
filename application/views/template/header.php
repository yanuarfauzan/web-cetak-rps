<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    

    <!-- Custom styles for this template-->
    <link href="<?= base_url(''); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- my fontawesome -->
    <link rel="stylesheet" href="https://kit.fontawesome.com/329aeafc83.css" crossorigin="anonymous">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Home'); ?>">
                
                <i class="fas fa-solid fa-school"></i>
                    
                <div class="sidebar-brand-text mx-3">WEB RPS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('Home'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>DASHBOARD</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('Dosen'); ?>">
                <i class="fas fa-solid fa-user"></i>
                    <span>DOSEN</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('Fakultas'); ?>">
                <i class="fas fa-solid fa-city"></i>
                    <span>FAKULTAS</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('Prodi'); ?>">
                <i class="fas fa-solid fa-book-open"></i>
                    <span>PROGRAM STUDI</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('Matkul'); ?>">
                <i class="fas fa-solid fa-book"></i>
                    <span>MATAKULIAH</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('Rps'); ?>">
                <i class="fas fa-solid fa-file"></i>
                    <span>RPS</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Nav Item - Utilities Collapse Menu -->
            <!-- Divider -->


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                </div>
                <!-- End of Main Content -->
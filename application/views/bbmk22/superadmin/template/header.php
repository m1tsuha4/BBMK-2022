<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Superadmin | Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets3/superadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets3/superadmin/css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>superadmin22/home">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Superadmin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url() ?>superadmin22/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">Peserta</div>
            <!-- Nav Item - Peserta -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>superadmin22/listpeserta">
                    <i class="fas fa-users"></i>
                    <span>Peserta</span>
                </a>
            </li>
            <!-- Nav Item - Peserta -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>superadmin22/peserta">
                    <i class="fas fa-user-edit"></i>
                    <span>CRUD Peserta</span>
                </a>
            </li>
            <!-- Nav Item - Statistik Peserta -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>superadmin22/stat22">
                    <i class="far fa-chart-bar"></i>
                    <span>Statistik Peserta 2022</span>
                </a>
            </li>
            <!-- Nav Item - Statistik Peserta -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>superadmin22/stat">
                    <i class="far fa-chart-bar"></i>
                    <span>Statistik Peserta 2021</span>
                </a>
            </li>

            <!-- Nav Item - Statistik Peserta -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>superadmin22/stat20">
                    <i class="far fa-chart-bar"></i>
                    <span>Statistik Peserta 2020</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">UKM</div>
            <!-- Nav Item - Input UKM -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>superadmin22/inputukm">
                    <i class="fas fa-pen"></i>
                    <span>Input UKM</span>
                </a>
            </li>
            <!-- Nav Item - Lihat UKM -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>superadmin22/lihatukm">
                    <i class="fas fa-house-user"></i>
                    <span>Lihat UKM</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider" />


            <div class="sidebar-heading">Settings</div>
            <!--         
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>superadmin/home">
                    <i class="fas fa-folder-open"></i>
                    <span>Dokumentasi</span>
                </a>
            </li>
          
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>superadmin/home">
                    <i class="fas fa-cogs"></i>
                    <span>Settings</span>
                </a>
            </li> -->
            <!-- Nav Item - Logout -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>superadmin22" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
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

                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata("superadmin") ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url() ?>assets3/superadmin/img/undraw_profile.svg" />
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="<?= base_url() ?>superadmin22/setting">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="<?= base_url() ?>superadmin22" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
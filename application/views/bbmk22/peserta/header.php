<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>assets22/style-dashboard.css">
    <title><?= $title; ?></title>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Peserta | BBMK 2022</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="<?= base_url(); ?>main22/"><i class="bi bi-house-door-fill me-2"></i>Beranda</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>main22/home"><i class="bi bi-grid-fill me-2"></i>Dashboard</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>main22/home/news"><i class="bi bi-bell-fill me-2"></i>Pemberitahuan</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>main22/home/profile"><i class="bi bi-pencil-square me-2"></i>Edit Profil</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>main22/home/syarat"><i class="bi bi-menu-down me-2"></i>Syarat Daftar Ulang</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>main22/home/status"><i class="bi bi-check-circle-fill me-2"></i>Status Verifikasi</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>main22/home/jadwal"><i class="bi bi-calendar2-week-fill me-2"></i>Jadwal BBMK</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>main22/home/materi"><i class="bi bi-folder2 me-2"></i>Materi BBMK</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>main22/home/sertifikat"><i class="bi bi-file-arrow-down-fill me-2"></i>Sertifikat</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>main22/logout"><span class="text-danger"><i class="bi bi-power me-2"></i>Keluar</span></a>
                </li>
            </ul>
        </nav>
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span><i class="bi bi-justify text-white"></i></span>
                    </button>
                </div>
            </nav>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>assets22/css/style-dashboard.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/sweetalert2.min.css">
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/sweetalert2.min.js"></script>
    <link rel="shortcut icon" href="<?= base_url() ?>assets22/logo/group 432.png">
    <title><?= $title; ?></title>
</head>
<?php
$query = $this->db->query("SELECT nama, logo, kuota, total FROM ukm WHERE username = '" . $this->session->userdata("adminBBMK19") . "'");
$data = $query->row();
?>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Admin | BBMK 2022</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="<?= base_url(); ?>"><i class="bi bi-house-door-fill me-2"></i>Beranda</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>admin22/home"><i class="bi bi-grid-fill me-2"></i>Dashboard</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>admin22/notif"><i class="bi bi-bell-fill me-2"></i>Pemberitahuan</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>admin22/profile"><i class="bi bi-pencil-square me-2"></i>Edit Profil</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>admin22/setting"><i class="bi bi-pencil-square me-2"></i>Settings</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>admin22/statistik"><i class="bi bi-menu-down me-2"></i>Statistik BBMK</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>admin22/peserta"><i class="bi bi-house-door-fill me-2"></i>Semua Peserta BBMK</a>

                </li>
                <li>
                    <a href="<?= base_url(); ?>admin22/peserta/verifikasi"><i class="bi bi-check-circle-fill me-2"></i>Peserta Sudah Diverifikasi</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>admin22/peserta/belumdiverifikasi"><i class="bi bi-check-circle-fill me-2"></i>Peserta Belum Diverifikasi</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>admin22/peserta/tidakdiverifikasi"><i class="bi bi-check-circle-fill me-2"></i>Peserta Tidak Diverifikasi</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>admin22/kehadiran"><i class="bi bi-calendar2-week-fill me-2"></i>Kehadiran Peserta</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>admin22/daftarhadir"><i class="bi bi-calendar2-week-fill me-2"></i>Daftar Kehadiran Peserta</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>admin22/materi"><i class="bi bi-folder2 me-2"></i>Materi BBMK</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>admin22/kelulusanpeserta"><i class="bi bi-file-arrow-down-fill me-2"></i>Kelulusan Peserta</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>admin22/sertifikat"><i class="bi bi-file-arrow-down-fill me-2"></i>Sertifikat Peserta</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>admin22/logout"><span class="text-danger"><i class="bi bi-power me-2"></i>Keluar</span></a>
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
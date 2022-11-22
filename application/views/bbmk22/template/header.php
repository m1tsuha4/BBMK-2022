<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets22/css/style.css">
    <!-- <link rel="stylesheet" href="<?= base_url() ?>assets22/style2.css"> -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets22/logo/group 432.png">
    <title><?= $title ?></title>
    <style>
        .title {
            background-image: url("<?= base_url() ?>assets22/logo/Group 18.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100%;
        }
    </style>
</head>
<?php
$query = $this->db->query("SELECT * FROM ukm");
?>

<body>
    <nav class="navbar sticky-sm-top navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="<?= base_url() ?>assets22/logo/unand.png" alt=""></a>
            <a class="navbar-brand" href="#"><img src="<?= base_url() ?>assets22/logo/logobbmk22.png" style="width: 140.14px; height: 48px;" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ul">
                    <!-- <li class="nav-item hilang">
                        <a class="nav-link" href="<?= base_url() ?>main22/#tentang">Tentang</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>main22/#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>">BBMK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>main22/stat">Statistik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>main22">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>main22/#alur">Alur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>main22/#timeline">Linimasa</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            UKM
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            foreach ($query->result() as $ukm) {
                            ?>
                                <li><a class="dropdown-item" href="<?= base_url() ?>main22/ukm/<?= $ukm->username ?>"><?= $ukm->nama ?> </a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="nav-item mr-5">
                        <a href="<?= base_url() ?>/main22/login" class="btn btnNav-m">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
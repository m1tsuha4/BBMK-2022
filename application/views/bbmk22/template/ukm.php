<?php
$ukm = $this->db->query("SELECT * FROM ukm WHERE username = '" . $ukmid . "'")->row();
?>
<div class="title">
    <div class="container">
        <div class="row justify-content-center" data-anijs="if: scroll, on: window, do: bounceInLeft animated, before: scrollReveal repeat, after: scrollReveal">
            <div class="col-md-6 mt-5">
                <h1>BBMK</h1>
                <h1 class="tahun">2022</h1>
                <a href="<?= base_url(); ?>/main22/daftar" class="btn btn-primary login">Daftar Sekarang</a>
            </div>
            <div class="col-md-4 mt-5">
                <img src="<?= base_url() ?>assets22/Group 351.png" alt="" class="logo" height="300" width="300">
            </div>
        </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#003566" fill-opacity="1" d="M0,128L80,149.3C160,171,320,213,480,208C640,203,800,149,960,133.3C1120,117,1280,139,1360,149.3L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
</svg>
<div class="container-fluid">
    <div class="row justify-content-center my-3">
        <div class="col-md-10">
            <div class="card px-3 py-3 shadow">
                <div class="row text-center">
                    <div class="col-md-6">
                        <span class="intro mt-5">UKM</span>
                        <p class="bakat"><?= $ukm->nama; ?></p>
                    </div>
                    <div class="col-md-6 mt-3">
                        <img src="<?= base_url() ?>/assets/img/logo/<?= $ukm->logo ?>" alt="" height="300" width="300" class="img-fluid img-ukm">
                    </div>
                </div>
                <p class="mt-3">
                <p class="h5">
                    <?= $ukm->deskripsi ?>
                </p>
                </p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col-md-10">
            <div class="card px-3 py-5 shadow">
                <h2 class="visi text-center">VISI</h2>
                <p class="text-center my-4">
                    <?= $ukm->visi ?>
                </p>
                <h2 class="misi text-center">MISI</h2>
                <ol class="my-4">
                    <?= $ukm->misi ?>
                </ol>
            </div>
        </div>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col-md-10">
            <div class="card px-3 py-3 shadow">
                <div class="row text-center">
                    <div class="col-md-6 alur">
                        <p class="time1">LINI<span class="time2">MASA</span></p>
                    </div>
                    <div class="col-md-6">
                        <div class="timeline">
                            <div class="container1">
                                <div class="content">
                                    <i class="bi bi-calendar2-check-fill"></i>
                                    <h4>Hari ke-1</h4>
                                    <p><?= $ukm->timeline1 ?></p>
                                </div>
                            </div>
                            <div class="container1">
                                <div class="content">
                                    <i class="bi bi-calendar2-check-fill"></i>
                                    <h4>Hari ke-2</h4>
                                    <p><?= $ukm->timeline2 ?></p>
                                </div>
                            </div>
                            <div class="container1">
                                <div class="content">
                                    <i class="bi bi-calendar2-check-fill"></i>
                                    <h4>Hari ke-3</h4>
                                    <p><?= $ukm->timeline3 ?></p>
                                </div>
                            </div>
                            <div class="container1">
                                <div class="content">
                                    <i class="bi bi-calendar2-check-fill"></i>
                                    <h4>Hari ke-4</h4>
                                    <p><?= $ukm->timeline4 ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col-md-10">
            <div class="card px-3 py-5 shadow">
                <div class="row text-center">
                    <div class="col-md-6">
                        <span class="syarat1 mt-5">SYARAT</span>
                        <p class="syarat2">PENDAFTARAN</p>
                    </div>
                    <div class="col-md-6">
                        <p class="badges py-2"><?= $ukm->syarat1 ?></p>
                        <p class="badges py-2"><?= $ukm->syarat2 ?></p>
                        <p class="badges py-2"><?= $ukm->syarat3 ?></p>
                        <p class="badges py-2"><?= $ukm->syarat4 ?></p>
                        <p class="badges py-2"><?= $ukm->syarat5 ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col-md-10">
            <div class="card px-3 py-5 shadow">
                <div class="row text-center">
                    <div class="col-md-6 alur">
                        <p class="time1">DOKUMEN<span class="time2">TASI</span></p>
                    </div>
                    <div class="col-md-6">
                        <div class="wrapper">
                            <div class='header'>
                            </div>
                            <ul id="slider">
                                <li class="slide"><img src="<?= base_url() ?>assets/img/web/<?= $ukm->foto1 ?>" class="img-fluid"></li>
                                <li class="slide"><img src="<?= base_url() ?>assets/img/web/<?= $ukm->foto2 ?>" class="img-fluid"></li>
                                <li class="slide"><img src="<?= base_url() ?>assets/img/web/<?= $ukm->foto3 ?>" class="img-fluid"></li>
                                <li class="slide"><img src="<?= base_url() ?>assets/img/web/<?= $ukm->foto4 ?>" class="img-fluid"></li>
                                <li class="slide"><img src="<?= base_url() ?>assets/img/web/<?= $ukm->foto5 ?>" class="img-fluid"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col-md-10">
            <div class="card px-3 py-5 shadow">
                <iframe class="" src="<?= $ukm->video ?>"></iframe>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
<!-- <script type="text/javascript">
        $(document).ready(function(){
          $('#slider>li:gt(0)').hide();
           setInterval(function() {
              $('#slider > li:first')
                .fadeOut(1000)
                .next()
                .fadeIn(1000)
                .end()
                .appendTo('#slider');
            }, 2000);
      
         });
        </script> -->
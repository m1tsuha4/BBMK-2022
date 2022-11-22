<?php
$ukm = $this->db->query("SELECT * FROM ukm WHERE username = '" . $ukmid . "'")->row();
?>
<div class="title">
    <div class="container">
        <div class="row justify-content-center" data-anijs="if: scroll, on: window, do: bounceInLeft animated, before: scrollReveal repeat, after: scrollReveal">
            <div class="col-md-6 mt-5">
                <h1>BBMK</h1>
                <h1 class="tahun">2022</h1>
                <a href="<?= base_url(); ?>/main22/daftar" class="btn btn-primary login">Daftar</a>
            </div>
            <div class="col-md-4 mt-5">
                <img src="<?= base_url() ?>assets22/Group 351.png" alt="" class="logo" height="448px;" width="478.52px">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center my-3" data-anijs="if: scroll, on: window, do: bounceInLeft animated, before: scrollReveal repeat, after: scrollReveal">
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
                <p class="h5 des">
                    <?= $ukm->deskripsi ?>
                </p>
                </p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center my-5" data-anijs="if: scroll, on: window, do: bounceInLeft animated, before: scrollReveal repeat, after: scrollReveal">
        <div class="col-md-10">
            <div class="card px-3 py-5 shadow">
                <h2 class="visi text-center">VISI</h2>
                <p class="text-center my-4 visiukm">
                    <?= $ukm->visi ?>
                </p>
                <h2 class="misi text-center misiukm">MISI</h2>
                <ol class="my-4">
                    <?= $ukm->misi ?>
                </ol>
            </div>
        </div>
    </div>
    <div class="row justify-content-center my-5" data-anijs="if: scroll, on: window, do: bounceInLeft animated, before: scrollReveal repeat, after: scrollReveal">
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
                                    <?php
                                    if ($ukm->timeline1) { ?>
                                        <i class="bi bi-calendar2-check-fill"></i>
                                        <h4>Hari ke-1</h4>
                                        <p><?= $ukm->timeline1 ?></p>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    if ($ukm->timeline2) { ?>
                                        <i class="bi bi-calendar2-check-fill"></i>
                                        <h4>Hari ke-2</h4>
                                        <p><?= $ukm->timeline2 ?></p>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    if ($ukm->timeline3) { ?>
                                        <i class="bi bi-calendar2-check-fill"></i>
                                        <h4>Hari ke-3</h4>
                                        <p><?= $ukm->timeline3 ?></p>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    if ($ukm->timeline4) { ?>
                                        <i class="bi bi-calendar2-check-fill"></i>
                                        <h4>Hari ke-4</h4>
                                        <p><?= $ukm->timeline4 ?></p>
                                    <?php
                                    }
                                    ?>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-5" data-anijs="if: scroll, on: window, do: bounceInLeft animated, before: scrollReveal repeat, after: scrollReveal">
            <div class="col-md-10">
                <div class="card px-3 py-5 shadow">
                    <div class="row text-center">
                        <div class="col-md-6">
                            <?php
                            if ($ukm->syarat1) { ?>
                                <p class="badges py-2"><?= $ukm->syarat1 ?></p>
                            <?php
                            }
                            ?>
                            <?php
                            if ($ukm->syarat2) { ?>
                                <p class="badges py-2"><?= $ukm->syarat2 ?></p>
                            <?php
                            }
                            ?>
                            <?php
                            if ($ukm->syarat3) { ?>
                                <p class="badges py-2"><?= $ukm->syarat3 ?></p>
                            <?php
                            }
                            ?>
                            <?php
                            if ($ukm->syarat4) { ?>
                                <p class="badges py-2"><?= $ukm->syarat4 ?></p>
                            <?php
                            }
                            ?>
                            <?php
                            if ($ukm->syarat5) { ?>
                                <p class="badges py-2"><?= $ukm->syarat5 ?></p>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-md-6 alur">
                            <span class="syarat1 mt-5">SYARAT</span>
                            <p class="syarat2">PENDAFTARAN</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-5" data-anijs="if: scroll, on: window, do: bounceInLeft animated, before: scrollReveal repeat, after: scrollReveal">
            <div class="col-md-10">
                <div class="card px-3 py-5 shadow">
                    <div class="row text-center">
                        <div class="col-md-6 alur">
                            <p class="time1">DOKUM<span class="time2">ENTASI</span></p>
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
        <div class="row justify-content-center my-5" data-anijs="if: scroll, on: window, do: bounceInLeft animated, before: scrollReveal repeat, after: scrollReveal">
            <div class="col-md-10">
                <div class="card px-3 py-5 shadow">
                    <iframe frameborder="0" width="600" height="400" src="<?= $ukm->video ?>"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="footer py-5 px-3 mt-5">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-4">
                    <p>
                        <a href="#" class="name"><i class="bi bi-instagram sosmed px-2 py-1"></i> <?= $ukm->instagram ?></a>
                    </p>
                    <p>
                        <a href="#" class="name"><i class="bi bi-twitter sosmed px-2 py-1"></i> <?= $ukm->twitter ?></a>
                    </p>
                </div>
                <div class="col-md-4">
                    <p>
                        <a href="#" class="name"><i class="bi bi-youtube sosmed px-2 py-1"></i> <?= $ukm->youtube ?></a>
                    </p>
                    <p>
                        <a href="#" class="name"><i class="bi bi-facebook sosmed px-2 py-1"></i> <?= $ukm->facebook ?></a>
                    </p>
                </div>
                <div class="col-md-4">
                    <p>
                        <a href="#" class="name"><i class="bi bi-envelope-fill sosmed px-2 py-1"></i> <?= $ukm->email ?></a>
                    </p>
                    <p>
                        <a href="#" class="name"><i class="bi bi-globe sosmed px-2 py-1"></i> <?= $ukm->website ?></a>
                    </p>
                </div>
            </div>
        </div>
    </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://anijs.github.io/lib/anijs/anijs-min.js"></script>

    <!-- Include to use $addClass, $toggleClass or $removeClass -->
    <script src="https://anijs.github.io/lib/anijs/helpers/dom/anijs-helper-dom-min.js"></script>
    <!-- The scrollreveal helper -->
    <script src="https://anijs.github.io/lib/anijs/helpers/scrollreveal/anijs-helper-scrollreveal-min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
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
    </script>
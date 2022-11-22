<?php
$query = $this->db->query("SELECT * FROM peserta WHERE nobp = '" . $this->session->userdata("userBBMK19") . "'");
$key = $query->row();

if ($key->foto == null) {
    $foto = "assets3/img/unand.png";
} else {
    $foto = "assets/img/profile peserta/" . $key->foto;
}; ?>


<div class="container con-dash">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card py-3 px-3 dashboard">
                <div class="text-center justify-content-center image">
                    <img src="<?= base_url(); ?><?= $foto ?>" alt="" class="rounded-circle" width="200" height="200">
                </div>
                <div class="text-center">
                    <p class="name">Halo <?= $key->nama ?>!</p>
                    <p>Welcome to BBMK 2022</p>
                </div>
                <div class="row justify-content-center time">
                    <div class="col-md-4">
                        <img src="<?= base_url(); ?>/assets22/logo/bell.png" alt="">
                    </div>
                    <div class="col-md-4">
                        <p class="time-bbmk">3 Hari Lagi</p>
                        <p class="time-bbmk">Menuju BBMK</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php
$query = $this->db->query("SELECT * FROM peserta WHERE nobp = '" . $this->session->userdata("userBBMK19") . "'");
$key = $query->row();

if ($key->foto == null) {
    $foto = "assets3/img/unand.png";
} else {
    $foto = "assets/img/profile peserta/" . $key->foto;
}; ?>

<?php
$xquery = $this->db->query("SELECT * FROM pemberitahuan WHERE id_ukm = '$key->id_ukm'");
foreach ($xquery->result() as $data) { ?>
    <div class="container con-dash">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card py-5 px-5 berita">
                    <div class="row justify-content-around">
                        <div class="col-md-6">
                            <p class="title"><?= $data->judul ?></p>
                        </div>
                        <div class="col-md-2">
                            <p class="time-upload"><?= $data->waktu; ?></p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <?= $data->isi ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
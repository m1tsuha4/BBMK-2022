<?php
$query = $this->db->query("SELECT * FROM peserta WHERE nobp = '" . $this->session->userdata("userBBMK19") . "'");
$peserta = $query->row();

$mquery = $this->db->query("SELECT * FROM filemateri WHERE id_ukm = '$peserta->id_ukm'");
$materikey = $mquery->row();
?>
<div class="container con-dash">
    <div class="row justify-content-center">
        <h3 class="text-center fw-bold">MATERI BBMK</h3>
        <div class="col-md-8">
            <div class="row justify-content-center">
                <?php
                foreach ($mquery->result() as $key) {
                ?>

                    <div class="col-md-6">
                        <div class="card py-3 px-3 materi">
                            <div class="text-center">
                                <img src="<?= base_url(); ?>assets3/img/ppt-logo.png" alt="" width="129" height="120">
                                <p class="my-5 title-materi"><?= $key->namafile ?></p>
                                <a href="<?= base_url() ?>main/downloadfile/<?= $peserta->id_ukm ?>/<?= $key->id ?>">
                                    <button class="btn btn-primary btn-edit">UNDUH</button></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>

<?php
$query = $this->db->query("SELECT * FROM peserta WHERE nobp = '" . $this->session->userdata("userBBMK19") . "'");
$key = $query->row();
?>

<div class="container-fluid">
    <form action="" method="">
        <table class="table">
            <thead>
                <tr>

                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelulusan</th>
                    <th scope="col">Status Sertifikat</th>
                    <th scope="col">Download Sertifikat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                $btnStat = "bg-secondary";
                $stat = "Belum diisi";
                $btnStat2 = "bg-secondary";
                $stat2 = "Belum diisi";
                foreach ($query->result() as $key) {
                    $no  += 1;
                    if ($key->sertifikat == "") {
                        $btnStat = "bg-secondary";
                        $stat = "Belum diisi";
                    } else {
                        $btnStat = "bg-success";
                        $stat = "Sudah diisi";
                    }

                    if ($key->kelulusan == "1") {
                        $btnStat2 = "bg-success";
                        $stat2 = "Lulus";
                    } else if ($key->kelulusan == "2") {
                        $btnStat2 = "bg-danger";
                        $stat2 = "Tidak Lulus";
                    } else {
                        $btnStat2 = "bg-secondary";
                        $stat2 = "Belum diisi";
                    }
                ?>

                    <tr>
                        
                        <th scope="row"><?= $no ?></th>
                        <td><?= $key->nobp ?></td>
                        <td><?= $key->nama ?></td>
                        <td><span class="badge <?= $btnStat2 ?> text-light"><?= $stat2 ?></span></td>
                        <td><span class="badge <?= $btnStat ?>" style="text-align: center"><?= $stat ?></span></td>

                        <td>
                            <?php
                            if ($key->sertifikat) {
                            ?>
                                <a href="<?= base_url() ?>main22/downloadsertif/<?= $key->id ?>/<?= $key->id_ukm ?>/<?= $key->sertifikat ?>">
                                    <span class="badge bg-success">Download</span>
                                </a>

                            <?php
                            }
                            ?>


                        </td>

                    </tr>
                <?php

                } ?>
            </tbody>
        </table>

    </form>
</div>
<?php
$query = $this->db->query("SELECT * FROM peserta  WHERE id = '$pid'");
$key = $query->row();

$status1 = "Belum diisi";
$status2 = "Belum diisi";
$status3 = "Belum diisi";

if ($key->stat_reg == 1) {
    $status1 = "Sudah Diverifikasi";
    $btnreg = "bg-success";
} else if ($key->stat_reg == 2) {
    $status1 = "Tidak Lulus";
    $btnreg = "bg-danger";
} else {
    $status1 = "Belum diverifikasi";
    $btnreg = "bg-danger";
}
if ($key->kelulusan == 1) {
    $status2 = "Lulus";
    $btnlulus = "bg-success";
} else if ($key->kelulusan == 2) {
    $status2 = "Tidak Lulus";
    $btnlulus = "bg-danger";
} else {
    $status2 = "Belum diisi";
    $btnlulus = "bg-danger";
}



if ($key->fakultas != '0') {

    $jquery = $this->db->query("SELECT * FROM jurusan WHERE id = '$key->jurusan'");
    $jurusanque = $jquery->row();
    $lquery = $this->db->query("SELECT * FROM fakultas WHERE id = '$key->fakultas'");
    $fakultasque = $lquery->row();
    $jurusan = $jurusanque->nama;
    $fakultas = $fakultasque->fakultas;
} else {
    $jurusan = "Belum ada";
    $fakultas = "Belum ada";
}

$mquery = $this->db->query("SELECT * FROM ukm WHERE id = '$key->id_ukm'");
$ukmque = $mquery->row();

if ($key->foto == null) {
    $foto = "assets3/img/unand.png";
} else {
    $foto = "assets/img/profile peserta/" . $key->foto;
}; ?>

<!-- ===== PAGE CONTENT ===== -->
<div class="container con-dash">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-center">
                <div class="profile-photo mt-5">
                    <img src="<?= base_url(); ?><?= $foto ?>" alt="Profile Photo" width="200" class="rounded-circle img-thumbnail" />
                </div>
            </div>
            <div class="card py-2 px-3 profil">
                <table>
                    <th width="300">Nama</th>

                    <td>&emsp; &emsp;<?= $key->nama; ?></td>
                </table>
            </div>
            <div class="card py-2 px-3 profil">
                <table>
                    <th width="300">NIM</th>
                    <td>&emsp; &emsp;<?= $key->nobp; ?></td>
                </table>
            </div>
            <div class="card py-2 px-3 profil">
                <table>
                    <th width="300">Fakultas</th>
                    <td>&emsp; &emsp; <?= $fakultas ?></td>
                </table>
            </div>
            <div class="card py-2 px-3 profil">
                <table>
                    <th width="300">Jurusan</th>
                    <td>&emsp; &emsp; <?= $jurusan ?></td>
                </table>
            </div>
            <div class="card py-2 px-3 profil">
                <table>
                    <th width="300">UKM yang dipilih</th>
                    <td>&emsp; &emsp; <?= $ukmque->nama ?></td>
                </table>
            </div>
            <div class="card py-2 px-3 profil">
                <table>
                    <th width="300">Tempat Lahir</th>
                    <td>&emsp; &emsp; <?= $key->tmp_lahir ?></td>
                </table>
            </div>
            <div class="card py-2 px-3 profil">
                <table>
                    <th width="300">Hobi</th>
                    <td>&emsp; &emsp; <?= $key->hobi ?></td>
                </table>
            </div>
            <div class="card py-2 px-3 profil">
                <table>
                    <th width="300">Motto</th>
                    <td>&emsp; &emsp; <?= $key->motto ?></td>
                </table>
            </div>
            <div class="card py-2 px-3 profil">
                <table>
                    <th width="300">No HP.</th>
                    <td>&emsp; &emsp; <?= $key->hp; ?></td>
                </table>
            </div>
            <div class="card py-2 px-3 profil">
                <table>
                    <th width="300">Alamat</th>
                    <td>&emsp; &emsp; <?= $key->alamat ?></td>
                </table>
            </div>
            <div class="card py-2 px-3 profil">
                <table>
                    <th width="300">Prestasi</th>
                    <td>&emsp; &emsp; <?= $key->prestasi ?></td>
                </table>
            </div>
            <div class="card py-2 px-3 profil">
                <table>
                    <th width="300">Status Verifikasi</th>
                    <td>&emsp; &emsp; <span class="badge <?= $btnreg ?>"><?= $status1 ?></span></td>
                </table>
            </div>
            <div class="card py-2 px-3 profil">
                <table>
                    <th width="300">Status Kelulusan</th>
                    <td>&emsp; &emsp; <span class="badge <?= $btnlulus ?>"><?= $status2 ?></span></td>
                </table>
            </div>

            <?php if ($key->fileverif1 != null) { ?>
                <div class="card py-2 px-3 profil">
                    <table>
                        <th width="340"><?= $ukmque->syarat1 ?></th>
                        <td><a href="<?= base_url() ?>admin22/downloadfile/<?= $key->id ?>/<?= $key->id_ukm ?>/file1/<?= $key->fileverif1 ?>">
                        <span class="badge bg-success">Download File 1</span></td>
                    </table>
                </div>
            <?php
            }
            ?>
            <?php if ($key->fileverif2) { ?>
                <div class="card py-2 px-3 profil">
                    <table>
                        <th width="340"><?= $ukmque->syarat2 ?></th>
                        <td><a href="<?= base_url() ?>admin22/downloadfile/<?= $key->id ?>/<?= $key->id_ukm ?>/file1/<?= $key->fileverif2 ?>">
                        <span class="badge bg-success">Download File 2</span></td>
                    </table>
                </div>
            <?php
            }
            ?>
            <?php if ($key->fileverif3) { ?>
                <div class="card py-2 px-3 profil">
                    <table>
                        <th width="340"><?= $ukmque->syarat3 ?></th>
                        <td><a href="<?= base_url() ?>admin22/downloadfile/<?= $key->id ?>/<?= $key->id_ukm ?>/file1/<?= $key->fileverif3 ?>">
                        <span class="badge bg-success">Download File 3</span></td>
                    </table>
                </div>
            <?php
            }
            ?>
            <?php if ($key->fileverif4) { ?>
                <div class="card py-2 px-3 profil">
                    <table>
                        <th width="340"><?= $ukmque->syarat4 ?></th>
                        <td><a href="<?= base_url() ?>admin22/downloadfile/<?= $key->id ?>/<?= $key->id_ukm ?>/file1/<?= $key->fileverif4 ?>">
                        <span class="badge bg-success">Download File 4</span></td>
                    </table>
                </div>
            <?php
            }
            ?>
            <?php if ($key->fileverif5) { ?>
                <div class="card py-2 px-3 profil">
                    <table>
                        <th width="340"><?= $ukmque->syarat5 ?></th>
                        <td><a href="<?= base_url() ?>admin22/downloadfile/<?= $key->id ?>/<?= $key->id_ukm ?>/file1/<?= $key->fileverif5 ?>">
                        <span class="badge bg-success">Download File 5</span></td>
                    </table>
                </div>
            <?php
            }
            ?>
            <?php if ($key->sertifikat) { ?>
                <div class="card py-2 px-3 profil">
                    <table>
                        <th width="340">Download Sertifikat</th>
                        <td><a href="<?= base_url() ?>admin22/downloadsertif/<?= $key->id ?>/<?= $key->id_ukm ?>/<?= $key->sertifikat ?>">
                        <span class="badge bg-success">Sertifikat</span></td>
                    </table>
                </div>
            <?php
            }
            ?>
            <div class="row justify-content-center">
                <h4>Upload Sertifikat Peserta </h4>
            </div>
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                <div class="input-group">
                    <input type="file" name="sertifikat" class="form-control photo-upload" id="inputGroupFile01">
                    <input type="submit" name="sertif" value="Upload" class="btn-primary btnForm btnForm-edit">
                </div>
            </form>
            <?php
            if (isset($_POST["sertif"])) {
                $namafiles =    "Sertifikat-" . $key->nobp;

                $nama    =    $_FILES["sertifikat"]["name"];
                $ext     =     pathinfo($nama, PATHINFO_EXTENSION);
                $size    =     $_FILES["sertifikat"]["size"];
                $tmp     =     $_FILES["sertifikat"]["tmp_name"];

                // if ($ext == "jpg" or $ext == "JPG" or $ext == "png" or $ext == "PNG") {
                if (($size <= 2007200) and ($size != 0)) {
                    $idukm = $key->id_ukm;
                    $letakfile = $namafiles . '-' . $idukm . '.' . $ext;
                    $update = $this->db->query("UPDATE peserta SET sertifikat = '$letakfile'  WHERE nobp = '" . $key->nobp . "'");

                    if ($update) {
                        $upload = move_uploaded_file($tmp, "assets/file-sertifikat/$idukm/$letakfile");
                        $this->alert->pesan("success", "Materi berhasil diupload", "", 1, base_url("/admin22/sertifikat"));
                    } else {
                        $this->alert->pesan("error", "Gagal...");
                    }
                } else {
                    $this->alert->pesan("error", "Gagal File melebihi 2 Mb atau tidak ada...");
                }
            }
            ?>
        </div>
    </div>
</div>
</div>
</div>
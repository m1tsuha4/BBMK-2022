<?php
$query = $this->db->query("SELECT * FROM peserta WHERE nobp = '" . $this->session->userdata("userBBMK19") . "'");
$key = $query->row();
$msg = "";

if ($key->stat_reg == 1) {
    $status1 = "Sudah Diverifikasi";
    $btnreg = "bg-success";
    $msg = "Selamat Anda sudah diverifikasi";
} else if ($key->stat_reg == 2) {
    $status1 = "Tidak Diverifikasi";
    $btnreg = "bg-danger";
    $msg = "Lengkapi profile dan syarat pendaftaran segera";
} else {
    $status1 = "Belum diverifikasi";
    $btnreg = "bg-warning";
    $msg = "Akun Anda akan dicek segera";
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


$hadirhari1 = "Tidak Hadir";
$hadirhari2 = "Tidak Hadir";

$hadirhari3 = "Tidak Hadir";

$hadirhari4 = "Tidak Hadir";


if ($key->hadir1 == "1") {
    $hadirhari1 = "Hadir";
}
if ($key->hadir2 == "1") {
    $hadirhari2 = "Hadir";
}
if ($key->hadir3 == "1") {
    $hadirhari3 = "Hadir";
}
if ($key->hadir4 == "1") {
    $hadirhari4 = "Hadir";
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
<div class="container con-dash">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center">
                <img src="<?= base_url(); ?><?= $foto ?>" alt="" class="rounded-circle" height="200" width="200">
                <div class="text-start">
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
                            <th width="300">Jurusan</th>
                            <td>&emsp; &emsp; <?= $jurusan ?></td>
                        </table>
                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Status Verifikasi</th>
                            <td>&emsp; &emsp; <span class="badge <?= $btnreg ?>"><?= $status1 ?></span></td>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
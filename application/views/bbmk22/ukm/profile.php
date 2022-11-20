<?php
$query = $this->db->query("SELECT *FROM ukm WHERE username = '" . $this->session->userdata("adminBBMK19") . "'");
$data = $query->row();
?>


<!-- ===== PAGE CONTENT ===== -->
<div class="container con-dash">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="profile-photo mt-3">
                        <img src="<?= base_url() ?>/assets/img/logo/<?= $data->logo ?>" alt="Profile Photo" width="200" class="rounded-circle img-thumbnail" />

                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Nama UKM</th>
                            <td>
                                <label name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>"><?= $data->nama ?></label>
                            </td>
                        </table>
                    </div>
                </form>
                <form action="" method="post">
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Deskripsi</th>
                            <td></td>
                            <td>
                                <textarea name="deskripsi" style="height: 10rem;" class="form-control edit-data"><?= $data->deskripsi ?></textarea>
                            </td>
                        </table>
                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Visi UKM</th>
                            <td></td>
                            <td>
                                <textarea name="visi" class="form-control edit-data" style="height: 100px"><?= $data->visi ?></textarea>
                            </td>
                        </table>
                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Misi UKM</th>
                            <td></td>
                            <td>
                                <textarea name="misi" class="form-control edit-data" style="height: 18rem"><?= $data->misi ?></textarea>
                            </td>
                        </table>
                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Motto</th>
                            <td>
                                <input type="text" value="<?= $data->motto ?>" name="motto" class="form-control edit-data">
                            </td>
                        </table>
                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Syarat Pendaftaran 1</th>
                            <td>
                                <input type="text" value="<?= $data->syarat1 ?>" name="syarat1" class="form-control edit-data">
                            </td>
                        </table>
                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Syarat Pendaftaran 2</th>
                            <td>
                                <input type="text" value="<?= $data->syarat2 ?>" name="syarat2" class="form-control edit-data">
                            </td>
                        </table>
                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Syarat Pendaftaran 3</th>
                            <td>
                                <input type="text" value="<?= $data->syarat3 ?>" name="syarat3" class="form-control edit-data">
                            </td>
                        </table>
                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Syarat Pendaftaran 4</th>
                            <td>
                                <input type="text" value="<?= $data->syarat4 ?>" name="syarat4" class="form-control edit-data">
                            </td>
                        </table>
                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Syarat Pendaftaran 5</th>
                            <td>
                                <input type="text" value="<?= $data->syarat5 ?>" name="syarat5" class="form-control edit-data">
                            </td>
                        </table>
                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Link Video Profile</th>
                            <td>
                                <input type="text" value="<?= $data->video ?>" name="video" class="form-control edit-data">
                            </td>
                        </table>
                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Kuota Peserta</th>
                            <td>
                                <input disabled type="number" value="<?= $data->kuota ?>" name="kuota" class="form-control edit-data">
                            </td>
                        </table>
                    </div>


            </div>
            <div class="container text-center">
                <input type="submit" name="kirim" class="btn btn-primary btn-edit px-3" value="Perbarui Profil">
            </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST["kirim"])) {

    $deskripsi     =    $this->db->escape_str($this->input->input_stream("deskripsi", TRUE));
    $visi         =    $this->db->escape_str($this->input->input_stream("visi", TRUE));
    $misi         =    $this->db->escape_str($this->input->input_stream("misi", TRUE));
    $motto        =    $this->db->escape_str($this->input->input_stream("motto", TRUE));
    $syarat1        =    $this->db->escape_str($this->input->input_stream("syarat1", TRUE));
    $syarat2        =    $this->db->escape_str($this->input->input_stream("syarat2", TRUE));
    $syarat3        =    $this->db->escape_str($this->input->input_stream("syarat3", TRUE));
    $syarat4        =    $this->db->escape_str($this->input->input_stream("syarat4", TRUE));
    $syarat5        =    $this->db->escape_str($this->input->input_stream("syarat5", TRUE));
    $video       =    $this->db->escape_str($this->input->input_stream("video", TRUE));
    $update = $this->db->query("UPDATE ukm SET deskripsi = '$deskripsi', syarat1 ='$syarat1', syarat2='$syarat2',syarat3='$syarat3', syarat4='$syarat4', syarat5='$syarat5', visi = '$visi', misi = '$misi', motto = '$motto', video = '$video' WHERE username = '" . $this->session->userdata("adminBBMK19") . "'");
    if ($update) {
        $this->alert->msg("success", "Berhasil...", "Data ditambahkan", 1, base_url("/admin22/home"));
    } else {
        $this->alert->msg("error", "Gagal...");
    }
} ?>
<?php
$query = $this->db->query("SELECT * FROM peserta WHERE nobp = '" . $this->session->userdata("userBBMK19") . "'");
$key = $query->row();

if ($key->foto == null) {
    $foto = "assets22/Vector.png";
} else {
    $foto = "assets/img/profile peserta/" . $key->foto;
}; ?>

<div class="container con-dash">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center">
                <form action="" method="post" enctype="multipart/form-data">
                    <?php
                    $csrf = array(
                        "name" => $this->security->get_csrf_token_name(),
                        "hash" => $this->security->get_csrf_hash()
                    );
                    ?>
                    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>">
                    <img src="<?= base_url(); ?><?= $foto ?>" alt="" class="rounded-circle" height="200" width="200">
                    <div class="text-start">
                        <div class="text-center">
                            <p>Ganti Foto Profil</p>
                            <p class="image_upload">
                                <label for="inputGroupFile01">
                                    <a class="btn btn-warning btn-sm" rel="nofollow"><i class="bi bi-camera-fill"></i> Pilih Gambar</a>
                                </label>

                                <input type="file" name="foto" class="form-control photo-upload" id="inputGroupFile01" required>

                            </p>
                            <input type="submit" name="upload" value="Upload" class="btn btn-primary btn-edit px-3">
                        </div>
                </form>
                <form action="" method="post">
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">jenis Kelamin</th>
                            <td></td>
                            <td>
                                <div class="d-flex">
                                    <input type="radio" name="jk" value="Laki Laki" class="me-1">
                                    <label for="" class="me-5">Laki Laki</label>
                                    <input type="radio" name="jk" value="Perempuan" class="me-1">
                                    <label for="">Perempuan</label>
                                </div>
                            </td>
                        </table>
                    </div>
                    <div class="card py-2 px-3 profil option-menu">
                        <table>
                            <th width="300">Fakultas</th>
                            <td></td>
                            <td>

                                <select class="form-control edit-data" name="fakultas" id="floatingSelect" aria-label="Floating label select example" required>
                                    <option disabled>Pilih Fakultas</option>
                                    <?php
                                    $jquery = $this->db->query("SELECT * FROM fakultas");
                                    foreach ($jquery->result() as $j) { ?>
                                        <option value="<?= $j->id; ?>" <?php if ($key->fakultas == $j->id) {
                                                                            echo "selected";
                                                                        } ?>><?= $j->fakultas; ?></option>
                                    <?php
                                    } ?>



                                </select>
                            </td>
                        </table>

                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Jurusan</th>
                            <td></td>
                            <td>
                                <select class="form-control edit-data" name="jurusan" id="floatingSelect" aria-label="Floating label select example" required>
                                    <option disabled selected>Pilih Jurusan</option>
                                    <?php
                                    $kquery = $this->db->query("SELECT * FROM jurusan");
                                    foreach ($kquery->result() as $j) { ?>
                                        <option value="<?= $j->id; ?>" <?php if ($key->jurusan == $j->id) {
                                                                            echo "selected";
                                                                        } ?>><?= $j->nama; ?></option>
                                    <?php
                                    } ?>


                                </select>
                            </td>
                        </table>
                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Tanggal Lahir</th>
                            <td></td>
                            <td>
                                <input type="date" value="<?= $key->tgl_lahir ?>" name="tgl_lahir" class="form-control edit-data">
                            </td>
                        </table>
                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">No HP</th>
                            <td></td>
                            <td>
                                <input type="number" value="<?= $key->hp ?>" name="nohp" id="" class="form-control edit-data">
                            </td>
                        </table>
                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Tempat Lahir</th>
                            <td></td>
                            <td>
                                <input type="text" value="<?= $key->tmp_lahir ?>" type="text" name="tmp_lahir" class="form-control edit-data">
                            </td>
                        </table>
                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Agama</th>
                            <td>
                                <input type="text" value="<?= $key->agama ?>" name="agama" class="form-control edit-data">
                            </td>
                        </table>
                    </div>

                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Motto</th>
                            <td>
                                <input type="text" value="<?= $key->motto ?>" name="motto" class="form-control edit-data">
                            </td>
                        </table>
                    </div>

                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Cita-Cita</th>
                            <td>
                                <input type="text" name="cita2" value="<?= $key->cita2 ?>" class="form-control edit-data">
                            </td>
                        </table>
                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Asal SMA</th>
                            <td></td>
                            <td>
                                <input type="text" value="<?= $key->sma ?>" name="sma" class="form-control edit-data">
                            </td>
                        </table>
                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Hobi</th>
                            <td></td>
                            <td>
                                <input type="text" value="<?= $key->hobi ?>" name="hobi" class="form-control edit-data">
                            </td>
                        </table>
                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Skill</th>
                            <td></td>
                            <td>
                                <input type="text" name="skill" value="<?= $key->skill ?>" class="form-control edit-data">
                            </td>
                        </table>
                    </div>
                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Alamat</th>
                            <td></td>
                            <td>
                                <input name="alamat" value="<?= $key->alamat ?>" id="" cols="30" rows="10" class="form-control edit-data"></input>
                            </td>
                        </table>
                    </div>

                    <div class="card py-2 px-3 profil">
                        <table>
                            <th width="300">Prestasi yang pernah diraih</th>
                            <td></td>
                            <td>
                                <input name="prestasi" value="<?= $key->prestasi ?>" id="" cols="30" rows="10" class="form-control edit-data"></input>
                            </td>
                        </table>
                    </div>
            </div>
            <input type="submit" name="update" class="btn btn-primary btn-edit px-3" value="Perbarui Profil">
            </form>
        </div>
    </div>
</div>


<?php
if (isset($_POST["update"])) {
    $jk    =    $this->db->escape_str($this->input->input_stream("jk", TRUE));
    $tmp_lahir    =    $this->db->escape_str($this->input->input_stream("tmp_lahir", TRUE));
    $tgl_lahir    =    $this->db->escape_str($this->input->input_stream("tgl_lahir", TRUE));
    $agama    =    $this->db->escape_str($this->input->input_stream("agama", TRUE));
    $sma    =    $this->db->escape_str($this->input->input_stream("sma", TRUE));
    $alamat    =    $this->db->escape_str($this->input->input_stream("alamat", TRUE));
    $hp    =    $this->db->escape_str($this->input->input_stream("nohp", TRUE));
    $hobi    =    $this->db->escape_str($this->input->input_stream("hobi", TRUE));
    $prestasi    =    $this->db->escape_str($this->input->input_stream("prestasi", TRUE));
    $skill    =    $this->db->escape_str($this->input->input_stream("skill", TRUE));
    $motto    =    $this->db->escape_str($this->input->input_stream("motto", TRUE));
    $jurusanpeserta    =    $this->db->escape_str($this->input->input_stream("jurusan", TRUE));
    $fakultaspeserta    =    $this->db->escape_str($this->input->input_stream("fakultas", TRUE));
    $cita2    =    $this->db->escape_str($this->input->input_stream("cita2", TRUE));
    $update = $this->db->query("UPDATE peserta SET jk = '$jk', tmp_lahir = '$tmp_lahir', tgl_lahir = '$tgl_lahir', agama = '$agama', sma = '$sma', alamat = '$alamat', hp = '$hp', hobi = '$hobi', prestasi = '$prestasi', skill = '$skill', motto = '$motto', jurusan = '$jurusanpeserta', fakultas = '$fakultaspeserta', cita2 = '$cita2'   WHERE nobp = '" . $this->session->userdata("userBBMK19") . "'");
    if ($update) {
        $this->alert->msg("success", "Berhasil...", "Data ditambahkan", 1, base_url("/main22/home/status"));
    } else {
        $this->alert->msg("error", "Gagal...");
    }
}
?>
<?php
if (isset($_POST["upload"])) {
    $nama = $_FILES["foto"]["name"];
    $ext  = pathinfo($nama, PATHINFO_EXTENSION);
    $tmp  = $_FILES["foto"]["tmp_name"];
    $size = $_FILES["foto"]["size"];
    $bp   = $this->session->userdata("userBBMK19");

    if ($ext == "jpg" or $ext == "JPG" or $ext == "png" or $ext == "PNG") {
        if ($size <= 307200) {
            if ($ext == "jpg" or $ext == "JPG") {
                $nama_baru = $bp . ".jpg";
            } else {
                $nama_baru = $bp . ".png";
            }
            $insert = $this->db->query("UPDATE peserta SET foto = '$nama_baru' WHERE nobp = '$bp'");
            if ($insert) {
                $upload = move_uploaded_file($tmp, "assets/img/profile peserta/$nama_baru");
                if ($upload) {
                    $this->alert->msg("success", "Berhasil...", "Foto ditambahkan", 1, base_url("/main22/home/profile"));
                } else {
                    $this->alert->msg("error", "Oops...", "Gagal mengupload foto...");
                }
            } else {
                $this->alert->msg("error", "Oops...", "Gagal mengupdate database...");
            }
        } else {
            $this->alert->msg("error", "Oops...", "Ukuran file maximal hanya 300kb");
        }
    } else {
        $this->alert->msg("error", "Oops...", "Format foto harus jpg atau png");
    }
} ?>
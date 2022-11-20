<div class="page-login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-5">
                <div class="card px-5 py-5 shadow masuk">
                    <h2 class="fw-bold text-center">Masuk Akun</h2>
                    <form action="" method="post">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                        <div class="form-group mt-4">
                            <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="NIM" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group mt-4">
                            <div class="input-group mt-4">
                                <input type="password" name="password" id="pass" class="form-control" placeholder="Password">
                                <div class="input-group-append">

                                    <!-- kita pasang onclick untuk merubah icon buka/tutup mata setiap diklik  -->
                                    <span id="mybutton" onclick="change()" class="input-group-text">

                                        <!-- icon mata bawaan bootstrap  -->
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                            <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <input type="submit" class="btn btn-primary btn-login" value="Masuk" name="login">
                            <p class="mt-3">
                                Belum punya akun? <a href="<?= base_url(); ?>/main22/daftar">Daftar Disini</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php
if (isset($_POST["login"])) {
    $username = $this->db->escape_str($this->input->input_stream("username", TRUE));
    $password = $this->db->escape_str($this->input->input_stream("password", TRUE));

    $query = $this->db->query("SELECT * FROM peserta WHERE nobp = '$username'");
    if ($query->num_rows() == 1) {
        $key = $query->row();
        if (password_verify($password, $key->password)) {
            $this->session->set_userdata("userBBMK19", "$username");
            $this->alert->msg("success", "Berhasil...", "Login berhasil...", 1, base_url("/main22/home"));
        } else {
            $this->alert->msg("error", "Oops...", "Password salah...");
        }
    } else {
        $this->alert->msg("error", "Oops...", "Akun anda belum terdaftar....");
    }
} ?>
<div class="page-login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-5">
                <div class="card px-5 py-5 masuk">
                    <h2 class="fw-bold text-center">Masuk Akun</h2>
                    <form action="" method="post">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                        <div class="form-group mt-4">
                            <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username" aria-describedby="emailHelp">
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#003566" fill-opacity="1" d="M0,128L80,149.3C160,171,320,213,480,208C640,203,800,149,960,133.3C1120,117,1280,139,1360,149.3L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
</svg> -->
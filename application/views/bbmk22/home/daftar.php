<div class="page-login">
	<div class="container">
		<div class="row justify-content-around">
			<div class="col-md-4 mt-5">
				<div class="card daftar-akun">
					<h2 class="fw-bold text-center text-white">Pendaftaran Akun</h2>
					<form action="" method="post">
						<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
						<div class="form-group mt-4">
							<input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Nama Lengkap" aria-describedby="emailHelp">
						</div>
						<div class="form-group mt-4">
							<input type="text" class="form-control" name="nobp" id="exampleInputEmail1" placeholder="NIM" aria-describedby="emailHelp">
						</div>
						<div class="form-group mt-4">
							<input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp">
						</div>
						<div class="form-group mt-4">
							<div class="input-group mt-4">
								<input type="password" id="pass" name="password" class="form-control" placeholder="Password">
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
							<div class="input-group mt-4">
								<input type="password" id="pass2" name="password2" class="form-control" placeholder="Konfirmasi Password">
								<div class="input-group-append">

									<!-- kita pasang onclick untuk merubah icon buka/tutup mata setiap diklik  -->
									<span id="mybutton2" onclick="change2()" class="input-group-text">

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
							<select name="ukm" id="" class="form-control">
								<option disabled selected>Pilih UKM</option>
								<?php
								$query = $this->db->query("SELECT * FROM ukm");
								foreach ($query->result() as $key) { ?>
									<?php

									$query = $this->db->query("SELECT* FROM peserta WHERE id_ukm ='$key->id'");
									echo $query->num_rows();

									if ($key->total >= $key->kuota) {
									} else {
									?>
										<option value="<?= $key->id; ?>"><?= $key->nama; ?></option>
									<?php
									}
									?>

								<?php
								} ?>
							</select>
						</div>
						<div class="form-group mt-4">
							<input type="submit" class="btn btn-primary btn-login" value="Masuk" name="daftar">
							<p class="mt-3">
								Sudah punya akun? <a href="<?= base_url(); ?>/main22/login">Login Disini</a>
							</p>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-4 mt-5">
				<div class="card log-reg">
					<img src="<?= base_url(); ?>/assets22/Group 351.png" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>

<?php
if (@$status == "nama") {
	$this->alert->msg("error", "Oops...", "Nama harus diisi...");
} else if (@$status == "nobp") {
	$this->alert->msg("error", "Oops...", "Nomor BP harus diisi...");
} else if (@$status == "pass") {
	$this->alert->msg("error", "Oops...", "Ulangi password...");
} else if (@$status == "pas2") {
	$this->alert->msg("error", "Oops...", "Kedua password harus sama...");
} else if (@$status == "penuh") {
	$this->alert->msg("error", "Oops...", "Maaf, kuota penuh...");
} else if (@$status == "gagal") {
	$this->alert->msg("error", "Oops...", "Pendaftaran gagal, coba lagi...");
} else if (@$status == "ukm") {
	$this->alert->msg("error", "Oops...", "Isi UKM, coba lagi...");
} else if (@$status == "berhasil") {
	$this->alert->msg("success", "Berhasil...", "Akunmu berhasil didaftarkan, silahkan ikuti proses berikutnya...", 1, base_url("/main22/login"));
} else if (@$status == "bp") {
	$this->alert->msg("error", "Oops...", "Peserta yang diizinkan hanya BP 20, 21 dan 22");
} else if (@$status == "pass2") {
	$this->alert->msg("error", "Oops...", "Password tidak sama ");
}
?>
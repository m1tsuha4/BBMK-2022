<?php
defined('BASEPATH') or exit('No direct script access allowed');

class main22 extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Participant');
	}

	public function index()
	{
		$data["title"] = "BBMK Online 2022";
		$this->load->view("bbmk22/template/header", $data);
		$this->load->view("bbmk22/home/index", $data);
		$this->load->view("bbmk22/template/footer", $data);
	}


	public function ukm($id)
	{
		$data["title"] = "BBMK Online 2022";
		$data["ukmid"] = $id;
		$this->load->view("bbmk22/template/header", $data);
		$this->load->view("bbmk22/template/ukm", $data);
		$this->load->view("bbmk22/template/footer", $data);
	}

	public function login()
	{
		if (@$this->session->userdata("userBBMK")) {
			$this->alert->msg("success", "Anda sudah login...", "", 1, base_url("/main22/home"));
		} else {
			$data["title"] = "BBMK 2022";
			$this->load->view("bbmk22/template/header", $data);
			$this->load->view("bbmk22/home/login",);
			$this->load->view("bbmk22/home/footer");
		}
	}

	public function daftar()
	{
		if (isset($_POST["daftar"])) {
			$nama = $this->db->escape_str($this->input->input_stream("nama", TRUE));
			$nobp = $this->db->escape_str($this->input->input_stream("nobp", TRUE));
			$pass = $this->db->escape_str($this->input->input_stream("password", TRUE));
			$pas2 = $this->db->escape_str($this->input->input_stream("password2", TRUE));
			$ukm  = $this->db->escape_str($this->input->input_stream("ukm", TRUE));
			$email  = $this->db->escape_str($this->input->input_stream("email", TRUE));
			$tahun = 2022;
			$_query = $this->db->query("SELECT * FROM ukm WHERE id = '$ukm'");
			$q = $_query->row();

			if ($nama == "") {
				$data["status"] = "nama";
			} else if ($nobp == "") {
				$data["status"] = "nobp";
			} else if ($pass == "") {
				$data["status"] = "pass";
			} else if ($pass == $pas2) {

				//! BBMK 2021 20,21 dan 22

				if (is_numeric($nobp)) {
					if (preg_match("/^20/", $nobp) or preg_match("/^21/", $nobp) or preg_match("/^22/", $nobp)) {
						$password = password_hash($pass, PASSWORD_DEFAULT);
						$insert = $this->db->query("INSERT INTO peserta(nama, nobp, password, id_ukm,tahun,email) VALUES('$nama', '$nobp', '$password', '$ukm','$tahun','$email')");
						if ($insert) {
							$total = $q->total;
							$after = $total + 1;
							$update = $this->db->query("UPDATE ukm SET total = '$after' WHERE id = '$ukm'");
							if ($update) {
								$data["status"] = "berhasil";
							} else {
								$data["status"] = "gagal";
							}
						} else {
							$data["status"] = "insert";
						}
					} else {
						$data["status"] = "bp";
					}
				} else {
					$data["status"] = "number";
				}
			} else {
				$data["status"] = "pass";
			}
		}


		$data["title"] = "Halaman Pendaftaran | BBMK 2022";
		$this->load->view("bbmk22/template/header", $data);
		$this->load->view("bbmk22/home/daftar");
		$this->load->view("bbmk22/home/footer");
	}

	public function home($page = "dashboard", $tabs = "news")
	{
		if (@$this->session->userdata("userBBMK19")) {
			$data["title"] = "Halaman Peserta | BBMK 2022";
			$data["tabs"] = $tabs;
			$this->load->view("bbmk22/peserta/header", $data);
			$this->load->view("bbmk22/peserta/$page");
			$this->load->view("bbmk22/peserta/footer");
		} else {
			$this->alert->msg("error", "Oops...", "Anda tidak memiliki izin mengakses halaman ini...", 1, base_url());
		}
	}

	public function logout()
	{
		session_destroy();
		$this->alert->msg("success", "Berhasil logout...", "", 1, base_url());
	}

	public function stat($page = "tahun", $kelulusan = 1, $index = 1)
	{
		$data["head_ukm"] = $this->Participant->get_ukm_all();

		// page condition

		switch ($page) {
			case "ukm":
				$data_ukm = $this->Participant->get_ukm_data($kelulusan)->row();
				$data["ukm"] = $data_ukm;
				$data["facultys"] =  $this->Participant->join_faculty_participant(2021);
				$data["ukm_faculty"] =  $this->Participant->join_faculty_ukm(2021, $data_ukm->id);
				$data["ukm_faculty2"] =  $this->Participant->join_faculty_ukm2($data_ukm->id);
				$data["major"] = $this->Participant->join_major($data_ukm->id);
				// Data 2022               
				$data["participant22_male"] = $this->Participant->get_participant_gender(2022, "Laki - Laki", $data_ukm->id, True);
				$data["participant22_fmale"] = $this->Participant->get_participant_gender(2022, "Perempuan", $data_ukm->id, True);

				$data["participant22_verif"] = $this->Participant->get_participant_reg(2022, 1, $data_ukm->id, True);
				$data["participant22_unverif"] = $this->Participant->get_participant_reg(2022, 2, $data_ukm->id, True);
				$data["participant22_n_verif"] = $this->Participant->get_participant_reg(2022, 0, $data_ukm->id, True);

				$data["participant22_pass"] = $this->Participant->get_participant_stat(2022, 1, $data_ukm->id, True);
				$data["participant22_not_pass"] = $this->Participant->get_participant_stat(2022, 2, $data_ukm->id, True);
				$data["participant22_n_pass"] = $this->Participant->get_participant_stat(2022, 0, $data_ukm->id, True);
				// Data 2021
				$data["participant21_male"] = $this->Participant->get_participant_gender(2021, "Laki - Laki", $data_ukm->id, True);
				$data["participant21_fmale"] = $this->Participant->get_participant_gender(2021, "Perempuan", $data_ukm->id, True);

				$data["participant21_verif"] = $this->Participant->get_participant_reg(2021, 1, $data_ukm->id, True);
				$data["participant21_unverif"] = $this->Participant->get_participant_reg(2021, 2, $data_ukm->id, True);
				$data["participant21_n_verif"] = $this->Participant->get_participant_reg(2021, 0, $data_ukm->id, True);

				$data["participant21_pass"] = $this->Participant->get_participant_stat(2021, 1, $data_ukm->id, True);
				$data["participant21_not_pass"] = $this->Participant->get_participant_stat(2021, 2, $data_ukm->id, True);
				$data["participant21_n_pass"] = $this->Participant->get_participant_stat(2021, 0, $data_ukm->id, True);

				// Data 2020

				$data["participant20_male"] = $this->Participant->get_participant_gender(NULL, "Laki - Laki", $data_ukm->id, True);
				$data["participant20_fmale"] = $this->Participant->get_participant_gender(NULL, "Perempuan", $data_ukm->id, True);

				$data["participant20_verif"] = $this->Participant->get_participant_reg(NULL, 1, $data_ukm->id, True);
				$data["participant20_unverif"] = $this->Participant->get_participant_reg(NULL, 2, $data_ukm->id, true);
				$data["participant20_n_verif"] = $this->Participant->get_participant_reg(NULL, 0, $data_ukm->id, true);

				$data["participant20_pass"] = $this->Participant->get_participant_stat(NULL, 1, $data_ukm->id, True);
				$data["participant20_not_pass"] = $this->Participant->get_participant_stat(NULL, 2, $data_ukm->id, True);
				$data["participant20_n_pass"] = $this->Participant->get_participant_stat(NULL, 0, $data_ukm->id, True);

				break;

			case "tahun":
				$data["all_participant"] = $this->Participant->get_participant_all_year()->row();
				$data["participant_faculty"] =  $this->Participant->join_participant_all_year();

				break;

			case "fakultas":
				$data["all_participant"] = $this->Participant->get_participant_all_year()->row();
				$data["participant_faculty"] =  $this->Participant->join_participant_all_year();
				$data["major"] = $this->Participant->join_major_all();
				break;
		}
		$data["title"] = "Statistik | BBMK 2022";
		$data["kelulusan"] = $kelulusan;
		$data["page"] = $index;
		$this->load->view("bbmk22/template/header", $data);
		$this->load->view("bbmk22/home/stat/header",);
		$this->load->view("bbmk22/home/stat/$page", $data);
		$this->load->view("bbmk22/template/footer");
	}

	public function download($ukm, $file_kelulusan)
	{
		$xquery = $this->db->query("SELECT * FROM peserta WHERE nobp = '" . $this->session->userdata("userBBMK") . "'");
		$row = $xquery->row();

		$idukm = $ukm;
		$this->load->helper('download');
		$path = file_get_contents(base_url() . "assets/file-sertifikat/$idukm/$file_kelulusan"); // get file name
		$name = $file_kelulusan; // new name for your file
		force_download($name, $path); // start download`
		$this->alert->msg("success", "Download Berhasil ...", "", 1, base_url("main22/home/profile"));
	}

	public function downloadfile($ukm, $idfile)
	{
		$xquery = $this->db->query("SELECT * FROM filemateri WHERE id_ukm = '" . $ukm . "' AND id = '" . $idfile . "'");
		$row = $xquery->row();
		$letakfile = $row->letakfile;

		$this->load->helper('download');
		$path = file_get_contents(base_url() . "assets/filemateri/$ukm/$letakfile"); // get file name
		$name = $row->letakfile; // new name for your file
		force_download($name, $path); // start download`

	}
	public function downloadsertif($idpeserta, $ukm, $namafile)
	{

		$this->load->helper('download');
		$path = file_get_contents(base_url() . "assets/file-sertifikat/$ukm/$namafile"); // get file name
		$name = $namafile; // new name for your file
		force_download($name, $path); // start download`

	}
}

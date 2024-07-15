<?php

use \modules\controllers\MainController;

/**
 * ini adalah controller dari siswa
 */
class SiswaController extends MainController
{
	public function index()
	{
		$this->model('siswa');

		$tableJoin = [
			"jurusan" => "siswa.id_jurusan = jurusan.id_jurusan",
			"artikel" => "siswa.id_siswa = artikel.id_siswa"
		];

		$params = []; // Not used in the new version, kept for compatibility
		$where = [
			"siswa.status" => "Siswa",
		];
		$order = [
			"siswa.id_siswa" => "DESC"
		];

		$data = $this->siswa->getJoin($tableJoin, $params, "LEFT JOIN", $where, $order);

		$this->template('siswa', array('siswa'	=>	$data));
	}

	public function detail()
	{
		$this->model('siswa');
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$data = $this->siswa->getJoin(
			'jurusan',
			array('siswa.id_jurusan' => 'jurusan.id_jurusan'),
			'JOIN',
			array('siswa.id_siswa' => $id)
		);
		// print_r($data);
		// die();

		$this->template('detailSiswa', array('siswa' => $data[0], 'title' => 'Detail Siswa'));
	}

	public function insert()
	{

		$this->model('siswa');
		$this->model('jurusan');

		$error = array();
		$success = null;

		$data = $this->jurusan->get();

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$nama_lengkap = isset($_POST['nama']) ? $_POST['nama'] : "";
			$nis = isset($_POST['nis']) ? $_POST['nis'] : "";
			$jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : "";
			$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : "";
			$nomor_hp = isset($_POST['nomor_hp']) ? $_POST['nomor_hp'] : "";
			$angkatan = isset($_POST['angkatan']) ? $_POST['angkatan'] : "";
			$status = isset($_POST['status']) ? $_POST['status'] : "";
			$images = isset($_FILES['images']) ? $_FILES['images'] : "";
			$jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : "";

			if (empty($nama_lengkap) || $nama_lengkap == "") {
				array_push($error, "Nama Harus Di Isi");
			}

			if (empty($nis) || $nis == "") {
				array_push($error, "NIS Harus Di Isi");
			}

			if (empty($jenis_kelamin) || $jenis_kelamin == "") {
				array_push($error, "Jenis Kelamin Harus Di Isi");
			}

			if (empty($alamat) || $alamat == "") {
				array_push($error, "Alamat Harus Di Isi");
			}

			if (empty($nomor_hp) || $nomor_hp == "") {
				array_push($error, "Nomor HP Harus Di Isi");
			}

			if (empty($angkatan) || $angkatan == "") {
				array_push($error, "Angkatan Harus Di Isi");
			}

			if (count($error) == 0) {
				$imageName = $images['name'];
				if ($imageName) {
					$imageName = date('d-m-Y') . str_replace(" ", "_", $imageName . '.jpg');

					move_uploaded_file($images['tmp_name'], 'public/images/siswa/' . $imageName);
				}

				$insert = $this->siswa->insert(
					array(
						'id_jurusan'	=>	$jurusan,
						'nama_lengkap'	=>	$nama_lengkap,
						'nis'			=>	$nis,
						'jenis_kelamin'	=>	$jenis_kelamin,
						'alamat'		=>	$alamat,
						'nomor_hp'		=>	$nomor_hp,
						'angkatan'		=>	$angkatan,
						'images'		=>	$imageName,
						'status'		=>	$status
					)
				);

				if ($insert) {
					$success = "Data Berhasil Di Simpan";
				}
			}
		}
		$this->template('frmSiswa', array('error' => $error, 'success'	=>	$success, 'jurusan'	=>	$data, 'title' => 'Tambah Siswa'));
	}

	public function update()
	{

		$this->model('siswa');
		$this->model('jurusan');

		$error = array();
		$success = null;
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$siswa = $this->siswa->getJoin(
			'jurusan',
			array(
				'jurusan.id_jurusan' => 'siswa.id_jurusan'
			),
			'JOIN',
			array('id_siswa' => $id)
		);
		$data = $this->jurusan->get();

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$nama_lengkap = isset($_POST['nama']) ? $_POST['nama'] : "";
			$nis = isset($_POST['nis']) ? $_POST['nis'] : "";
			$jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : "";
			$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : "";
			$nomor_hp = isset($_POST['nomor_hp']) ? $_POST['nomor_hp'] : "";
			$angkatan = isset($_POST['angkatan']) ? $_POST['angkatan'] : "";
			$status = isset($_POST['status']) ? $_POST['status'] : "";
			$images = isset($_FILES['images']) ? $_FILES['images'] : "";
			$jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : "";

			if (empty($nama_lengkap) || $nama_lengkap == "") {
				array_push($error, "Nama Harus Di Isi");
			}

			if (empty($nis) || $nis == "") {
				array_push($error, "NIS Harus Di Isi");
			}

			if (empty($jenis_kelamin) || $jenis_kelamin == "") {
				array_push($error, "Jenis Kelamin Harus Di Isi");
			}

			if (empty($alamat) || $alamat == "") {
				array_push($error, "Alamat Harus Di Isi");
			}

			if (empty($nomor_hp) || $nomor_hp == "") {
				array_push($error, "Nomor HP Harus Di Isi");
			}

			if (empty($angkatan) || $angkatan == "") {
				array_push($error, "Angkatan Harus Di Isi");
			}

			if (count($error) == 0) {
				$imageName = $images['name'];
				$updatArray = array(
					'id_jurusan'	=>	$jurusan,
					'nama_lengkap'	=>	$nama_lengkap,
					'nis'			=>	$nis,
					'jenis_kelamin'	=>	$jenis_kelamin,
					'alamat'		=>	$alamat,
					'nomor_hp'		=>	$nomor_hp,
					'angkatan'		=>	$angkatan,
					'status'		=>	$status
				);

				if ($imageName) {
					$imageName = date('d-m-Y') . str_replace(" ", "_", $imageName);

					unlink('public/images/siswa/' . $siswa[0]->images);
					move_uploaded_file($images['tmp_name'], 'public/images/siswa/' . $imageName);

					$updatArray['images'] = $imageName;
				}

				$update = $this->siswa->update(
					$updatArray,
					array('id_siswa' => $id)
				);

				if ($update) {
					$success = "Data Berhasil Di Simpan";
				}
			}
		}
		$this->template('frmSiswa', array('error' => $error, 'success'	=>	$success, 'jurusan'	=>	$data, 'siswa'	=>	$siswa[0], 'title'	=>	'Edit Siswa'));
	}

	public function delete()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$this->model('siswa');
		$siswa = $this->siswa->getWhere('siswa', array('id_siswa' => $id));
		$images = file_exists('public/images/siswa/' . $siswa[0]->images);
		if ($images) {
			unlink('public/images/siswa/' . $siswa[0]->images);
		}

		$delete = $this->siswa->delete(array('id_siswa' => $id));

		if ($delete) {
			$this->back();
		}
	}
}

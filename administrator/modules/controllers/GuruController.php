<?php 
use \modules\controllers\MainController;
/**
* ini adalah controller dari guru
*/
class GuruController extends MainController
{
	public function index() {
		$this->model('guru');
		$data = $this->guru->get();

		$this->template('guru', array('guru' => $data));
	}

	public function insert() {
		$this->model('guru');

		$error = array();
		$success = null;

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$nama_lengkap = isset($_POST['nama']) ? $_POST['nama'] : "";
			$nip = isset($_POST['nip']) ? $_POST['nip'] : "";
			$jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : "";
			$golongan = isset($_POST['golongan']) ? $_POST['golongan'] : "";
			$nomor_hp = isset($_POST['nomor_hp']) ? $_POST['nomor_hp'] : "";
			$tempat_lahir = isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : "";
			$mata_pelajaran = isset($_POST['mata_pelajaran']) ? $_POST['mata_pelajaran'] : "";
			$images = isset($_FILES['images']) ? $_FILES['images'] : "";
			$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : "";
			$status = isset($_POST['status']) ? $_POST['status'] : "";

			if (empty($nama_lengkap) || $nama_lengkap == "") {
				array_push($error, "Nama Harus Di Isi");
			}

			if (empty($mata_pelajaran) || $mata_pelajaran == "") {
				array_push($error, "Mata Pelajaran Harus Di Isi");
			}

			if (empty($golongan) || $golongan == "") {
				array_push($error, "Golongan Harus Di Isi");
			}

			if (empty($nip) || $nip == "") {
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


			if (count($error) == 0) {
				$imageName = $images['name'];
				if ($imageName) {
					$imageName = date('d-m-Y') . str_replace(" ", "_", $imageName);

					move_uploaded_file($images['tmp_name'], 'public/images/guru/' . $imageName);
				}

				$insert = $this->guru->insert(
					array(
						'nama_lengkap'	=>	$nama_lengkap,
						'nip'			=>	$nip,
						'jenis_kelamin'	=>	$jenis_kelamin,
						'golongan'		=>	$golongan,
						'no_hp'		=>	$nomor_hp,
						'tempat_lahir'	=>	$tempat_lahir,
						'images'		=>	$imageName,
						'status'		=>	$status,
						'alamat'		=>	$alamat,
						'mata_pelajaran'	=>	$mata_pelajaran
					)
				);

				if ($insert) {
					$success = "Data Berhasil Di Simpan";
				}
			}
		}
		$this->template('frmGuru', array('error' => $error, 'success'	=>	$success, 'title' => 'Tambah Guru'));
	}

	public function update() {

		$this->model('guru');

		$error = array();
		$success = null;

		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$guru = $this->guru->getWhere(array('id_guru' => $id));

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$nama_lengkap = isset($_POST['nama']) ? $_POST['nama'] : "";
			$nip = isset($_POST['nip']) ? $_POST['nip'] : "";
			$jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : "";
			$golongan = isset($_POST['golongan']) ? $_POST['golongan'] : "";
			$nomor_hp = isset($_POST['nomor_hp']) ? $_POST['nomor_hp'] : "";
			$tempat_lahir = isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : "";
			$mata_pelajaran = isset($_POST['mata_pelajaran']) ? $_POST['mata_pelajaran'] : "";
			$images = isset($_FILES['images']) ? $_FILES['images'] : "";
			$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : "";
			$status = isset($_POST['status']) ? $_POST['status'] : "";

			if (empty($nama_lengkap) || $nama_lengkap == "") {
				array_push($error, "Nama Harus Di Isi");
			}

			if (empty($mata_pelajaran) || $mata_pelajaran == "") {
				array_push($error, "Mata Pelajaran Harus Di Isi");
			}

			if (empty($golongan) || $golongan == "") {
				array_push($error, "Golongan Harus Di Isi");
			}

			if (empty($nip) || $nip == "") {
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
			if (count($error) == 0) {
				$imageName = $images['name'];
				$updatArray = array(
						'nama_lengkap'	=>	$nama_lengkap,
						'nip'			=>	$nip,
						'jenis_kelamin'	=>	$jenis_kelamin,
						'golongan'		=>	$golongan,
						'no_hp'	    	=>	$nomor_hp,
						'tempat_lahir'	=>	$tempat_lahir,
						'status'		=>	$status,
						'alamat'		=>	$alamat,
						'mata_pelajaran'	=>	$mata_pelajaran
					);

					if ($imageName) {
					$imageName = date('d-m-Y') . str_replace(" ", "_", $imageName);
					
					unlink('public/images/guru/' . $guru[0]->images);
					move_uploaded_file($images['tmp_name'], 'public/images/guru/' . $imageName);

					$updatArray = array(
						'nama_lengkap'	=>	$nama_lengkap,
						'nip'			=>	$nip,
						'jenis_kelamin'	=>	$jenis_kelamin,
						'golongan'		=>	$golongan,
						'no_hp'	    	=>	$nomor_hp,
						'tempat_lahir'	=>	$tempat_lahir,
						'status'		=>	$status,
						'alamat'		=>	$alamat,
						'mata_pelajaran'	=>	$mata_pelajaran,
						'images'	=>	$imageName
					);
			}
			$update = $this->guru->update(
					$updatArray, array('id_guru' => $id)
				);

				if ($update) {
					$success = "Data Berhasil Di Simpan";
				}
		    }
		}
		 $this->template('frmGuru', array('error' => $error, 'success'	=>	$success, 'guru'	=>	$guru[0], 'title'	=>	'Edit Guru'));
	}

	public function delete() {
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$this->model('guru');
		$guru = $this->guru->getWhere('guru', array('id_guru' => $id));
		$images = file_exists('public/images/guru/' .$guru[0]->images);
		if ($images) {
			unlink('public/images/guru/' . $guru[0]->images);
		}

		$delete = $this->guru->delete(array('id_guru' => $id));

		if ($delete) {
			$this->back();
		}
	}

	public function detail() {
		$id = isset($_GET['id']) ? $_GET['id'] : 0;

		$this->model('guru');

		$data = $this->guru->getWhere(array('id_guru' => $id));

		$this->template('detailGuru', array('guru' => $data[0], 'title' => 'Detail Guru'));
	}
}
 ?>
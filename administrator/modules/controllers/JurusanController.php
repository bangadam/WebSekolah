<?php 
use \modules\controllers\MainController;
/**
* ini adalah controller jurusan
*/
class JurusanController extends MainController
{
	public function index() {
		$this->model('jurusan');

		$data = $this->jurusan->get();

		$this->template('jurusan', array('jurusan' => $data));
	}

	public function insert() {
		$this->model('jurusan'); 
		
		$error = array();
		$success = null;

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : "";

			if (empty($jurusan) || $jurusan == "") {
				array_push($error, "Nama Jurusan Tidak Boleh Kosong");
			}

			if (count($error) == 0) {
				$insert = $this->jurusan->insert(array('nama_jurusan' => $jurusan));
				if ($insert) {
					$success = "Data Berhasil Di Simppan";
				}
			}
		}

		$this->template('frmJurusan', array('error' => $error, 'success' => $success));
	}

	public function update() {
		$this->model('jurusan');

		$error = array();
		$success = null;
		
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$data = $this->jurusan->getWhere(array('id_jurusan' => $id));
		//cek jika kosong
		if (count($data) == 0) {
			$this->redirect(PATH . '?page=jurusan');
		}

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : "";

			if (empty($jurusan) || $jurusan == "") {
				array_push($error, "Nama Jurusan Tidak Boleh Kosong");	
			}

			if (count($error) == 0) {
				$updateArrayData = array('nama_jurusan' => $jurusan);
				$update = $this->jurusan->update(
					$updateArrayData, array('id_jurusan' => $id)
				);

				if ($update) {
					$success = "Data Berhasi Di Simpan";
				}			
			}			
		}

		$this->template('frmJurusan', array('error'	=>	$error, 'success' => $success, 'jurusan' => $data[0]));
	}
}
 ?>
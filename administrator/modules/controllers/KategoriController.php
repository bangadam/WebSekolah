<?php 
use \modules\controllers\MainController;
/**
* ini adalah controller dari kategori
*/
class KategoriController extends MainController
{
	public function index() {
		$this->model('kategori');

		$data = $this->kategori->get();

		$this->template('kategori', array('kategori' => $data));
	}

	public function delete() {
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$this->model('kategori');

		$data = $this->kategori->delete(array('id_kategori' => $id));

		if ($data) {
			$this->back();
		}
	}

	public function insert() {
		$this->model('kategori');

		$error = array();
		$success = null;

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			
			$kategori = isset($_POST['kategori']) ? $_POST['kategori'] : "";
			
			if (empty($kategori) || $kategori == "") {
				array_push($error, "Kategori artikel harus di isi");
			}

			if (count($error) == 0) {
				$insert = $this->kategori->insert(
					array("nama_kategori" => $kategori)
				);

				if ($insert) {
					$success = "Data Berhasil Di simpan.";
				}
			}
		}

		$this->template("frmKategori", array('error' => $error, 'success' => $success));
	}

	public function update() {
		$this->model('kategori');
		
		$error = array();
		$success = null;

		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$data = $this->kategori->getWhere(array(
			'id_kategori'	=>	$id
		));
			
		if (count($data) == 0) {
			 $this->redirect(PATH . '?page=kategori');
		}

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			
			$kategori = isset($_POST['kategori']) ? $_POST['kategori'] : "";
			if (empty($kategori) || $kategori == "") {
				array_push($error, "Kategori artikel harus di isi");
			}

			$updateArrayData = array('nama_kategori' => $kategori);

			if (count($error) == 0) {
				
				$update = $this->kategori->update(
					$updateArrayData, array('id_kategori' => $id)
				);

				if ($update) {
					$success = "Data Berhasil Di simpan.";
				}
			}
		}

		$this->template("frmKategori", array('error' => $error, 'success' => $success, 'title' => "Update Kategori", 'kategori' => $data[0]));
	}
}
 ?>
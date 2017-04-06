<?php 
use \modules\controllers\MainController;
/**
* ini adalah controller dari tentang
*/
class TentangController extends MainController
{
	public function index() {
		$this->model('tentang');
		$data = $this->tentang->getWhere(array('id_tentang' => 1));
	
		$error = array();
		$success = null;

		if($_SERVER['REQUEST_METHOD'] == "POST") {
			$tentang = isset($_POST['tentang']) ? $_POST['tentang'] : "";

			if(empty($tentang) || $tentang == "") {
				array_push($error, 'Data Tidak boleh Kosong');
			}
	
			if(count($error) == 0) {
				$insert = $this->tentang->update(
					array(
						'isi' => $tentang
					),
					array('id_tentang' => 1)
				);

				if($insert) {
					$success = "Data Berhasil Di Simpan";
				}
			}
		}

		$this->template('tentang', array('tentang' => $data[0], 'title' => 'Edit Tentang', 'error' => $error, 'success' => $success));
	}
}
 ?>
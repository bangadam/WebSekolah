<?php 
use \modules\controllers\MainController;

/**
* ini adalah controller dari kontak
*/
class KontakController extends MainController
{
	public function index() {
		$this->model('kontak');

		$data = $this->kontak->get();

		$this->template('kontak', array('kontak' => $data));

	}

	public function delete() {
		$this->model('kontak');

		$id = isset($_GET['id']) ? $_GET['id'] : 0;

		$data = $this->kontak->delete(array('id_kontak' => $id));

		if($data) {
			$this->back();
		}
	}

	// public function insert() {
	// 	$this->model('kontak');

	// 	$data = 50;
	// 	for ($i=0; $i <= $data ; $i++) { 
	// 		$insert = $this->kontak->insert([
	// 			'nama_lengkap' => 'anonim_' . $i,
	// 			'email'		   => 'anonim_' . $i . '@mail.com',
	// 			'website'	   => 'anonim_' . $i . 'com',
	// 			'isi'		   =>  'nice_' . $i
	// 		]);
	// 	}

	// 	echo "berhasil insert" . $data . 'data';
	// }

}
 ?>
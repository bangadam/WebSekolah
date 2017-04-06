<?php 
use \modules\controllers\MainController;

/**
* ini adalah controller dari bukutamu
*/
class BukutamuController extends MainController
{
	public function index() {
		$this->model('bukutamu');

		$data = $this->bukutamu->get();

		$this->template('bukutamu', array('bukutamu' => $data));
	}

	public function delete() {
		$id = isset($_GET['id']) ? $_GET['id'] : 0 ;
		$this->model('bukutamu');
		$delete =  $this->bukutamu->delete(array('id_bukutamu' => $id));

		if ($delete) {
			$this->back();
		}
	}
}
 ?>
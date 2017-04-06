<?php 
use \modules\controllers\MainController;

/**
* ini adalah controller dari detailguru
*/
class DetailguruController extends MainController
{
	public function index() {
		$id = isset($_GET['id']) ? $_GET['id'] : '0';

		$this->model('guru');

		$data = $this->guru->getWhere(array('id_guru' => $id));

		$this->template('detailguru', array('guru' => $data));
	}
}

 ?>
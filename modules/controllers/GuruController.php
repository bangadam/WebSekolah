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

}
 ?>
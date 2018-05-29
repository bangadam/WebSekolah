<?php
/**
* ini adalah controller Home
*/
use \modules\controllers\MainController;

class HomeController extends MainController
{
	public function index() {
		$this->model('artikel'); // Memanggil model artikel
		$data = $this->artikel->get(array('limit' => '0,5')); // mendapatkan datapada model artikel

		// view home yang sudah dimasukkan kedalam template
		$this->template('home', array('artikel' => $data));

	}
}
 ?>
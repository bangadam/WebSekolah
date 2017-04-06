<?php 
/**
* ini adalah controller Home
*/
use \modules\controllers\MainController;

class HomeController extends MainController
{
	public function index() {
		$data = $_SESSION['login'];
		$this->model('bukutamu');
		$this->model('artikel');
		$this->model('guru');
		$this->model('kontak');
		$this->template('home', array(
			'userData' 	=> 	$data,
				'total'	=>	array(
					'artikel' 	=>	$this->bukutamu->rows(),
					'bukutamu'	=>	$this->artikel->rows(),
					'guru'		=>	$this->guru->rows(),
					'kontak'	=>	$this->kontak->rows()
				)
		));
	}
}
 ?>
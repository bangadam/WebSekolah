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

	public function detail() {
		$id = isset($_GET['id']) ? $_GET['id'] : "0";

		$this->model('kategori');
		$this->model('artikel');

		$kategori = $this->kategori->getWhere(array('id_kategori'	=>	$id));

		$artikel = $this->artikel->getWhere(array('id_kategori'	=>	$id));

		$this->template('detailkategori', array(
				'kategori'	=>	$kategori,
				'artikel'	=>	$artikel
			)
		);
	}
}
 ?>
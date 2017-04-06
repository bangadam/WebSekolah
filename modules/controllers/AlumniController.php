<?php 
use \modules\controllers\MainController;

/**
* ini adalah controller alumni
*/
class AlumniController extends MainController
{
	public function index() {
		$this->model('siswa');

		$data = $this->siswa->getJoin('jurusan', 
			array(
				'jurusan.id_jurusan' => 'siswa.id_jurusan'
			),
			'JOIN',
			array(
				'status' => "Alumni"
			)
		);

		$this->template('alumni', array('alumni' => $data));
	}
}
 ?>
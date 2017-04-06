<?php 
use \modules\controllers\MainController;

/**
* ini adalah controller siswa
*/
class SiswaController extends MainController
{
	public function index() {
		$this->model('siswa');

		$data = $this->siswa->getJoin('jurusan', 
			array(
				'jurusan.id_jurusan' => 'siswa.id_jurusan'
			),
			'JOIN',
			array(
				'status' => "Siswa"
			)
		);

		$this->template('siswa', array('siswa' => $data));
	}

	public function detail() {
		$id = isset($_GET['id']) ? $_GET['id'] : '0';

		$this->model('siswa');

		$data = $this->siswa->getJoin('kelas', 
			array(
				'kelas.id_kelas' => 'siswa.id_kelas'
			),
			'JOIN',
			array(
				'id_siswa' => $id
			)
		);

		$this->template('detailsiswa', array('siswa' => $data));
	}
}

 ?>
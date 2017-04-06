<?php 

use \modules\controllers\MainController;

/**
* ini adalah controller bukutamu
*/
class BukutamuController extends MainController
{
	public function index() {
		$error = array();
		$success = null;
		$this->model('bukutamu'); // memanggil model buku tamu

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$name = isset($_POST['name']) ? $this->validate($_POST['name']) : "";
			$email = isset($_POST['email']) ? $this->validate($_POST['email']) : "";
			$website = isset($_POST['website']) ? $this->validate($_POST['website']) : "";
			$comment = isset($_POST['comment']) ? $this->validate($_POST['comment']) : "";
			// die($comment);
			
			if (empty($name) || $name == "") {
				array_push($error, "Nama Harus Di isi.");
			}

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				array_push($error, "Format Email Salah.");
			}

			if (empty($comment) || $comment == "") {
				array_push($error, "Komentar Harus Di isi.");
			}
			if (count($error) == 0) {
				$insert = $this->bukutamu->insert(array(
					'full_name' => 	$name,
					'email' 	=>	$email,
					'website'	=>	$website,
					'comment'	=>	$comment
				));
				$success = "Data Berhasil Disimpan";
			}
		}

		$bukutamu = $this->bukutamu->get();
		$total   = $this->bukutamu->rows();
		$this->template('bukutamu', array(
						'error' => $error, 
						'success' => $success,
						'bukutamu'	=>	$bukutamu,
						'total'	=>	$total
						));
	}
}

 ?>
<?php 
use \modules\controllers\MainController;

/**
* ini adalah controllers dari user
*/
class UserController extends MainController
{
	public function index() {
		$this->model('user');

		$data = $this->user->get();

		$this->template('user', array('user' => $data, 'title' => 'Data User'));
	}

	public function insert() {
		$this->model('user');

		$error = array();
		$success = null;

		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$nama_lengkap = isset($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : "";
			$email = isset($_POST['email']) ? $_POST['email'] : "";
			$images = isset($_FILES['images']) ? $_FILES['images'] : "";
			$no_hp = isset($_POST['no_hp']) ? $_POST['no_hp'] : "";
			$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : "";
			$username = isset($_POST['username']) ? $_POST['username'] : "";
			$password = isset($_POST['password']) ? $_POST['password'] : "";
			$repassword = isset($_POST['repassword']) ? $_POST['repassword'] : "";

			if (empty($nama_lengkap) || $nama_lengkap == "") {
				array_push($error, 'Nama tidak boleh kosong');
			}

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				array_push($error, 'Format email salah');
			}

			if (empty($email) || $email == "") {
				array_push($error, 'Email tidak boleh kosong');
			}

			if (empty($no_hp) || $no_hp == "") {
				array_push($error, 'No Hp tidak boleh kosong');
			}

			if (empty($alamat) || $alamat == "") {
				array_push($error, 'Alamat tidak boleh kosong');
			}

			if (empty($username) || $username == "") {
				array_push($error, 'Username tidak boleh kosong');
			}

			if (empty($password) || $password == "") {
				array_push($error, 'Password tidak boleh kosong');
			}

			if ($password != $repassword) {
				array_push($error, 'Password tidak sama');
			}

			if (count($error) == 0) {
				$imageName = $images['name'];
				if ($imageName) {
					$imageName = date('d-m-Y') . str_replace('', '_', $imageName);

					move_uploaded_file($images['tmp_name'], 'public/images/user/' . $imageName);
				}

				$insert = $this->user->insert([
					'nama_lengkap' 	=> 	$nama_lengkap,
					'email'			=>	$email,
					'username'		=>	$username,
					'password'		=>	md5($password),
					'alamat'		=>	$alamat,
					'no_hp'			=>	$no_hp,
					'images'		=>	$imageName
				]);

				if ($insert) {
					$success = "Data berhasil di simpan";
				}
			}
		}
		$this->template('frmUser', array('error' => $error, 'success' => $success, 'title' => 'Tambah User'));
	}

	public function delete() {
		$this->model('user');
		$success = null;
		$id = isset($_GET['id']) ? $_GET['id'] : 0;

		// if (!$id) {
		// 	echo "gagal";
		// }

		$delete = $this->user->delete(array('id_user'));

		if ($delete) {
			$this->back();
		}
	}

	public function detail() {
		$this->model('user');

		$id = isset($_GET['id']) ? $_GET['id'] : 0;

		$data = $this->user->getWhere(array('id_user' => $id));

		$this->template('detailUser', array('user' => $data[0], 'title' => 'Detail User'));
				
	}

	public function update() {
		$this->model('user');
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$data = $this->user->getWhere(array('id_user' => $id));

		$error = array();
		$success = null;

		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$nama_lengkap = isset($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : "";
			$email = isset($_POST['email']) ? $_POST['email'] : "";
			$images = isset($_FILES['images']) ? $_FILES['images'] : "";
			$no_hp = isset($_POST['no_hp']) ? $_POST['no_hp'] : "";
			$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : "";
			$username = isset($_POST['username']) ? $_POST['username'] : "";
			$password = isset($_POST['password']) ? $_POST['password'] : "";
			$repassword = isset($_POST['repassword']) ? $_POST['repassword'] : "";

			if (empty($nama_lengkap) || $nama_lengkap == "") {
				array_push($error, 'Nama tidak boleh kosong');
			}

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				array_push($error, 'Format email salah');
			}

			if (empty($email) || $email == "") {
				array_push($error, 'Email tidak boleh kosong');
			}

			if (empty($no_hp) || $no_hp == "") {
				array_push($error, 'No Hp tidak boleh kosong');
			}

			if (empty($alamat) || $alamat == "") {
				array_push($error, 'Alamat tidak boleh kosong');
			}

			if (empty($username) || $username == "") {
				array_push($error, 'Username tidak boleh kosong');
			}

			if (empty($password) || $password == "") {
				array_push($error, 'Password tidak boleh kosong');
			}

			if ($password != $repassword) {
				array_push($error, 'Password tidak sama');
			}

			if (count($error) == 0) {

				$arrayData = array(
					'nama_lengkap' 	=> 	$nama_lengkap,
					'email'			=>	$email,
					'username'		=>	$username,
					'password'		=>	md5($password),
					'alamat'		=>	$alamat,
					'no_hp'			=>	$no_hp,
				);
				// Upload Gambar
				$imageName = $images['name'];
				if ($imageName) {
					$imageName = date('d-m-Y') . str_replace('', '_', $imageName);

					unlink('public/images/user/' . $data[0]->images);
					move_uploaded_file($images['tmp_name'], 'public/images/user/' . $imageName);

					$arrayData["images"] = $imageName;
				}

				if (isset($password) && $password != "") {
					if ($repassword == "" || $password != $repassword) {
						array_push($error, "Password dan Re-Type Password Harus Sama");
					}else {
						$arrayData['password'] = md5($password);
					}
				}

				$update = $this->user->update(
					$arrayData, 
					array('id_user' => $id)					
				);

				if ($update) {
					$success = "Data berhasil di simpan";
				}
			}
		}
		$this->template('frmUser', array('error' => $error, 'success' => $success, 'title' => 'Edit User', 'user' => $data[0]));	
	}
}

 ?>
<?php 
/**
* ini adalah controller dari login
*/
class LoginController extends Controller 
{
	public function index() {
		
		$login = isset($_SESSION['login']) ? $_SESSION['login'] : "";
		if ($login) {
			$this->redirect("index.php");
		}

		$message = array();

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$message = array(
				'success'	=>	false,
				'message'	=>	'Maaf Username/Password Salah.'
			);

			$username = isset($_POST['username']) ? $_POST['username'] : "";
			$password = isset($_POST['password']) ? $_POST['password'] : "";
			
			$this->model('user');

			$user = $this->user->getWhere(array(
					'username'	=>	$username,
					'password'	=>	md5($password)
				)
			);

			if (count($user) > 0) {
				$message = array(
					'success'	=>	true,
					'message'	=>	'Selamat Anda Berhasil Login.'
				);

				$_SESSION['login'] =  $user[0];

				echo '<meta http-equiv="refresh" content="1;url=index.php">';
			}
		}

		$view = $this->view('login')->bind('message', $message);
	}

	public function logout() {
		unset($_SESSION['login']);
		$this->redirect('index.php');
	}
}
 ?>
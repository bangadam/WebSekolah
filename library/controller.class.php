<?php 
/**
* ini adalah class untuk controller
*/
class Controller
{
	public function view($viewName) {
		$view = new View($viewName);
		return $view;
	}

	public function model($modelName) {
		require_once ROOT . DS . 'modules' . DS . 'models' . DS . $modelName . 'Model.php';

		$className = ucfirst($modelName) . 'Model';
		$this->$modelName = new $className(); 
	}

	protected function template($viewName, $data = array()) {
		$view = $this->view('template');

		$view->bind('viewName', $viewName);
		$view->bind('data', $data);
	}

	public function back() {
		echo "<script>history.go(-1);</script>";
	}

	public function redirect($url = "") {
		header("Location:" . $url);
	}

	public function validate($data) {
		return htmlentities(trim(strip_tags($data)));
	}
}

 ?>
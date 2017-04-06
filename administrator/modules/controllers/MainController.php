<?php
namespace modules\controllers;
use \Controller;

class MainController extends Controller {
    protected $login;

    public function __construct() {
        $this->login = isset($_SESSION['login']) ? $_SESSION['login'] : "";

        if (!$this->login) {
            
            $this->redirect(SITE_URL . "?page=login");
        }
    }

    protected function template($viewName, $data = array()) {
        $view = $this->view('template');
        $view->bind('viewName', $viewName);
        $view->bind('data', array_merge($data, array('login' => $this->login)));
    }
}
?>
<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {

	public function loginAction() {
		$this->view->layout = 'admin';
		if (!empty($_POST)) {
			if (!$this->model->validate(['login', 'password'], $_POST)) {
				$this->view->message('error', $this->model->error, 1);
			}
			elseif (!$this->model->checkData($_POST['login'], $_POST['password'])) {
				$this->view->message('error', 'Логин или пароль указан неверно', 1);
			}			
			$this->model->login($_POST['login']);			
			$this->view->location('formtasks');
		}	
		$this->view->render("Вход");	
	}

	public function logoutAction() {
		unset($_SESSION['account']);
		$this->view->redirect('formtasks');
	}

}
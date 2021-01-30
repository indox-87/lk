<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;

class MainController extends Controller {

	public function indexAction() {		
		$pagination = new Pagination($this->route, $this->model->tasksCount());
		$user = 0;
		if(!empty($_SESSION['account'])) $user = 1;
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $this->model->tasksList($this->route),
			'authorize' => $user
		];		
		$this->view->render("Главная", $vars);

	}
	public function formtasksAction() {
		$vars = ["authorize" => 0];
		if(!empty($_SESSION['account'])) $vars = ["authorize" => 1];
		$this->view->render("Добавить задачу", $vars);

	}
	public function editAction() {
		$authorize = $_SESSION['account'] ? 1 : 0 ;			
		$vars = [
			'list' => $this->model->task($this->route),
			"authorize" => 	$authorize
		];
		$this->view->render("Редактирование", $vars);

	}
	public function edittasksAction() {		
		if (!empty($_POST)) {
			if($this->model->mb_strlen_count($_POST['tasks']) < 3)	{			
				$this->view->message('error', "Минимальное кол-во символов для ввода: 3", 1);
			}			
			$this->model->updatetasks($_POST);
			$this->view->message('success', 'Задача успешно обновлена');
			
		}

	}
	public function addtasksAction() {			
		if (!empty($_POST)) {

			if (!$this->model->validate(['email'], $_POST)) {
				$this->view->message('error', $this->model->error, 1);
			}					
			
			$this->model->addtasks($_POST);				
			$this->view->message('success', 'Задача успешно добавлена');
		}

	}
	public function sorttasksAction() {			
		if (!empty($_POST)) {
			$id = $_POST['id'];			
			$_SESSION['sort_val'][$id] = $_SESSION['sort_val'][$id] ? ($_SESSION['sort_val'][$id] == 1 ? 2 : 1) : 2;
			$_SESSION['sort_id'] = $id;
			exit(json_encode(['result' => 0 ]));
		}

	}

}
<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

	public function tasksList($route) {
		if(!empty($_SESSION['sort_val'][$_SESSION['sort_id']]) && !empty($_SESSION['sort_id']) ){			
			$sort = $this->sort_val($_SESSION['sort_val'][$_SESSION['sort_id']]);
			$value = $this->sort_id($_SESSION['sort_id']);
		}
		else{
			$sort = 'DESC';
			$value = 'id';	
		}		
		
		$max = 3;
		$start = ((($route['page'] ?? 1) - 1) * $max);		
		return $this->db->row('SELECT * FROM `tasks` ORDER BY '.$value.' '.$sort.' LIMIT '.$start.', '.$max.'', $params);
	}

	public function task($route) {
		$params = [			
			'id' => $route['page']			
		];				
		return $this->db->row('SELECT `id`, `tasks`, `status`, `admin_edit` FROM `tasks` WHERE id = :id', $params);
	}

	public function tasksCount() {		
		return $this->db->column('SELECT COUNT(id) FROM `tasks`');
	}	

	public function validate($input, $post) {
		$rules = [
			'email' => [
				'pattern' => '#^([a-z0-9_.-]{1,20}+)@([a-z0-9_.-]+)\.([a-z\.]{2,10})$#',
				'message' => 'E-mail адрес указан неверно',
			]
			
		];
		foreach ($input as $val) {
			if (!isset($post[$val]) or !preg_match($rules[$val]['pattern'], $post[$val])) {
				$this->error = $rules[$val]['message'];
				return false;
			}
		}
		if($this->mb_strlen_count($post['name']) < 3 ||  $this->mb_strlen_count($post['tasks']) < 3)	{
			$this->error = 'Минимальное кол-во символов для ввода: 3';
				return false;

		}	
		return true;
	}

		public function addtasks($post) {			
		$params = [			
			'email' => $post['email'],
			'fio' => htmlspecialchars($post['name'], ENT_QUOTES),
			'tasks' => htmlspecialchars($post['tasks'], ENT_QUOTES)		
		];		
		$this->db->query('INSERT INTO `tasks` (email, fio, tasks) VALUES (:email, :fio, :tasks)', $params);	
		
	}

	public function updatetasks($post) {
		$status = $post["status"] ? 1 : 0;
		$params = [				
			'tasks' => htmlspecialchars($post['tasks'], ENT_QUOTES),
			'status' => $status,
			'id' => (int) $post['id']
		];		
		$this->db->query('UPDATE `tasks` SET tasks = :tasks, status = :status, admin_edit = 1  WHERE id = :id', $params);	
		
	}
	public function mb_strlen_count($data)
		{
		    $data = mb_strlen($data, 'utf-8');
		    return $data;
		}
	public function sort_val($data)
		{
		    switch ($data) {
		    case '1':
		      $sort = "DESC";
		       break;
		    case '2':
		      $sort = "ASC";
		      break;	    
		    default:
		      $sort = 'DESC';
			}
			return $sort;
		}
		public function sort_id($data)
		{
		    switch ($data) {
		    case '1':
		      $sort = "fio";
		       break;
		    case '2':
		      $sort = "email";
		      break;
		      case '3':
		      $sort = "status";
		      break;	    
		    default:
		      $sort = 'id';
			}
			return $sort;
		}
		
	

}
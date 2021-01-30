<?php

namespace application\models;

use application\core\Model;

class Account extends Model {

	public function validate($input, $post) {
		$rules = [			
			'login' => [
				'pattern' => '#^[a-z0-9]{2,15}$#',
				'message' => 'Логин указан неверно (разрешены только латинские буквы и цифры от 2 до 15 символов',
			],
			'password' => [
				'pattern' => '#^[a-z0-9]{2,30}$#',
				'message' => 'Пароль указан неверно (разрешены только латинские буквы и цифры от 2 до 30 символов',

			],
		];
		foreach ($input as $val) {
			if (!isset($post[$val]) or !preg_match($rules[$val]['pattern'], $post[$val])) {
				$this->error = $rules[$val]['message'];
				return false;
			}
		}		
		return true;
	}	

	public function checkData($login, $password) {
		$params = [
			'login' => $login,
		];
		$hash = $this->db->column('SELECT `password` FROM `accounts` WHERE login = :login', $params);
		if (!$hash or !password_verify($password, $hash)) {
			return false;
		}
		return true;
	}


	public function login($login) {
		$params = [
			'login' => $login,
		];
		$data = $this->db->row('SELECT * FROM `accounts` WHERE login = :login', $params);		
		$_SESSION['account'] = $data[0];
	}



}
<?php

namespace Models\Admin;

use Nette;

class User extends Base
{
	public function addUser($values)
	{
		return $this->database->query(
			'INSERT INTO users(login, pass, role) VALUES (?, MD5(?), ?)',
			$values->login, $values->pass, $values->role);
	}

	public function deleteUser($id)
	{
		return $this->database->query('DELETE FROM users WHERE id = ?', $id);
	}

	public function getAll()
	{
		return $this->database->table('users')->fetchAll();
	}

	public function getRoles()
	{
		$result_arr = array();
		$result_arr[1] = "guest";
		$result_arr[2] = "admin";
		return $result_arr;
	}
}

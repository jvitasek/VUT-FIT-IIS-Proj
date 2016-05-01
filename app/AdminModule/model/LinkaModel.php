<?php

namespace Models\Admin;

use Nette;

class Linka extends Base
{
	public function addLinka($values)
	{
		return $this->database->query(
			'INSERT INTO linka(typ, jmeno, cislo) VALUES (?, ?, ?)',
			$values->type, $values->name, $values->number);
	}

	public function deleteLinka($id)
	{
		return $this->database->query('DELETE FROM linka WHERE id = ?', $id);
	}

	public function getAll()
	{
		return $this->database->table('linka')->order('cislo ASC')->fetchAll();
	}

	public function getAllArr()
	{
		$result_arr = array();
		$results = $this->database->table('linka')->fetchAll();
		foreach($results as $result)
		{
			$result_arr[$result->id] = '(' . $result->cislo . ') ' . $result->jmeno; 
		}
		return $result_arr;
	}

	public function addPoradi($values)
	{
		return $this->database->query(
			'UPDATE linka_x_zastavka SET poradi = ? WHERE id = ?',
			$values->poradi, $values->cross_id);
	}

	public function addLinkaCasy($values)
	{
		return $this->database->query(
			'INSERT INTO casy_linek (id_linky, cas) VALUES (?, ?)',
			$values->id_linky, $values->cas
		);
	}

	public function getLinkaCasy($id)
	{
		return $this->database->table('casy_linek')->where('id_linky', $id)->fetchAll();
	}

	public function deleteCas($id)
	{
		return $this->database->query('DELETE FROM casy_linek WHERE id = ?', $id);
	}
}

<?php

namespace Models\Admin;

use Nette;

class Stops extends Base
{
	public function addStop($values)
	{
		return $this->database->query(
			'INSERT INTO zastavka(jmeno, gps, bezbarierovost) VALUES (?, ?, ?)',
			$values->name, $values->gps, $values->bezbar);
	}

	public function deleteStop($id)
	{
		return $this->database->query('DELETE FROM zastavka WHERE id = ?', $id);
	}

	public function getAll()
	{
		return $this->database->table('zastavka')->order('jmeno ASC')->fetchAll();
	}

	public function getAllStops()
	{
		$result_arr = array();
		$results = $this->database->table('zastavka')->order('jmeno ASC')->fetchAll();
		foreach($results as $result)
		{
			$result_arr[$result->id] = $result->jmeno; 
		}
		return $result_arr;
	}
}

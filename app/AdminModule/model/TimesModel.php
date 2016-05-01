<?php

namespace Models\Admin;

use Nette;

class Times extends Base
{
	public function addTime($values)
	{
		return $this->database->query(
			'INSERT INTO casy(id_zastavky_1, id_zastavky_2, doba) VALUES (?, ?, ?)',
			$values->stop1, $values->stop2, $values->time);
	}

	public function deleteTime($id)
	{
		return $this->database->query('DELETE FROM casy WHERE id = ?', $id);
	}

	public function getAll()
	{
		return $this->database->query(
			'SELECT casy.id, zast1.jmeno AS jmeno1, zast2.jmeno AS jmeno2, casy.doba FROM casy
			LEFT JOIN zastavka AS zast1
			ON casy.id_zastavky_1 = zast1.id
			LEFT JOIN zastavka AS zast2
			ON casy.id_zastavky_2 = zast2.id
			ORDER BY jmeno1 ASC'
		);
	}
}

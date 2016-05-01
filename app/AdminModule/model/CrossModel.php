<?php

namespace Models\Admin;

use Nette;

class Cross extends Base
{
	public function addCross($values)
	{
		// nejdrive smazat vsechno co se tyka dane linky
		$this->database->query('DELETE FROM linka_x_zastavka WHERE id_linky = ?', $values->linka);

		// pote zacit pridavat
		foreach($values->stops as $stop)
		{
			$this->database->query(
				'INSERT INTO linka_x_zastavka (id_linky, id_zastavky) VALUES (?, ?)',
				$values->linka, $stop
			);
		}
	}

	public function deleteCross($id)
	{
		return $this->database->query('DELETE FROM linka_x_zastavka WHERE id = ?', $id);
	}

	public function getAll($id)
	{
		return $this->database->query(
			'SELECT
				l_x_z.id AS cross_id,
				zastavka.id AS zas_id,
				zastavka.jmeno AS zas_jmeno,
				zastavka.gps AS zas_gps,
				linka.id AS linka_id,
				linka.jmeno AS link_jmeno,
				linka.cislo AS link_cislo
			FROM
				linka_x_zastavka AS l_x_z
			LEFT JOIN
				zastavka ON l_x_z.id_zastavky = zastavka.id
			LEFT JOIN
				linka ON l_x_z.id_linky = linka.id
			WHERE l_x_z.id_linky = ?', $id)->fetchAll();
	}

	public function getName($id)
	{
		return $this->database->table('linka')->get($id);
	}

	public function getPoradi($cross_id)
	{
		return $this->database->table('linka_x_zastavka')->get($cross_id)->poradi;
	}
}

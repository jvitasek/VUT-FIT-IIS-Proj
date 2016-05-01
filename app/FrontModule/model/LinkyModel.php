<?php

namespace Models;

use Nette;


class Linky extends Base
{
	public function getAll()
	{
		$result_arr = array();
		$results = $this->database->table('linka')->order('cislo ASC')->fetchAll();
		return $results;
	}
}

<?php

namespace Models;

use Nette;


class Stops extends Base
{
	public function getAllStops()
	{
		$result_arr = array();
		$results = $this->database->table('zastavka')->fetchAll();
		foreach($results as $result)
		{
			$result_arr[$result->id] = $result->jmeno; 
		}
		return $result_arr;
	}

	public function getAllStopsI()
	{
		return $this->database->table('zastavka')->order('jmeno ASC')->fetchAll();
	}

	public function getResults($values)
	{
		$values->from;
		$values->to;
		$values->time;

		/**	
		 * Ziskame vsechny linky stavici na prvni a posledni zastavce.
		 */
		$linka_id = $this->database->query(
			'SELECT lxz1.id_linky FROM linka_x_zastavka AS lxz1
			LEFT JOIN linka_x_zastavka AS lxz2 ON lxz1.id_linky = lxz2.id_linky
			WHERE lxz1.id_zastavky = ? AND lxz2.id_zastavky = ?
			ORDER BY lxz1.poradi ASC',
			$values->from, $values->to)->fetchAll();

		// linka nenalezena
		if($linka_id == NULL)
		{
			return FALSE;
		}
		

		$casy = array();
		/**
		 * Ziskame vsechny casy vsech ziskanych linek.
		 */
		foreach($linka_id as $linka)
		{
			$curr = $this->database->query(
				'SELECT cas FROM casy_linek WHERE id_linky = ? AND cas > ? ORDER BY cas ASC', $linka->id_linky, $values->time
			)->fetchAll();
			if($curr != NULL)
			{
				$casy[$linka->id_linky] = array();
				array_push($casy[$linka->id_linky], $curr);
				//$casy[$linka->id_linky] = $curr;
			}
		}

		$results = array();
		/**
		 * @todo vytahnout z linky zastavky a projizdet je!
		 */
		foreach($casy as $linka => $cas)
		{
			/**
			 * nejprve vytahneme poradi prvni a posledni zastavky
			 */
			$poradi_prvni = $this->database->query(
				'SELECT poradi FROM linka_x_zastavka WHERE id_linky = ? AND id_zastavky = ?',
				$linka, $values->from
			)->fetch()->poradi;

			$poradi_posledni = $this->database->query(
				'SELECT poradi FROM linka_x_zastavka WHERE id_linky = ? AND id_zastavky = ?',
				$linka, $values->to
			)->fetch()->poradi;


			/**
			 * pote si vytahneme vsechny zastavky linky v zadanem rozsahu
			 */
			$zastavky = $this->database->query(
				'SELECT
				lxz.id_zastavky AS zast_id, lxz.poradi AS poradi,
				zast.jmeno AS zast_jmeno,  lxz.id_linky AS linka_id,
				linka.jmeno As linka_jmeno, linka.cislo AS linka_cislo
				FROM linka_x_zastavka AS lxz
				LEFT JOIN zastavka AS zast ON lxz.id_zastavky = zast.id
				LEFT JOIN linka ON lxz.id_linky = linka.id
				WHERE id_linky = ? AND poradi >= ? AND poradi <= ?
				ORDER BY lxz.poradi',
				$linka, $poradi_prvni, $poradi_posledni
			)->fetchAll();
			if($zastavky == NULL)
			{
				continue;
			}

			$times = array();
			/**
			 * vytahneme si doby prejezdu mezi zastavkami
			 */
			// proti smeru
			if($poradi_prvni > $poradi_posledni)
			{
				$count = 0;
				while(($zastavky[$count]->zast_id) != (($values->to)))
				{
					$currTime = $this->database->query(
						'SELECT doba FROM casy WHERE id_zastavky_1 = ? AND id_zastavky_2 = ?',
						 $zastavky[$count+1]->zast_id, $zastavky[$count]->zast_id)->fetchAll();
					array_push($times, $currTime);
					$count--;
				}
			}
			else
			{
				$count = 0;
				while(($zastavky[$count]->zast_id) != (($values->to)))
				{
					$currTime = $this->database->query(
						'SELECT doba FROM casy WHERE id_zastavky_1 = ? AND id_zastavky_2 = ?',
						$zastavky[$count]->zast_id, $zastavky[$count+1]->zast_id)->fetchAll();
					array_push($times, $currTime);
					$count++;
				}
			}
			// nic nenalezeno
			if($times == NULL)
			{
				continue;
			}


			/**
			 * secteme casy jizdy
			 */
			foreach($cas[0] as $cas_linky)
			{
				$total = new \DateTime('00:00:00');
				$total->add($cas_linky->cas);
				if($times[0] == NULL)
				{
					return FALSE;
				}
				foreach($times as $time)
				{
					$total->add($time[0]->doba);
				}
				/**
				 * ulozime do vysledneho pole
				 */
				array_push($results, $linka . ";" . $cas_linky->cas->format('%H:%I:%S') . ";" . $total->format('H:i:s'));
				//$results[$linka] = $cas[0]->cas->format('%H:%I:%S') . ";" . $total->format('H:i:s');
			}
			
		}
		if($results == NULL)
		{
			return FALSE;
		}
		return $results;
	}

	public function getStopName($id)
	{
		return $this->database->table('zastavka')->get($id)->jmeno;
	}

	public function getLinkaCislo($id)
	{
		$cislo = $this->database->table('linka')->get($id);
		if($cislo != NULL)
		{
			return $cislo->cislo;
		}
		return -1;
	}
}

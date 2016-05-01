<?php

namespace App\FrontModule\Presenters;

use Nette;
use App\Model;

/**
 * 
 */
class ResultsPresenter extends BasePresenter
{
	/**
	 * [renderDefault description]
	 * @return [type] [description]
	 */
	public function renderDefault($od_zastavky, $do_zastavky, $casy, $linka)
	{
		$this->template->od_zastavky = $od_zastavky;
		$this->template->do_zastavky = $do_zastavky;
		$this->template->casy = json_decode($casy);
		$this->template->linka = $linka;
	}

	public function getCisloLinky($id)
	{
		$cislo = $this->stopsModel->getLinkaCislo($id);
		if($cislo != NULL)
		{
			return $this->stopsModel->getLinkaCislo($id);
		}
		return -1;
	}

}

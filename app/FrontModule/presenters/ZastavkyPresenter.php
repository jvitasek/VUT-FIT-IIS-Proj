<?php

namespace App\FrontModule\Presenters;

use Nette;
use App\Model;

/**
 * 
 */
class ZastavkyPresenter extends BasePresenter
{
	/**
	 * [renderDefault description]
	 * @return [type] [description]
	 */
	public function renderSeznam()
	{
		$this->template->zastavky = $this->stopsModel->getAllStopsI();
	}
}

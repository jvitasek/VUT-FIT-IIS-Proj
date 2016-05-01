<?php

namespace App\FrontModule\Presenters;

use Nette;
use App\Model;

/**
 * 
 */
class LinkyPresenter extends BasePresenter
{
	/**
	 * [renderDefault description]
	 * @return [type] [description]
	 */
	public function renderSeznam()
	{
		$this->template->linky = $this->linkyModel->getAll();
	}
}

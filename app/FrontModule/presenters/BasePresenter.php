<?php

namespace App\FrontModule\Presenters;

use Nette;
use App\Model;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{

	protected $stopsModel;
	protected $linkyModel;

	final public function injectBase(\Models\Stops $stopsModel, \Models\Linky $linkyModel)
	{
		$this->stopsModel = $stopsModel;
		$this->linkyModel = $linkyModel;
	}

	public function beforeRender()
	{
		parent::beforeRender();
	}
}

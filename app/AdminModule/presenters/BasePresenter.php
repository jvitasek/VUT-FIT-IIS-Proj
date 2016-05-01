<?php

namespace App\AdminModule\Presenters;

use Nette;
use Models\Admin;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
	protected $authModel;
	protected $linkaModel;
	protected $userModel;
	protected $stopsModel;
	protected $timesModel;
	protected $crossModel;

	final public function injectBase(\Models\Admin\Authenticate $authModel, \Models\Admin\Linka $linkaModel,
	\Models\Admin\User $userModel, \Models\Admin\Stops $stopsModel, \Models\Admin\Times $timesModel,
	\Models\Admin\Cross $crossModel)
	{
		$this->authModel = $authModel;
		$this->linkaModel = $linkaModel;
		$this->userModel = $userModel;
		$this->stopsModel = $stopsModel;
		$this->timesModel = $timesModel;
		$this->crossModel = $crossModel;
	}
}

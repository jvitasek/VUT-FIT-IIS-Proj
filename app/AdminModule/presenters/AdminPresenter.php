<?php

namespace App\AdminModule\Presenters;

use Nette;
use Models\Admin;


class AdminPresenter extends BasePresenter
{

	public function beforeRender()
	{
		if(!$this->user->isLoggedIn())
		{
			$this->redirect('Login:');
		}
	}

	public function renderDefault()
	{
		
	}

}

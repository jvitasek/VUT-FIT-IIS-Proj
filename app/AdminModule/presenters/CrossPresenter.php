<?php

namespace App\AdminModule\Presenters;

use Nette;
use Nette\Application\UI\Form;
use Models\Admin;


class CrossPresenter extends BasePresenter
{
	public function renderDefault()
	{
		
	}

	protected function createComponentCrossForm()
	{
		$form = new Form;

		$linky = $this->linkaModel->getAllArr();
		$form->addSelect('linka', 'Linka:', $linky)
			->setPrompt('Zvolte linku')
			->setRequired('Linka je povinná.');

		$stops = $this->stopsModel->getAllStops();
		$form->addCheckboxList('stops', 'Zastávky:', $stops);

		$form->addSubmit('send', 'Uložit');
		$form->onSuccess[] = array($this, 'crossFormSucceeded');
		return $form;
	}

	public function crossFormSucceeded($form)
	{
		$values = $form->values;
		$this->crossModel->addCross($values);
		$this->flashMessage('Zástávky linky byly úspěšně vloženy.', 'success');
		$this->redirect('Cross:default');
	}

}

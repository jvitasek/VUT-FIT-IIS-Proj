<?php

namespace App\AdminModule\Presenters;

use Nette;
use Nette\Application\UI\Form;
use Models\Admin;


class StopsPresenter extends BasePresenter
{
	public function renderDefault()
	{
		$this->template->stops = $this->stopsModel->getAll();
	}

	public function handleDelete($id)
	{
		if($this->stopsModel->deleteStop($id) == TRUE)
		{
			$this->flashMessage('Zastávka byla úspěšně smazána.', 'success');
		}
		else
		{
			$this->flashMessage('Zastávku se nepodařilo smazat.', 'error');
		}
		$this->redirect('Stops:default');
	}

	protected function createComponentStopForm()
	{
		$form = new Form;
		$form->addText('name', 'Jméno')
			->setAttribute('placeholder', 'Hlavní nádraží')
			->addRule(Form::MIN_LENGTH, 'Název zastávky musí mít alespoň 2 znaky', 2)
			->addRule(Form::MAX_LENGTH, 'Název zastávky nesmí mít více než 50 znaků', 50)
			->setRequired('Login je povinný.');

		$form->addText('gps', 'GPS')
			->setAttribute('placeholder', '49.191314, 16.613558')
			->addRule(Form::MIN_LENGTH, 'GPS musí mít alespoň 2 znaky', 2)
			->addRule(Form::MAX_LENGTH, 'GPS nesmí mít více než 32 znaků', 32);

		$form->addSelect('bezbar', 'Bezbariérovost', array(
				1 => 'Ano',
				0 => 'Ne'
			))->setPrompt('Vyberte možnost');

		$form->addSubmit('send', 'Uložit');
		$form->onSuccess[] = array($this, 'stopFormSucceeded');
		return $form;
	}

	public function stopFormSucceeded($form)
	{
		$values = $form->values;
		if($this->stopsModel->addStop($values) == TRUE)
		{
			$this->flashMessage('Zastávka byla úspěšně vložena.', 'success');
		}
		else
		{
			$this->flashMessage('Zastávku se nepodařilo vložit.', 'error');
		}
		$this->redirect('Stops:default');
	}

}

<?php

namespace App\AdminModule\Presenters;

use Nette;
use Nette\Application\UI\Form;
use Models\Admin;


class TimesPresenter extends BasePresenter
{
	public function renderDefault()
	{
		$this->template->times = $this->timesModel->getAll();
	}

	public function handleDelete($id)
	{
		if($this->timesModel->deleteTime($id) == TRUE)
		{
			$this->flashMessage('Čas byl úspěšně smazán.', 'success');
		}
		else
		{
			$this->flashMessage('Čas se nepodařilo smazat.', 'error');
		}
		$this->redirect('Times:default');
	}

	protected function createComponentTimesForm()
	{
		$form = new Form;
		$stops = $this->stopsModel->getAllStops();

		$form->addSelect('stop1', 'Ze zastávky:', $stops)
			->setPrompt('Zvolte zastávku')
			->setRequired('Zastávka 1 je povinná.');

		$form->addSelect('stop2', 'Do zastávky:', $stops)
			->setPrompt('Zvolte zastávku')
			->setRequired('Zastávka 2 je povinná.');

		$form->addText('time', 'Čas:')
			->setAttribute('placeholder', 'HH:MM:SS')
			->setRequired('Čas je povinný.');

		$form->addSubmit('send', 'Uložit');
		$form->onSuccess[] = array($this, 'timesFormSucceeded');
		return $form;
	}

	public function timesFormSucceeded($form)
	{
		$values = $form->values;
		if($this->timesModel->addTime($values) == TRUE)
		{
			$this->flashMessage('Čas byl úspěšně vložen.', 'success');
		}
		else
		{
			$this->flashMessage('Čas se nepodařilo vložit.', 'error');
		}
		$this->redirect('Times:default');
	}

}

<?php

namespace App\AdminModule\Presenters;

use Nette;
use Nette\Application\UI\Form;
use Models\Admin;


class LinkyPresenter extends BasePresenter
{
	public function renderDefault()
	{
		$this->template->linky = $this->linkaModel->getAll();	
	}

	/**
	 * [renderZastavky description]
	 * @param  [type] $id ID linky
	 * @return [type]     [description]
	 */
	public function renderZastavky($id)
	{
		$this->template->name = $this->crossModel->getName($id)->jmeno;
		$this->template->stops = $this->crossModel->getAll($id);
	}

	public function renderCasy($id)
	{
		$this->template->id_linky = $id;
		$this->template->casy = $this->linkaModel->getLinkaCasy($id);
	}

	public function getPoradi($cross_id)
	{
		return $this->crossModel->getPoradi($cross_id);
	}

	public function handleDelete($id)
	{
		if($this->linkaModel->deleteLinka($id) == TRUE)
		{
			$this->flashMessage('Linka byla úspěšně smazána.', 'success');
		}
		else
		{
			$this->flashMessage('Linku se nepodařilo smazat.', 'error');
		}
		$this->redirect('Linky:default');
	}

	public function handleDeleteCas($id)
	{
		if($this->linkaModel->deleteCas($id) == TRUE)
		{
			$this->flashMessage('Čas byl úspěšně smazán.', 'success');
		}
		else
		{
			$this->flashMessage('Čas se nepodařilo smazat.', 'error');
		}
		$this->redirect('Linky:default');
	}

	protected function createComponentLinkaForm()
	{
		$form = new Form;
		$form->addText('name', 'Název linky')
			->setAttribute('placeholder', 'Hlavní nádraží – Řečkovice')
			->addRule(Form::MIN_LENGTH, 'Název linky musí mít alespoň 4 znaky', 4)
			->addRule(Form::MAX_LENGTH, 'Název linky nesmí mít více než 100 znaků', 100)
			->setRequired('Název je povinný.');
		$form->addText('number', 'Číslo linky')
			->setAttribute('placeholder', '8')
			->addRule(Form::INTEGER, 'Číslo linky musí být číslo')
			->setRequired('Číslo je povinné.');
		$form->addText('type', 'Typ linky')
			->setAttribute('placeholder', 'Denní')
			->addRule(Form::MIN_LENGTH, 'Typ linky musí mít alespoň 4 znaky', 4)
			->addRule(Form::MAX_LENGTH, 'Typ linky nesmí mít více než 32 znaků', 32)
			->setRequired('Název je povinný.');

		$form->addSubmit('send', 'Uložit');
		$form->onSuccess[] = array($this, 'linkaFormSucceeded');
		return $form;
	}

	public function linkaFormSucceeded($form)
	{
		$values = $form->values;
		if($this->linkaModel->addLinka($values) == TRUE)
		{
			$this->flashMessage('Linka byla úspěšně vložena.', 'success');
		}
		else
		{
			$this->flashMessage('Linku se nepodařilo vložit.', 'error');
		}
		$this->redirect('Linky:default');
	}

	protected function createComponentPoradiForm()
	{
		$form = new Form;
		$form->addText('poradi', 'Pořadí')
			->addRule(Form::INTEGER, 'Pořadí musí být číslo.');

		// sem ulozit id linky
		$form->addHidden('cross_id');

		$form->addSubmit('submit', 'Uložit')
			->setAttribute('class', 'submit-poradi');
		$form->onSuccess[] = array($this, 'poradiFormSucceeded');
		return $form;
	}

	public function poradiFormSucceeded($form)
	{
		$values = $form->values;
		if($this->linkaModel->addPoradi($values) == TRUE)
		{
			$this->flashMessage('Pořadí úspěšně uloženo.', 'success');
		}
		else
		{
			$this->flashMessage('Pořadí se nepodařilo uložit.', 'error');
		}
	}

	protected function createComponentLinkaCasyForm()
	{
		$form = new Form;
		$form->addText('cas', 'Čas')
			->setAttribute('placeholder', 'HH:MM:SS')
			->addRule(Form::PATTERN, 'Čas musí splňovat formát HH:MM:SS.', '[0-9][0-9]:[0-9][0-9]:[0-9][0-9]')
			->setRequired('Čas je povinný.');

		$form->addHidden('id_linky');
		$form->addSubmit('send', 'Uložit');
		$form->onSuccess[] = array($this, 'linkaCasyFormSucceeded');
		return $form;
	}

	public function linkaCasyFormSucceeded($form)
	{
		$values = $form->values;
		if($this->linkaModel->addLinkaCasy($values) == TRUE)
		{
			$this->flashMessage('Čas linky byl úspěšně vložen.', 'success');
		}
		else
		{
			$this->flashMessage('Čas linky se nepodařilo vložit.', 'error');
		}
	}
}

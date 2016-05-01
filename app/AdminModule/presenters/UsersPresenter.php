<?php

namespace App\AdminModule\Presenters;

use Nette;
use Nette\Application\UI\Form;
use Models\Admin;


class UsersPresenter extends BasePresenter
{
	public function renderDefault()
	{
		$this->template->users = $this->userModel->getAll();
	}

	public function handleDelete($id)
	{
		if($this->userModel->deleteUser($id) == TRUE)
		{
			$this->flashMessage('Uživatel byl úspěšně smazán.', 'success');
		}
		else
		{
			$this->flashMessage('Uživatele se nepodařilo smazat.', 'error');
		}
		$this->redirect('Users:default');
	}

	protected function createComponentUserForm()
	{
		$form = new Form;
		$form->addText('login', 'Login')
			->setAttribute('placeholder', 'xlogin00')
			->addRule(Form::MIN_LENGTH, 'Login musí mít alespoň 2 znaky', 2)
			->addRule(Form::MAX_LENGTH, 'Login nesmí mít více než 255 znaků', 255)
			->setRequired('Login je povinný.');

		$form->addPassword('pass', 'Heslo')
			->addRule(Form::MIN_LENGTH, 'Heslo musí mít alespoň 2 znaky', 2)
			->addRule(Form::MAX_LENGTH, 'Heslo nesmí mít více než 255 znaků', 255)
			->setRequired('Heslo je povinné.');

		$roles = $this->userModel->getRoles();

		$form->addSelect('role', 'Role', $roles)
			->setPrompt('Zvolte roli')
			->setRequired('Role je povinná.');

		$form->addSubmit('send', 'Uložit');
		$form->onSuccess[] = array($this, 'userFormSucceeded');
		return $form;
	}

	public function userFormSucceeded($form)
	{
		$values = $form->values;
		if($this->userModel->addUser($values) == TRUE)
		{
			$this->flashMessage('Uživatel byl úspěšně vložen.', 'success');
		}
		else
		{
			$this->flashMessage('Uživatele se nepodařilo vložit.', 'error');
		}
		$this->redirect('Users:default');
	}

}

<?php

namespace App\AdminModule\Presenters;

use Nette;
use Models\Admin;


class LoginPresenter extends BasePresenter
{

	public function renderDefault()
	{
		
	}

	protected function createComponentLoginForm()
	{
		$form = new Nette\Application\UI\Form;
		$form->addText('login')
			->setRequired('Login je povinný.');
		$form->addPassword('password')
			->setRequired('Heslo je povinné.');

		$form->addSubmit('send', 'Přihlásit');
		$form->getElementPrototype()->class('login-form');
		$form->onSuccess[] = array($this, 'loginFormSucceeded');
		return $form;
	}

	public function loginFormSucceeded($form)
	{
		$values = $form->values;
		$identity = $this->authModel->authenticate(array($values->login, $values->password));
		$this->user->login($identity);
		$this->flashMessage('Byli jste úspěšně přihlášeni.', 'success');
		$this->redirect('Admin:default');
	}

	public function actionLogout()
	{
		$this->getUser()->logout();
		$this->redirect('Login:');
	}

}

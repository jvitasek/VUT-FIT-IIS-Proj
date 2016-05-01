<?php

namespace App\FrontModule\Presenters;

use Nette;
use Nette\Application\UI\Form;
use App\Model;

/**
 * 
 */
class HomepagePresenter extends BasePresenter
{
	/**
	 * [renderDefault description]
	 * @return [type] [description]
	 */
	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';
	}

	/**
	 * [createComponentWysiwyg description]
	 * @return [type] [description]
	 */
	protected function createComponentHomeForm()
	{
		$form = new Form;
		$stops = $this->stopsModel->getAllStops();

		$form->addSelect('from', 'Ze zastávky:', $stops)
			->setPrompt('Zvolte zastávku')
			->setRequired();

		$form->addSelect('to', 'Do zastávky:', $stops)
			->setPrompt('Zvolte zastávku')
			->setRequired();

		$form->addText('time', 'Čas odjezdu:')
			->setAttribute('placeholder', 'HH:MM')
			->addRule(Form::PATTERN, 'Musí splňovat formát HH:MM!', '[0-9][0-9]:[0-9][0-9]')
			->setRequired();

		$form->addSubmit('submit', 'Vyhledat');
		$form->onSuccess[] = array($this, 'homeFormSucceeded');
		return $form;
	}

	/**
	 * [wysiwygFormSucceeded description]
	 * @param  Form   $form   [description]
	 * @param  [type] $values [description]
	 * @return [type]         [description]
	 */
	public function homeFormSucceeded(Form $form, $values)
	{
		$casy = $this->stopsModel->getResults($values);
		// jizda nenalezena
		if($casy == FALSE)
		{
			$this->flashMessage('Linka nenalezena');
			$this->redirect('Homepage:default');
		}
		/**
		 * @todo ziskat cas odjezdu, vratit z modelu
		 */
		$od_zastavky = $this->stopsModel->getStopname($values->from);
		$do_zastavky = $this->stopsModel->getStopname($values->to);
		$predat_casy = json_encode($casy);
		$this->redirect('Results:default', array(
			'od_zastavky' => $od_zastavky,
			'do_zastavky' => $do_zastavky,
			'casy' => $predat_casy)
		);
	}
}

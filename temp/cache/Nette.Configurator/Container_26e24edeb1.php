<?php
// source: /www/jvitasek.cz/iis.jvitasek.cz/app/config/config.neon 
// source: /www/jvitasek.cz/iis.jvitasek.cz/app/config/config.local.neon 

class Container_26e24edeb1 extends Nette\DI\Container
{
	protected $meta = array(
		'types' => array(
			'Nette\Object' => array(
				array(
					'application.application',
					'application.linkGenerator',
					'database.default.connection',
					'database.default.structure',
					'database.default.context',
					'http.requestFactory',
					'http.request',
					'http.response',
					'http.context',
					'security.user',
					'session.session',
					'authModel',
					'crossModel',
					'linkaModel',
					'adStopsModel',
					'timesModel',
					'userModel',
					'linkyModel',
					'stopsModel',
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.13',
					'application.14',
					'application.15',
					'application.16',
					'application.17',
					'container',
				),
			),
			'Nette\Application\Application' => array(1 => array('application.application')),
			'Nette\Application\IPresenterFactory' => array(
				1 => array('application.presenterFactory'),
			),
			'Nette\Application\LinkGenerator' => array(1 => array('application.linkGenerator')),
			'Nette\Caching\Storages\IJournal' => array(1 => array('cache.journal')),
			'Nette\Caching\IStorage' => array(1 => array('cache.storage')),
			'Nette\Database\Connection' => array(
				1 => array('database.default.connection'),
			),
			'Nette\Database\IStructure' => array(
				1 => array('database.default.structure'),
			),
			'Nette\Database\Structure' => array(
				1 => array('database.default.structure'),
			),
			'Nette\Database\IConventions' => array(
				1 => array('database.default.conventions'),
			),
			'Nette\Database\Conventions\DiscoveredConventions' => array(
				1 => array('database.default.conventions'),
			),
			'Nette\Database\Context' => array(1 => array('database.default.context')),
			'Nette\Http\RequestFactory' => array(1 => array('http.requestFactory')),
			'Nette\Http\IRequest' => array(1 => array('http.request')),
			'Nette\Http\Request' => array(1 => array('http.request')),
			'Nette\Http\IResponse' => array(1 => array('http.response')),
			'Nette\Http\Response' => array(1 => array('http.response')),
			'Nette\Http\Context' => array(1 => array('http.context')),
			'Nette\Bridges\ApplicationLatte\ILatteFactory' => array(1 => array('latte.latteFactory')),
			'Nette\Application\UI\ITemplateFactory' => array(1 => array('latte.templateFactory')),
			'Latte\Object' => array(array('nette.latte')),
			'Latte\Engine' => array(array('nette.latte')),
			'Nette\Mail\IMailer' => array(1 => array('mail.mailer')),
			'Nette\Application\IRouter' => array(1 => array('routing.router')),
			'Nette\Security\IUserStorage' => array(1 => array('security.userStorage')),
			'Nette\Security\User' => array(1 => array('security.user')),
			'Nette\Http\Session' => array(1 => array('session.session')),
			'Tracy\ILogger' => array(1 => array('tracy.logger')),
			'Tracy\BlueScreen' => array(1 => array('tracy.blueScreen')),
			'Tracy\Bar' => array(1 => array('tracy.bar')),
			'Models\Admin\Base' => array(
				1 => array(
					'authModel',
					'crossModel',
					'linkaModel',
					'adStopsModel',
					'timesModel',
					'userModel',
				),
			),
			'Nette\Security\IAuthenticator' => array(1 => array('authModel')),
			'Models\Admin\Authenticate' => array(1 => array('authModel')),
			'Models\Admin\Cross' => array(1 => array('crossModel')),
			'Models\Admin\Linka' => array(1 => array('linkaModel')),
			'Models\Admin\Stops' => array(1 => array('adStopsModel')),
			'Models\Admin\Times' => array(1 => array('timesModel')),
			'Models\Admin\User' => array(1 => array('userModel')),
			'Models\Base' => array(1 => array('linkyModel', 'stopsModel')),
			'Models\Linky' => array(1 => array('linkyModel')),
			'Models\Stops' => array(1 => array('stopsModel')),
			'App\FrontModule\Presenters\BasePresenter' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
				),
			),
			'Nette\Application\UI\Presenter' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.13',
					'application.15',
				),
			),
			'Nette\Application\UI\Control' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.13',
					'application.15',
				),
			),
			'Nette\Application\UI\PresenterComponent' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.13',
					'application.15',
				),
			),
			'Nette\ComponentModel\Container' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.13',
					'application.15',
				),
			),
			'Nette\ComponentModel\Component' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.13',
					'application.15',
				),
			),
			'Nette\Application\UI\IRenderable' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.13',
					'application.15',
				),
			),
			'Nette\ComponentModel\IContainer' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.13',
					'application.15',
				),
			),
			'Nette\ComponentModel\IComponent' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.13',
					'application.15',
				),
			),
			'Nette\Application\UI\ISignalReceiver' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.13',
					'application.15',
				),
			),
			'Nette\Application\UI\IStatePersistent' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.13',
					'application.15',
				),
			),
			'ArrayAccess' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.13',
					'application.15',
				),
			),
			'Nette\Application\IPresenter' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.13',
					'application.14',
					'application.15',
					'application.16',
					'application.17',
				),
			),
			'App\FrontModule\Presenters\ResultsPresenter' => array(array('application.1')),
			'App\FrontModule\Presenters\LinkyPresenter' => array(array('application.2')),
			'App\FrontModule\Presenters\Error4xxPresenter' => array(array('application.3')),
			'App\FrontModule\Presenters\ZastavkyPresenter' => array(array('application.4')),
			'App\FrontModule\Presenters\HomepagePresenter' => array(array('application.5')),
			'App\FrontModule\Presenters\ErrorPresenter' => array(array('application.6')),
			'App\AdminModule\Presenters\BasePresenter' => array(
				array(
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'application.11',
					'application.12',
					'application.13',
					'application.15',
				),
			),
			'App\AdminModule\Presenters\CrossPresenter' => array(array('application.7')),
			'App\AdminModule\Presenters\StopsPresenter' => array(array('application.8')),
			'App\AdminModule\Presenters\TimesPresenter' => array(array('application.9')),
			'App\AdminModule\Presenters\AdminPresenter' => array(array('application.10')),
			'App\AdminModule\Presenters\LinkyPresenter' => array(array('application.11')),
			'App\AdminModule\Presenters\LoginPresenter' => array(array('application.12')),
			'App\AdminModule\Presenters\Error4xxPresenter' => array(array('application.13')),
			'App\AdminModule\Presenters\ErrorPresenter' => array(array('application.14')),
			'App\AdminModule\Presenters\UsersPresenter' => array(array('application.15')),
			'NetteModule\ErrorPresenter' => array(array('application.16')),
			'NetteModule\MicroPresenter' => array(array('application.17')),
			'Nette\DI\Container' => array(1 => array('container')),
		),
		'services' => array(
			'adStopsModel' => 'Models\Admin\Stops',
			'application.1' => 'App\FrontModule\Presenters\ResultsPresenter',
			'application.10' => 'App\AdminModule\Presenters\AdminPresenter',
			'application.11' => 'App\AdminModule\Presenters\LinkyPresenter',
			'application.12' => 'App\AdminModule\Presenters\LoginPresenter',
			'application.13' => 'App\AdminModule\Presenters\Error4xxPresenter',
			'application.14' => 'App\AdminModule\Presenters\ErrorPresenter',
			'application.15' => 'App\AdminModule\Presenters\UsersPresenter',
			'application.16' => 'NetteModule\ErrorPresenter',
			'application.17' => 'NetteModule\MicroPresenter',
			'application.2' => 'App\FrontModule\Presenters\LinkyPresenter',
			'application.3' => 'App\FrontModule\Presenters\Error4xxPresenter',
			'application.4' => 'App\FrontModule\Presenters\ZastavkyPresenter',
			'application.5' => 'App\FrontModule\Presenters\HomepagePresenter',
			'application.6' => 'App\FrontModule\Presenters\ErrorPresenter',
			'application.7' => 'App\AdminModule\Presenters\CrossPresenter',
			'application.8' => 'App\AdminModule\Presenters\StopsPresenter',
			'application.9' => 'App\AdminModule\Presenters\TimesPresenter',
			'application.application' => 'Nette\Application\Application',
			'application.linkGenerator' => 'Nette\Application\LinkGenerator',
			'application.presenterFactory' => 'Nette\Application\IPresenterFactory',
			'authModel' => 'Models\Admin\Authenticate',
			'cache.journal' => 'Nette\Caching\Storages\IJournal',
			'cache.storage' => 'Nette\Caching\IStorage',
			'container' => 'Nette\DI\Container',
			'crossModel' => 'Models\Admin\Cross',
			'database.default.connection' => 'Nette\Database\Connection',
			'database.default.context' => 'Nette\Database\Context',
			'database.default.conventions' => 'Nette\Database\Conventions\DiscoveredConventions',
			'database.default.structure' => 'Nette\Database\Structure',
			'http.context' => 'Nette\Http\Context',
			'http.request' => 'Nette\Http\Request',
			'http.requestFactory' => 'Nette\Http\RequestFactory',
			'http.response' => 'Nette\Http\Response',
			'latte.latteFactory' => 'Latte\Engine',
			'latte.templateFactory' => 'Nette\Application\UI\ITemplateFactory',
			'linkaModel' => 'Models\Admin\Linka',
			'linkyModel' => 'Models\Linky',
			'mail.mailer' => 'Nette\Mail\IMailer',
			'nette.latte' => 'Latte\Engine',
			'routing.router' => 'Nette\Application\IRouter',
			'security.user' => 'Nette\Security\User',
			'security.userStorage' => 'Nette\Security\IUserStorage',
			'session.session' => 'Nette\Http\Session',
			'stopsModel' => 'Models\Stops',
			'timesModel' => 'Models\Admin\Times',
			'tracy.bar' => 'Tracy\Bar',
			'tracy.blueScreen' => 'Tracy\BlueScreen',
			'tracy.logger' => 'Tracy\ILogger',
			'userModel' => 'Models\Admin\User',
		),
		'tags' => array(
			'inject' => array(
				'application.1' => TRUE,
				'application.10' => TRUE,
				'application.11' => TRUE,
				'application.12' => TRUE,
				'application.13' => TRUE,
				'application.14' => TRUE,
				'application.15' => TRUE,
				'application.16' => TRUE,
				'application.17' => TRUE,
				'application.2' => TRUE,
				'application.3' => TRUE,
				'application.4' => TRUE,
				'application.5' => TRUE,
				'application.6' => TRUE,
				'application.7' => TRUE,
				'application.8' => TRUE,
				'application.9' => TRUE,
			),
			'nette.presenter' => array(
				'application.1' => 'App\FrontModule\Presenters\ResultsPresenter',
				'application.10' => 'App\AdminModule\Presenters\AdminPresenter',
				'application.11' => 'App\AdminModule\Presenters\LinkyPresenter',
				'application.12' => 'App\AdminModule\Presenters\LoginPresenter',
				'application.13' => 'App\AdminModule\Presenters\Error4xxPresenter',
				'application.14' => 'App\AdminModule\Presenters\ErrorPresenter',
				'application.15' => 'App\AdminModule\Presenters\UsersPresenter',
				'application.16' => 'NetteModule\ErrorPresenter',
				'application.17' => 'NetteModule\MicroPresenter',
				'application.2' => 'App\FrontModule\Presenters\LinkyPresenter',
				'application.3' => 'App\FrontModule\Presenters\Error4xxPresenter',
				'application.4' => 'App\FrontModule\Presenters\ZastavkyPresenter',
				'application.5' => 'App\FrontModule\Presenters\HomepagePresenter',
				'application.6' => 'App\FrontModule\Presenters\ErrorPresenter',
				'application.7' => 'App\AdminModule\Presenters\CrossPresenter',
				'application.8' => 'App\AdminModule\Presenters\StopsPresenter',
				'application.9' => 'App\AdminModule\Presenters\TimesPresenter',
			),
		),
		'aliases' => array(
			'application' => 'application.application',
			'cacheStorage' => 'cache.storage',
			'database.default' => 'database.default.connection',
			'httpRequest' => 'http.request',
			'httpResponse' => 'http.response',
			'nette.cacheJournal' => 'cache.journal',
			'nette.database.default' => 'database.default',
			'nette.database.default.context' => 'database.default.context',
			'nette.httpContext' => 'http.context',
			'nette.httpRequestFactory' => 'http.requestFactory',
			'nette.latteFactory' => 'latte.latteFactory',
			'nette.mailer' => 'mail.mailer',
			'nette.presenterFactory' => 'application.presenterFactory',
			'nette.templateFactory' => 'latte.templateFactory',
			'nette.userStorage' => 'security.userStorage',
			'router' => 'routing.router',
			'session' => 'session.session',
			'user' => 'security.user',
		),
	);


	public function __construct()
	{
		parent::__construct(array(
			'appDir' => '/www/jvitasek.cz/iis.jvitasek.cz/app',
			'wwwDir' => '/www/jvitasek.cz/iis.jvitasek.cz/www',
			'debugMode' => FALSE,
			'productionMode' => TRUE,
			'environment' => 'production',
			'consoleMode' => FALSE,
			'container' => array('class' => NULL, 'parent' => NULL),
			'tempDir' => '/www/jvitasek.cz/iis.jvitasek.cz/app/../temp',
		));
	}


	/**
	 * @return Models\Admin\Stops
	 */
	public function createServiceAdStopsModel()
	{
		$service = new Models\Admin\Stops($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return App\FrontModule\Presenters\ResultsPresenter
	 */
	public function createServiceApplication__1()
	{
		$service = new App\FrontModule\Presenters\ResultsPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectBase($this->getService('stopsModel'), $this->getService('linkyModel'));
		$service->invalidLinkMode = 1;
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\AdminPresenter
	 */
	public function createServiceApplication__10()
	{
		$service = new App\AdminModule\Presenters\AdminPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectBase($this->getService('authModel'), $this->getService('linkaModel'), $this->getService('userModel'),
			$this->getService('adStopsModel'), $this->getService('timesModel'), $this->getService('crossModel'));
		$service->invalidLinkMode = 1;
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\LinkyPresenter
	 */
	public function createServiceApplication__11()
	{
		$service = new App\AdminModule\Presenters\LinkyPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectBase($this->getService('authModel'), $this->getService('linkaModel'), $this->getService('userModel'),
			$this->getService('adStopsModel'), $this->getService('timesModel'), $this->getService('crossModel'));
		$service->invalidLinkMode = 1;
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\LoginPresenter
	 */
	public function createServiceApplication__12()
	{
		$service = new App\AdminModule\Presenters\LoginPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectBase($this->getService('authModel'), $this->getService('linkaModel'), $this->getService('userModel'),
			$this->getService('adStopsModel'), $this->getService('timesModel'), $this->getService('crossModel'));
		$service->invalidLinkMode = 1;
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\Error4xxPresenter
	 */
	public function createServiceApplication__13()
	{
		$service = new App\AdminModule\Presenters\Error4xxPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectBase($this->getService('authModel'), $this->getService('linkaModel'), $this->getService('userModel'),
			$this->getService('adStopsModel'), $this->getService('timesModel'), $this->getService('crossModel'));
		$service->invalidLinkMode = 1;
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\ErrorPresenter
	 */
	public function createServiceApplication__14()
	{
		$service = new App\AdminModule\Presenters\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\UsersPresenter
	 */
	public function createServiceApplication__15()
	{
		$service = new App\AdminModule\Presenters\UsersPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectBase($this->getService('authModel'), $this->getService('linkaModel'), $this->getService('userModel'),
			$this->getService('adStopsModel'), $this->getService('timesModel'), $this->getService('crossModel'));
		$service->invalidLinkMode = 1;
		return $service;
	}


	/**
	 * @return NetteModule\ErrorPresenter
	 */
	public function createServiceApplication__16()
	{
		$service = new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return NetteModule\MicroPresenter
	 */
	public function createServiceApplication__17()
	{
		$service = new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('routing.router'));
		return $service;
	}


	/**
	 * @return App\FrontModule\Presenters\LinkyPresenter
	 */
	public function createServiceApplication__2()
	{
		$service = new App\FrontModule\Presenters\LinkyPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectBase($this->getService('stopsModel'), $this->getService('linkyModel'));
		$service->invalidLinkMode = 1;
		return $service;
	}


	/**
	 * @return App\FrontModule\Presenters\Error4xxPresenter
	 */
	public function createServiceApplication__3()
	{
		$service = new App\FrontModule\Presenters\Error4xxPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectBase($this->getService('stopsModel'), $this->getService('linkyModel'));
		$service->invalidLinkMode = 1;
		return $service;
	}


	/**
	 * @return App\FrontModule\Presenters\ZastavkyPresenter
	 */
	public function createServiceApplication__4()
	{
		$service = new App\FrontModule\Presenters\ZastavkyPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectBase($this->getService('stopsModel'), $this->getService('linkyModel'));
		$service->invalidLinkMode = 1;
		return $service;
	}


	/**
	 * @return App\FrontModule\Presenters\HomepagePresenter
	 */
	public function createServiceApplication__5()
	{
		$service = new App\FrontModule\Presenters\HomepagePresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectBase($this->getService('stopsModel'), $this->getService('linkyModel'));
		$service->invalidLinkMode = 1;
		return $service;
	}


	/**
	 * @return App\FrontModule\Presenters\ErrorPresenter
	 */
	public function createServiceApplication__6()
	{
		$service = new App\FrontModule\Presenters\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\CrossPresenter
	 */
	public function createServiceApplication__7()
	{
		$service = new App\AdminModule\Presenters\CrossPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectBase($this->getService('authModel'), $this->getService('linkaModel'), $this->getService('userModel'),
			$this->getService('adStopsModel'), $this->getService('timesModel'), $this->getService('crossModel'));
		$service->invalidLinkMode = 1;
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\StopsPresenter
	 */
	public function createServiceApplication__8()
	{
		$service = new App\AdminModule\Presenters\StopsPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectBase($this->getService('authModel'), $this->getService('linkaModel'), $this->getService('userModel'),
			$this->getService('adStopsModel'), $this->getService('timesModel'), $this->getService('crossModel'));
		$service->invalidLinkMode = 1;
		return $service;
	}


	/**
	 * @return App\AdminModule\Presenters\TimesPresenter
	 */
	public function createServiceApplication__9()
	{
		$service = new App\AdminModule\Presenters\TimesPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectBase($this->getService('authModel'), $this->getService('linkaModel'), $this->getService('userModel'),
			$this->getService('adStopsModel'), $this->getService('timesModel'), $this->getService('crossModel'));
		$service->invalidLinkMode = 1;
		return $service;
	}


	/**
	 * @return Nette\Application\Application
	 */
	public function createServiceApplication__application()
	{
		$service = new Nette\Application\Application($this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'));
		$service->catchExceptions = TRUE;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		return $service;
	}


	/**
	 * @return Nette\Application\LinkGenerator
	 */
	public function createServiceApplication__linkGenerator()
	{
		$service = new Nette\Application\LinkGenerator($this->getService('routing.router'), $this->getService('http.request')->getUrl(),
			$this->getService('application.presenterFactory'));
		return $service;
	}


	/**
	 * @return Nette\Application\IPresenterFactory
	 */
	public function createServiceApplication__presenterFactory()
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 1, NULL));
		$service->setMapping(array(
			'*' => 'App\*Module\Presenters\*Presenter',
		));
		return $service;
	}


	/**
	 * @return Models\Admin\Authenticate
	 */
	public function createServiceAuthModel()
	{
		$service = new Models\Admin\Authenticate($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\IJournal
	 */
	public function createServiceCache__journal()
	{
		$service = new Nette\Caching\Storages\FileJournal('/www/jvitasek.cz/iis.jvitasek.cz/app/../temp');
		return $service;
	}


	/**
	 * @return Nette\Caching\IStorage
	 */
	public function createServiceCache__storage()
	{
		$service = new Nette\Caching\Storages\FileStorage('/www/jvitasek.cz/iis.jvitasek.cz/app/../temp/cache', $this->getService('cache.journal'));
		return $service;
	}


	/**
	 * @return Nette\DI\Container
	 */
	public function createServiceContainer()
	{
		return $this;
	}


	/**
	 * @return Models\Admin\Cross
	 */
	public function createServiceCrossModel()
	{
		$service = new Models\Admin\Cross($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return Nette\Database\Connection
	 */
	public function createServiceDatabase__default__connection()
	{
		$service = new Nette\Database\Connection('mysql:host=localhost;dbname=jvitasek_cz_iis', '30906_jvitasek', 'wu6raCet',
			array('lazy' => TRUE));
		$this->getService('tracy.blueScreen')->addPanel('Nette\Bridges\DatabaseTracy\ConnectionPanel::renderException');
		return $service;
	}


	/**
	 * @return Nette\Database\Context
	 */
	public function createServiceDatabase__default__context()
	{
		$service = new Nette\Database\Context($this->getService('database.default.connection'), $this->getService('database.default.structure'),
			$this->getService('database.default.conventions'), $this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Database\Conventions\DiscoveredConventions
	 */
	public function createServiceDatabase__default__conventions()
	{
		$service = new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
		return $service;
	}


	/**
	 * @return Nette\Database\Structure
	 */
	public function createServiceDatabase__default__structure()
	{
		$service = new Nette\Database\Structure($this->getService('database.default.connection'), $this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Http\Context
	 */
	public function createServiceHttp__context()
	{
		$service = new Nette\Http\Context($this->getService('http.request'), $this->getService('http.response'));
		return $service;
	}


	/**
	 * @return Nette\Http\Request
	 */
	public function createServiceHttp__request()
	{
		$service = $this->getService('http.requestFactory')->createHttpRequest();
		if (!$service instanceof Nette\Http\Request) {
			throw new Nette\UnexpectedValueException('Unable to create service \'http.request\', value returned by factory is not Nette\Http\Request type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\RequestFactory
	 */
	public function createServiceHttp__requestFactory()
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy(array());
		return $service;
	}


	/**
	 * @return Nette\Http\Response
	 */
	public function createServiceHttp__response()
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	/**
	 * @return Nette\Bridges\ApplicationLatte\ILatteFactory
	 */
	public function createServiceLatte__latteFactory()
	{
		return new Container_26e24edeb1_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory($this);
	}


	/**
	 * @return Nette\Application\UI\ITemplateFactory
	 */
	public function createServiceLatte__templateFactory()
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory($this->getService('latte.latteFactory'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('security.user'), $this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Models\Admin\Linka
	 */
	public function createServiceLinkaModel()
	{
		$service = new Models\Admin\Linka($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return Models\Linky
	 */
	public function createServiceLinkyModel()
	{
		$service = new Models\Linky($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return Nette\Mail\IMailer
	 */
	public function createServiceMail__mailer()
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	/**
	 * @return Latte\Engine
	 */
	public function createServiceNette__latte()
	{
		$service = new Latte\Engine;
		trigger_error('Service nette.latte is deprecated, implement Nette\Bridges\ApplicationLatte\ILatteFactory.',
			16384);
		$service->setTempDirectory('/www/jvitasek.cz/iis.jvitasek.cz/app/../temp/cache/latte');
		$service->setAutoRefresh(FALSE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		return $service;
	}


	/**
	 * @return Nette\Application\IRouter
	 */
	public function createServiceRouting__router()
	{
		$service = App\RouterFactory::createRouter();
		if (!$service instanceof Nette\Application\IRouter) {
			throw new Nette\UnexpectedValueException('Unable to create service \'routing.router\', value returned by factory is not Nette\Application\IRouter type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Security\User
	 */
	public function createServiceSecurity__user()
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'), $this->getService('authModel'));
		return $service;
	}


	/**
	 * @return Nette\Security\IUserStorage
	 */
	public function createServiceSecurity__userStorage()
	{
		$service = new Nette\Http\UserStorage($this->getService('session.session'));
		return $service;
	}


	/**
	 * @return Nette\Http\Session
	 */
	public function createServiceSession__session()
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		return $service;
	}


	/**
	 * @return Models\Stops
	 */
	public function createServiceStopsModel()
	{
		$service = new Models\Stops($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return Models\Admin\Times
	 */
	public function createServiceTimesModel()
	{
		$service = new Models\Admin\Times($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return Tracy\Bar
	 */
	public function createServiceTracy__bar()
	{
		$service = Tracy\Debugger::getBar();
		if (!$service instanceof Tracy\Bar) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.bar\', value returned by factory is not Tracy\Bar type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\BlueScreen
	 */
	public function createServiceTracy__blueScreen()
	{
		$service = Tracy\Debugger::getBlueScreen();
		if (!$service instanceof Tracy\BlueScreen) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.blueScreen\', value returned by factory is not Tracy\BlueScreen type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\ILogger
	 */
	public function createServiceTracy__logger()
	{
		$service = Tracy\Debugger::getLogger();
		if (!$service instanceof Tracy\ILogger) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.logger\', value returned by factory is not Tracy\ILogger type.');
		}
		return $service;
	}


	/**
	 * @return Models\Admin\User
	 */
	public function createServiceUserModel()
	{
		$service = new Models\Admin\User($this->getService('database.default.context'));
		return $service;
	}


	public function initialize()
	{
		date_default_timezone_set('Europe/Prague');
		header('X-Frame-Options: SAMEORIGIN');
		header('X-Powered-By: Nette Framework');
		header('Content-Type: text/html; charset=utf-8');
		Nette\Reflection\AnnotationsParser::setCacheStorage($this->getByType("Nette\Caching\IStorage"));
		Nette\Reflection\AnnotationsParser::$autoRefresh = FALSE;
		$this->getService('session.session')->exists() && $this->getService('session.session')->start();
	}

}



final class Container_26e24edeb1_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory implements Nette\Bridges\ApplicationLatte\ILatteFactory
{
	private $container;


	public function __construct(Container_26e24edeb1 $container)
	{
		$this->container = $container;
	}


	public function create()
	{
		$service = new Latte\Engine;
		$service->setTempDirectory('/www/jvitasek.cz/iis.jvitasek.cz/app/../temp/cache/latte');
		$service->setAutoRefresh(FALSE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		return $service;
	}

}

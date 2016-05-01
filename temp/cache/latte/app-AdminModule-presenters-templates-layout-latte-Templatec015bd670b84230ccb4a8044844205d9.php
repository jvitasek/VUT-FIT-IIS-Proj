<?php
// source: /www/jvitasek.cz/iis.jvitasek.cz/app/AdminModule/presenters/templates/@layout.latte

class Templatec015bd670b84230ccb4a8044844205d9 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('86cb2017c5', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block head
//
if (!function_exists($_b->blocks['head'][] = '_lb7e97030414_head')) { function _lb7e97030414_head($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lbb5491c4177_scripts')) { function _lbb5491c4177_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<script src="//nette.github.io/resources/js/netteForms.min.js"></script>
	<script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/backend/js/main.js"></script>
<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
?>
<!DOCTYPE html>
<html lang="cs">
<head>
	<meta charset="utf-8">

	<title><?php if (isset($_b->blocks["title"])) { ob_start(); Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'title', $template->getParameters()); echo $template->striptags(ob_get_clean()) ?>
 | <?php } ?>Administrace | IIS</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/backend/css/style.css">
	<link rel="shortcut icon" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/favicon.ico">
	<meta name="viewport" content="width=device-width">
	<?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['head']), $_b, get_defined_vars())  ?>

</head>

<body<?php if ($_l->tmp = array_filter(array($presenter->isLinkCurrent('Login:') ? 'login-bg' : NULL))) echo ' class="', Latte\Runtime\Filters::escapeHtml(implode(" ", array_unique($_l->tmp)), ENT_COMPAT), '"' ?>>
	<div class="container">
<?php if (!$presenter->isLinkCurrent('Login:')) { ?>		<nav>
			<ul class="nav nav-tabs">
			  <li role="presentation"<?php if ($_l->tmp = array_filter(array($presenter->isLinkCurrent('Admin:default') ? 'active' : NULL))) echo ' class="', Latte\Runtime\Filters::escapeHtml(implode(" ", array_unique($_l->tmp)), ENT_COMPAT), '"' ?>
><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Admin:default"), ENT_COMPAT) ?>
">Panel</a></li>
			  <li role="presentation"<?php if ($_l->tmp = array_filter(array($presenter->isLinkCurrent('Linky:*') || $presenter->isLinkCurrent('Cross:*') ? 'active' : NULL))) echo ' class="', Latte\Runtime\Filters::escapeHtml(implode(" ", array_unique($_l->tmp)), ENT_COMPAT), '"' ?>
><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Linky:default"), ENT_COMPAT) ?>
">Linky <span class="caret"></span></a>
			  	<ul class="dropdown-menu">
			    	<li role="presentation"><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Linky:"), ENT_COMPAT) ?>
">Linky</a></li>
			    	<li role="presentation"><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Cross:"), ENT_COMPAT) ?>
">Zastávky linky</a></li>
			    </ul>
			  </li>
			  <li role="presentation"<?php if ($_l->tmp = array_filter(array($presenter->isLinkCurrent('Stops:*') || $presenter->isLinkCurrent('Times:*') ? 'active' : NULL))) echo ' class="', Latte\Runtime\Filters::escapeHtml(implode(" ", array_unique($_l->tmp)), ENT_COMPAT), '"' ?>
><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Stops:default"), ENT_COMPAT) ?>
">Zastávky <span class="caret"></span></a>
			  	<ul class="dropdown-menu">
			    	<li role="presentation"><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Stops:"), ENT_COMPAT) ?>
">Seznam</a></li>
			    	<li role="presentation"><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Times:"), ENT_COMPAT) ?>
">Časy</a></li>
			    </ul>
			  </li>
			  <li role="presentation"<?php if ($_l->tmp = array_filter(array($presenter->isLinkCurrent('Users:default') ? 'active' : NULL))) echo ' class="', Latte\Runtime\Filters::escapeHtml(implode(" ", array_unique($_l->tmp)), ENT_COMPAT), '"' ?>
><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Users:default"), ENT_COMPAT) ?>
">Uživatelé</a></li>
<?php if (!$user->isLoggedIn()) { ?>			  <li role="presentation"><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Login:"), ENT_COMPAT) ?>
">Login</a></li>
<?php } if ($user->isLoggedIn()) { ?>			  <li role="presentation"><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Login:logout"), ENT_COMPAT) ?>
">Logout</a></li>
<?php } ?>
			  <li role="presentation" style="float: right;"><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link(":Front:Homepage:Default"), ENT_COMPAT) ?>
">Frontend</a></li>
			</ul>
		</nav>
<?php } $iterations = 0; foreach ($flashes as $flash) { ?>		<div<?php if ($_l->tmp = array_filter(array('flash', $flash->type))) echo ' class="', Latte\Runtime\Filters::escapeHtml(implode(" ", array_unique($_l->tmp)), ENT_COMPAT), '"' ?>
><?php echo Latte\Runtime\Filters::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; } if (!$presenter->isLinkCurrent('Login:')) { if ($user->isLoggedIn()) { Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'content', $template->getParameters()) ;} else { ?>
				<p>Pro zobrazení této stránky je nutné přihlášení
<?php } } else { Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'content', $template->getParameters()) ;} ?>
	</div>

<?php call_user_func(reset($_b->blocks['scripts']), $_b, get_defined_vars())  ?>
</body>
</html>
<?php
}}
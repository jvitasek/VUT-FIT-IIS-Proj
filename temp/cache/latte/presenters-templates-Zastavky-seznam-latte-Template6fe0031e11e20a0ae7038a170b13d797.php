<?php
// source: /www/jvitasek.cz/iis.jvitasek.cz/app/FrontModule/presenters/templates/Zastavky/seznam.latte

class Template6fe0031e11e20a0ae7038a170b13d797 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('688ceb5f87', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb7559cd2e64_content')) { function _lb7559cd2e64_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>

<table class="table">
	<thead>
		<tr>
			<th>Jméno</th>
			<th>GPS</th>
			<th>Bezbariérovost</th>
		</tr>
	</thead>
<?php $iterations = 0; foreach ($zastavky as $zastavka) { ?>	<tr>
		<td><?php echo Latte\Runtime\Filters::escapeHtml($zastavka->jmeno, ENT_NOQUOTES) ?></td>
		<td><?php echo Latte\Runtime\Filters::escapeHtml($zastavka->gps, ENT_NOQUOTES) ?></td>
		<td><?php echo Latte\Runtime\Filters::escapeHtml($zastavka->bezbarierovost, ENT_NOQUOTES) ?></td>
	</tr>
<?php $iterations++; } ?>
</table><?php
}}

//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lb5857d6a19f_title')) { function _lb5857d6a19f_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><h2>Zastávky</h2>
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

<?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}
<?php
// source: /www/jvitasek.cz/iis.jvitasek.cz/app/FrontModule/presenters/templates/Linky/seznam.latte

class Templatee229e6acbf50f42b0f11aa28abcede81 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('d6f7167057', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb3a63858fa4_content')) { function _lb3a63858fa4_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>

<table class="table">
	<thead>
		<tr>
			<th>Číslo</th>
			<th>Jméno</th>
			<th>Typ</th>
		</tr>
	</thead>
<?php $iterations = 0; foreach ($linky as $linka) { ?>	<tr>
		<td><?php echo Latte\Runtime\Filters::escapeHtml($linka->cislo, ENT_NOQUOTES) ?></td>
		<td><?php echo Latte\Runtime\Filters::escapeHtml($linka->jmeno, ENT_NOQUOTES) ?></td>
		<td><?php echo Latte\Runtime\Filters::escapeHtml($linka->typ, ENT_NOQUOTES) ?></td>
	</tr>
<?php $iterations++; } ?>
</table><?php
}}

//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lb79f3530e5c_title')) { function _lb79f3530e5c_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><h2>Linky</h2>
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
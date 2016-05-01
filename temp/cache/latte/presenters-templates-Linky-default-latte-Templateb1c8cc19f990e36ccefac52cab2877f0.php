<?php
// source: /www/jvitasek.cz/iis.jvitasek.cz/app/AdminModule/presenters/templates/Linky/default.latte

class Templateb1c8cc19f990e36ccefac52cab2877f0 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('41c98abca2', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb0e9fccc19f_content')) { function _lb0e9fccc19f_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($user->isInRole('admin')) { $_l->tmp = $_control->getComponent("linkaForm"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ;} ?>

<table class="tab-linky table">
	<thead>
		<tr>
			<th>Název linky</th>
			<th>Časy linky</th>
			<th>Číslo linky</th>
			<th>Typ linky</th>
			<?php if ($user->isInRole('admin')) { ?><th class="last">Smazat</th><?php } ?>

		</tr>
	</thead>
<?php $iterations = 0; foreach ($linky as $linka) { ?>	<tr>
		<td><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Linky:zastavky", array($linka->id)), ENT_COMPAT) ?>
"><?php echo Latte\Runtime\Filters::escapeHtml($linka->jmeno, ENT_NOQUOTES) ?></a></td>
		<td><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Linky:casy", array($linka->id)), ENT_COMPAT) ?>
">Upravit časy</a></td>
		<td><?php echo Latte\Runtime\Filters::escapeHtml($linka->cislo, ENT_NOQUOTES) ?></td>
		<td><?php echo Latte\Runtime\Filters::escapeHtml($linka->typ, ENT_NOQUOTES) ?></td>
		<?php if ($user->isInRole('admin')) { ?><td class="last"><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Delete!", array($linka->id)), ENT_COMPAT) ?>
"><i class="fa fa-times del"></i></a></td><?php } ?>

	</tr>
<?php $iterations++; } ?>
</table><?php
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
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}
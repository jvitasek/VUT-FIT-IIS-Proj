<?php
// source: /www/jvitasek.cz/iis.jvitasek.cz/app/AdminModule/presenters/templates/Stops/default.latte

class Templatea13ef8cfef35d77d1690371e43ace840 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('0df52e48d1', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb7fa5880010_content')) { function _lb7fa5880010_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($user->isInRole('admin')) { $_l->tmp = $_control->getComponent("stopForm"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ;} ?>

<table class="tab-linky table">
	<thead>
		<tr>
			<th>Název zastávky</th>
			<th>GPS</th>
			<th>Bezbariérovost</th>
			<?php if ($user->isInRole('admin')) { ?><th class="last">Smazat</th><?php } ?>

		</tr>
	</thead>
<?php $iterations = 0; foreach ($stops as $stop) { ?>	<tr>
		<td><?php echo Latte\Runtime\Filters::escapeHtml($stop->jmeno, ENT_NOQUOTES) ?></td>
		<td><?php echo Latte\Runtime\Filters::escapeHtml($stop->gps, ENT_NOQUOTES) ?></td>
		<td><?php echo Latte\Runtime\Filters::escapeHtml($stop->bezbarierovost == 0 ? 'Ne' : 'Ano', ENT_NOQUOTES) ?></td>
		<?php if ($user->isInRole('admin')) { ?><td class="last"><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Delete!", array($stop->id)), ENT_COMPAT) ?>
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
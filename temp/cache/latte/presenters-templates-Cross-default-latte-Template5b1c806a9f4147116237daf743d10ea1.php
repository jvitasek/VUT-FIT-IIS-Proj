<?php
// source: /www/jvitasek.cz/iis.jvitasek.cz/app/AdminModule/presenters/templates/Cross/default.latte

class Template5b1c806a9f4147116237daf743d10ea1 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('9e83a5b3b2', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb03e9c96458_content')) { function _lb03e9c96458_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><section class="disclaimer">
	<p>Při uložení se všechny zastávky týkající se dané linky <b>smažou</b> a přepíšou se nově vybranými.</p>
</section>
<?php if ($user->isInRole('admin')) { $_l->tmp = $_control->getComponent("crossForm"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ;} 
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
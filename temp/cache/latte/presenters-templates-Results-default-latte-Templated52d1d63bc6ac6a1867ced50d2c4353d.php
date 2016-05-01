<?php
// source: /www/jvitasek.cz/iis.jvitasek.cz/app/FrontModule/presenters/templates/Results/default.latte

class Templated52d1d63bc6ac6a1867ced50d2c4353d extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('cd7ecbc84d', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb3c6faac4fb_content')) { function _lb3c6faac4fb_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>

<table class="table">
	<thead>
		<tr>
			<th>Odkud/kam</th>
			<th>Příjezd</th>
			<th>Odjezd</th>
			<th>Linka</th>
		</tr>
	</thead>
<?php $iterations = 0; foreach ($casy as $linka => $casy) { ?>
	<?php
		$regex = preg_match("#([0-9]+);(.*);(.*)#", $casy, $match);
		$linka_id = $match[1];
		$odjezd = $match[2];
		$prijezd = $match[3];
		$linka_cislo = $template->presenter->getCisloLinky($linka_id)	?>
	<tr>
		<td><?php echo Latte\Runtime\Filters::escapeHtml($od_zastavky, ENT_NOQUOTES) ?></td>
		<td>></td>
		<td><?php echo Latte\Runtime\Filters::escapeHtml($odjezd, ENT_NOQUOTES) ?></td>
		<td class="last"><?php echo Latte\Runtime\Filters::escapeHtml($linka_cislo, ENT_NOQUOTES) ?></td>
	</tr>
	<tr class="last-row">
		<td><?php echo Latte\Runtime\Filters::escapeHtml($do_zastavky, ENT_NOQUOTES) ?></td>
		<td><?php echo Latte\Runtime\Filters::escapeHtml($prijezd, ENT_NOQUOTES) ?></td>
		<td>></td>
		<td class="last"><?php echo Latte\Runtime\Filters::escapeHtml($linka_cislo, ENT_NOQUOTES) ?></td>
	</tr>
<?php $iterations++; } ?>
</table>
<?php
}}

//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lb256e258fd3_title')) { function _lb256e258fd3_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><h2><?php echo Latte\Runtime\Filters::escapeHtml($od_zastavky, ENT_NOQUOTES) ?>
 – <?php echo Latte\Runtime\Filters::escapeHtml($do_zastavky, ENT_NOQUOTES) ?></h2>
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
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}
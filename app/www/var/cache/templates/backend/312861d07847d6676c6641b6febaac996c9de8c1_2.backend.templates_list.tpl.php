<?php
/* Smarty version 4.1.1, created on 2024-06-11 11:11:27
  from '/app/www/design/backend/templates/views/debugger/components/templates_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_666806af490486_31904845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '312861d07847d6676c6641b6febaac996c9de8c1' => 
    array (
      0 => '/app/www/design/backend/templates/views/debugger/components/templates_list.tpl',
      1 => 1716808809,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
    'backend:views/debugger/components/templates_list.tpl' => 2,
  ),
),false)) {
function content_666806af490486_31904845 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
		<li>
			<a><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['childs']) {?>
				<?php $_smarty_tpl->_subTemplateRender("backend:views/debugger/components/templates_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('list'=>$_smarty_tpl->tpl_vars['item']->value['childs']), 0, true);
?>
			<?php }?>
		</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}

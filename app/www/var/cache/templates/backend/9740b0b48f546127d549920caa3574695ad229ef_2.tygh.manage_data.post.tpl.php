<?php
/* Smarty version 4.1.1, created on 2024-05-28 16:47:59
  from '/app/www/design/backend/templates/addons/tags_ext/hooks/orders/manage_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655e08fd5b8b8_41694282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9740b0b48f546127d549920caa3574695ad229ef' => 
    array (
      0 => '/app/www/design/backend/templates/addons/tags_ext/hooks/orders/manage_data.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6655e08fd5b8b8_41694282 (Smarty_Internal_Template $_smarty_tpl) {
?><td>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['o']->value['tags'], 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8');?>
,
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</td>

<?php }
}

<?php
/* Smarty version 4.1.1, created on 2024-05-28 13:55:36
  from '/app/www/design/backend/templates/addons/barcode/hooks/orders/staff_only_note.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655b8289dc335_29232687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62754573af595015484dc402132c07cedad6ea83' => 
    array (
      0 => '/app/www/design/backend/templates/addons/barcode/hooks/orders/staff_only_note.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6655b8289dc335_29232687 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="center">
    <img src="<?php echo htmlspecialchars((string) fn_url("image.barcode?id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&type=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['type'])."&width=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['width'])."&height=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['height'])."&xres=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['resolution'])."&font=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['text_font'])."&no_session=Y"), ENT_QUOTES, 'UTF-8');?>
" alt="BarCode" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['barcode']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['barcode']['height'], ENT_QUOTES, 'UTF-8');?>
">
</div><?php }
}

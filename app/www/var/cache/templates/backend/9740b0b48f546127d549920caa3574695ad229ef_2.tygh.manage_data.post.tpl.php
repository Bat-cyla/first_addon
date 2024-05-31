<?php
/* Smarty version 4.1.1, created on 2024-05-31 15:42:41
  from '/app/www/design/backend/templates/addons/tags_ext/hooks/orders/manage_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6659c5c19aad60_23712944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9740b0b48f546127d549920caa3574695ad229ef' => 
    array (
      0 => '/app/www/design/backend/templates/addons/tags_ext/hooks/orders/manage_data.post.tpl',
      1 => 1717159354,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6659c5c19aad60_23712944 (Smarty_Internal_Template $_smarty_tpl) {
?><td>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['o']->value['tags'], 'tag', false, NULL, 'order', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_order']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_order']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_order']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_order']->value['total'];
?>
        <?php if ($_smarty_tpl->tpl_vars['tag']->value['status'] == 'A') {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_order']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_order']->value['last'] : null)) {?>
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>

        <?php } else { ?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
,
        <?php }?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</td>

<?php }
}

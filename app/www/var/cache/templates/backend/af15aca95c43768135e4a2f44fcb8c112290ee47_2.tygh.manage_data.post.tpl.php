<?php
/* Smarty version 4.1.1, created on 2024-06-14 15:45:55
  from '/app/www/design/backend/templates/addons/cp_extended_tags/hooks/orders/manage_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_666c3b83602b20_84240182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af15aca95c43768135e4a2f44fcb8c112290ee47' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_extended_tags/hooks/orders/manage_data.post.tpl',
      1 => 1718368316,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666c3b83602b20_84240182 (Smarty_Internal_Template $_smarty_tpl) {
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

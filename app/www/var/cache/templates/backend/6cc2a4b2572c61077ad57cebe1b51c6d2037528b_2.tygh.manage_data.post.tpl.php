<?php
/* Smarty version 4.1.1, created on 2024-06-04 10:31:39
  from '/app/www/design/backend/templates/addons/tags_ext/hooks/profiles/manage_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665ec2dbe60706_32744872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cc2a4b2572c61077ad57cebe1b51c6d2037528b' => 
    array (
      0 => '/app/www/design/backend/templates/addons/tags_ext/hooks/profiles/manage_data.post.tpl',
      1 => 1717486297,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665ec2dbe60706_32744872 (Smarty_Internal_Template $_smarty_tpl) {
?>
<td>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value['tags'], 'tag', false, 'k', 'user', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_user']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_user']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_user']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_user']->value['total'];
?>
        <?php if ($_smarty_tpl->tpl_vars['tag']->value['status'] == 'A') {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_user']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_user']->value['last'] : null)) {?>
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

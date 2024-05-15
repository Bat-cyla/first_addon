<?php
/* Smarty version 4.1.1, created on 2024-05-15 16:38:37
  from '/app/www/design/backend/templates/addons/first_addon/hooks/profiles/manage_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6644badddadda5_05936561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd63b5cbbd1db01f6459bfd599d096251a516e990' => 
    array (
      0 => '/app/www/design/backend/templates/addons/first_addon/hooks/profiles/manage_data.post.tpl',
      1 => 1715780297,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6644badddadda5_05936561 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('id'));
?>
<td width="10%" data-th="<?php echo $_smarty_tpl->__("id");?>
" class="row-status">
    <a class="row-status" href="<?php echo htmlspecialchars((string) fn_url("orders.manage?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&user_type=".((string)$_smarty_tpl->tpl_vars['user']->value['user_type'])), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user']->value['orders_count'], ENT_QUOTES, 'UTF-8');?>

    </a>
</td><?php }
}

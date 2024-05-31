<?php
/* Smarty version 4.1.1, created on 2024-05-30 11:14:07
  from '/app/www/design/backend/templates/addons/tags_ext/hooks/profiles/manage_header.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6658354f10f061_60990805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91a4ce32960bf0bb4d27cbd3a05466fd34968fb5' => 
    array (
      0 => '/app/www/design/backend/templates/addons/tags_ext/hooks/profiles/manage_header.post.tpl',
      1 => 1717056827,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/table_col_head.tpl' => 1,
  ),
),false)) {
function content_6658354f10f061_60990805 (Smarty_Internal_Template $_smarty_tpl) {
?><th width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['email_col_width']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"tags"), 0, false);
?>
</th><?php }
}

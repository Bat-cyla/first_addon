<?php
/* Smarty version 4.1.1, created on 2024-06-10 09:53:21
  from '/app/www/design/backend/templates/addons/cp_extended_tags/hooks/profiles/manage_header.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6666a2e113b822_73526860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '368c6a4a25ce2ea896685e313811899a3196f557' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_extended_tags/hooks/profiles/manage_header.post.tpl',
      1 => 1717768437,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/table_col_head.tpl' => 1,
  ),
),false)) {
function content_6666a2e113b822_73526860 (Smarty_Internal_Template $_smarty_tpl) {
?><th width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['email_col_width']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"tags"), 0, false);
?>
</th><?php }
}

<?php
/* Smarty version 4.1.1, created on 2024-05-15 08:29:42
  from '/app/www/design/backend/templates/addons/vendor_rating/hooks/companies/list_extra_td.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66444846e94e43_11010731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67c484f00315661ff81a7f247dc3b07a7b8e7c2b' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_rating/hooks/companies/list_extra_td.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66444846e94e43_11010731 (Smarty_Internal_Template $_smarty_tpl) {
?><td width="19%"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['absolute_vendor_rating'], ENT_QUOTES, 'UTF-8');?>
</td>
<?php }
}

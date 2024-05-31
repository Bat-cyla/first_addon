<?php
/* Smarty version 4.1.1, created on 2024-05-28 08:59:42
  from '/app/www/design/backend/templates/addons/yml_export/hooks/product_features/variants_list_clone.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665572cea2a231_30562324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ce04a940352a6d1517abf52367552fd76643375' => 
    array (
      0 => '/app/www/design/backend/templates/addons/yml_export/hooks/product_features/variants_list_clone.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665572cea2a231_30562324 (Smarty_Internal_Template $_smarty_tpl) {
?><td>
    <input type="text" name="feature_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][yml2_unit]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['yml2_unit'], ENT_QUOTES, 'UTF-8');?>
" class="span2">
</td>
<?php }
}

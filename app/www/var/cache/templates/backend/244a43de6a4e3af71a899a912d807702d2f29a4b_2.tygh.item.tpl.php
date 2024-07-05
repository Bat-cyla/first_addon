<?php
/* Smarty version 4.1.1, created on 2024-07-03 11:00:51
  from '/app/www/design/backend/templates/views/product_features/components/variants_picker/item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668505330e73a4_49740972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '244a43de6a4e3af71a899a912d807702d2f29a4b' => 
    array (
      0 => '/app/www/design/backend/templates/views/product_features/components/variants_picker/item.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668505330e73a4_49740972 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="object-picker__product-feature-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.name} <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div><?php }
}

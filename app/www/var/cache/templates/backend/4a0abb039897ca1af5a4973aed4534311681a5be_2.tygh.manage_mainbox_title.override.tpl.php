<?php
/* Smarty version 4.1.1, created on 2024-05-27 15:22:26
  from '/app/www/design/backend/templates/addons/vendor_data_premoderation/hooks/products/manage_mainbox_title.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66547b02e34806_90268321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a0abb039897ca1af5a4973aed4534311681a5be' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_data_premoderation/hooks/products/manage_mainbox_title.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66547b02e34806_90268321 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['navigation']->value['dynamic']['sections'][$_smarty_tpl->tpl_vars['navigation']->value['dynamic']['active_section']]) {?>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['navigation']->value['dynamic']['sections'][$_smarty_tpl->tpl_vars['navigation']->value['dynamic']['active_section']]['title'], ENT_QUOTES, 'UTF-8');?>

<?php }
}
}

<?php
/* Smarty version 4.1.1, created on 2024-05-13 10:07:57
  from '/app/www/design/backend/templates/addons/vendor_plans/hooks/profile_fields/field_type_description.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6641bc4daf3fb9_90135121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '085a83fbf0121df98ce01a6130190e9885a30ecd' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_plans/hooks/profile_fields/field_type_description.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6641bc4daf3fb9_90135121 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plan'));
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == (defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null)) {?>
    <?php echo $_smarty_tpl->__("vendor_plan");?>

<?php }
}
}

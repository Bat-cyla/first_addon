<?php
/* Smarty version 4.1.1, created on 2024-06-27 08:25:51
  from '/app/www/design/backend/templates/addons/vendor_plans/hooks/profiles/profile_fields.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667cf7dfa4b3e1_80332695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ef1ddc484631112a5e21d6999f65413afe359f0' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_plans/hooks/profiles/profile_fields.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667cf7dfa4b3e1_80332695 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == (defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null)) {?>
    <!--hide vendor plan field in admin area-->
<?php }
}
}

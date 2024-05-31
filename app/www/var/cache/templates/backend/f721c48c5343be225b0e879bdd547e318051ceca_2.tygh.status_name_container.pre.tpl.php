<?php
/* Smarty version 4.1.1, created on 2024-05-28 17:16:00
  from '/app/www/design/backend/templates/addons/vendor_data_premoderation/hooks/products/status_name_container.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655e7205c7ec7_48364812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f721c48c5343be225b0e879bdd547e318051ceca' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_data_premoderation/hooks/products/status_name_container.pre.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/tooltip.tpl' => 1,
  ),
),false)) {
function content_6655e7205c7ec7_48364812 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
$_smarty_tpl->_assignInScope('approved_status', $_smarty_tpl->tpl_vars['product']->value['status'] !== smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED") && $_smarty_tpl->tpl_vars['product']->value['status'] !== smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL"));
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && !$_smarty_tpl->tpl_vars['approved_status']->value) {?>
    <?php $_smarty_tpl->_assignInScope('non_editable', true ,false ,2);
}
if ($_smarty_tpl->tpl_vars['product']->value['premoderation_reason'] && !$_smarty_tpl->tpl_vars['approved_status']->value) {?>
    <?php $_smarty_tpl->_assignInScope('popup_additional_class', "dropdown--inline" ,false ,2);?>

    <?php ob_start();
echo nl2br($_smarty_tpl->tpl_vars['product']->value['premoderation_reason']);
$_prefixVariable10=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_prefixVariable10), 0, false);
}
}
}

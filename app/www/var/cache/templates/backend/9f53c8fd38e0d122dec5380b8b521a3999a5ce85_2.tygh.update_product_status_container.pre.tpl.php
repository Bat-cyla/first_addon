<?php
/* Smarty version 4.1.1, created on 2024-05-28 08:58:51
  from '/app/www/design/backend/templates/addons/vendor_data_premoderation/hooks/products/update_product_status_container.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655729b8a0d79_72199345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f53c8fd38e0d122dec5380b8b521a3999a5ce85' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_data_premoderation/hooks/products/update_product_status_container.pre.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6655729b8a0d79_72199345 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
$_smarty_tpl->_assignInScope('approved_status', $_smarty_tpl->tpl_vars['product_data']->value['status'] !== smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED") && $_smarty_tpl->tpl_vars['product_data']->value['status'] !== smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL"));
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && !$_smarty_tpl->tpl_vars['approved_status']->value) {?>
    <?php $_smarty_tpl->_assignInScope('non_editable', true ,false ,2);
} elseif (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] && !$_smarty_tpl->tpl_vars['approved_status']->value) {?>
    <?php $_smarty_tpl->_assignInScope('data_product_statuses', array("data-ca-product-statuses"=>"true","data-ca-product-statuses-disapproved"=>smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"),"data-ca-product-statuses-requires-approval"=>smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL")) ,false ,2);
}
if ($_smarty_tpl->tpl_vars['product_data']->value['status'] === smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED")) {?>
    <?php $_smarty_tpl->_assignInScope('product_status_style', "text-error" ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['product_data']->value['status'] === smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL")) {?>
    <?php $_smarty_tpl->_assignInScope('product_status_style', "text-warning" ,false ,2);
}
}
}

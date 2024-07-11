<?php
/* Smarty version 4.1.1, created on 2024-07-10 14:29:15
  from '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/common/pagination.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668e708b68ce78_52546939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '642b6caf0a8c0f021f6d7d53180427c610d14c35' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/common/pagination.pre.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_panel_configurator/config.tpl' => 1,
  ),
),false)) {
function content_668e708b68ce78_52546939 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
if (fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate'] && $_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_panel_configurator/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_assignInScope('show_pagination_open', $_smarty_tpl->tpl_vars['show_pagination_open']->value ,false ,2);
}
}
}

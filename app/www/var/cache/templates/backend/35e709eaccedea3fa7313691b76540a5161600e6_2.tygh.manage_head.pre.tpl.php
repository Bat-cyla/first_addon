<?php
/* Smarty version 4.1.1, created on 2024-05-13 08:55:43
  from '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/products/manage_head.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6641ab5f7a62c6_49249640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35e709eaccedea3fa7313691b76540a5161600e6' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_panel_configurator/hooks/products/manage_head.pre.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_panel_configurator/config.tpl' => 1,
  ),
),false)) {
function content_6641ab5f7a62c6_49249640 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
if (fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate'] && $_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_panel_configurator/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_assignInScope('show_list_price_column', $_smarty_tpl->tpl_vars['show_list_price_column']->value ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('image_width', $_smarty_tpl->tpl_vars['image_width']->value ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('image_height', $_smarty_tpl->tpl_vars['image_height']->value ,false ,2);
}
}
}

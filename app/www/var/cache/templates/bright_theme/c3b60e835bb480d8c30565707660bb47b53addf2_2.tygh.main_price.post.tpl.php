<?php
/* Smarty version 4.1.1, created on 2024-06-27 14:46:52
  from '/app/www/design/themes/responsive/templates/addons/price_per_unit/hooks/products/main_price.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667d512c44f109_26307839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3b60e835bb480d8c30565707660bb47b53addf2' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/price_per_unit/hooks/products/main_price.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667d512c44f109_26307839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('price_per_unit', "price_per_unit_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price_per_unit']->value))) {?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price_per_unit']->value);?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/price_per_unit/hooks/products/main_price.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/price_per_unit/hooks/products/main_price.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('price_per_unit', "price_per_unit_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price_per_unit']->value))) {?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price_per_unit']->value);?>

<?php }
}
}
}

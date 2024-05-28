<?php
/* Smarty version 4.1.1, created on 2024-05-28 08:58:52
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/tabs_content.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655729cbb4277_65712267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ea045b3e52ddcaf380affc2f0fbca3bc060c71b' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/tabs_content.override.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6655729cbb4277_65712267 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("tabs_content")) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_variations:tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_variations:tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_variations:tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}

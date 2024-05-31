<?php
/* Smarty version 4.1.1, created on 2024-05-28 16:18:44
  from '/app/www/design/backend/templates/addons/product_variations/hooks/product_list/product_data.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655d9b4e45b08_77129988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39a52bce0e9cb125d42e634862c802264c49733b' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/product_list/product_data.pre.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6655d9b4e45b08_77129988 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
if ($_smarty_tpl->tpl_vars['product']->value['variation_name']) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_list:picker_product_alt_name"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_list:picker_product_alt_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <input type="hidden" id="product_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_alt" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['variation_name'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_list:picker_product_alt_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}

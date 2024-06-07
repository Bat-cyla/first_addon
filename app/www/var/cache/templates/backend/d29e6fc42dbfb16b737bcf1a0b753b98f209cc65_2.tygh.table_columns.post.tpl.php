<?php
/* Smarty version 4.1.1, created on 2024-05-28 16:18:45
  from '/app/www/design/backend/templates/addons/product_bundles/hooks/product_list/table_columns.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655d9b5029e32_21959426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd29e6fc42dbfb16b737bcf1a0b753b98f209cc65' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_bundles/hooks/product_list/table_columns.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6655d9b5029e32_21959426 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
?>
<input type="hidden" id="price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['base_price'], ENT_QUOTES, 'UTF-8');?>
" />
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['product_options'], 'option', false, 'option_id');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option_id']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['variants'], 'variant', false, 'variant_id');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant_id']->value => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['variant']->value['modifier'] != 0) {?>
            <?php if ($_smarty_tpl->tpl_vars['variant']->value['modifier_type'] == "A") {?>
                <?php $_smarty_tpl->_assignInScope('op_modifier', $_smarty_tpl->tpl_vars['variant']->value['modifier']);?>
            <?php } else { ?>
                <?php echo smarty_function_math(array('equation'=>"(price / 100) * modifier",'price'=>$_smarty_tpl->tpl_vars['product']->value['base_price'],'modifier'=>$_smarty_tpl->tpl_vars['variant']->value['modifier'],'assign'=>"op_modifier"),$_smarty_tpl);?>

            <?php }?>
            <input type="hidden" id="product_bundle_option_modifier_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['op_modifier']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}

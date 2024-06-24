<?php
/* Smarty version 4.1.1, created on 2024-06-04 15:26:37
  from '/app/www/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/thread_object_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665f07fdec7fa8_60482506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38a1d8e5e99343ad23d3e0dd0ad6e23f6fb2bb8d' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/thread_object_data.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 1,
  ),
),false)) {
function content_665f07fdec7fa8_60482506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('product','order','order','order','order'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendor_communication:thread_object_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendor_communication:thread_object_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['object']->value && $_smarty_tpl->tpl_vars['object']->value['object_type'] == (defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null)) {?>
        <?php if ($_smarty_tpl->tpl_vars['new_thread']->value) {?>
            <input type="hidden" name="thread[subject]" id="thread_message_subject_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo $_smarty_tpl->__("product");?>
:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value['product'], ENT_QUOTES, 'UTF-8');?>
"/>
        <?php }?>
        <?php if (fn_check_permissions("products","update","admin")) {?>
            <a href="<?php echo htmlspecialchars((string) fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['object']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"
               class="post-object" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value['product'], ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value['product'], ENT_QUOTES, 'UTF-8');?>

            </a>
        <?php } else { ?>
            <span class="post-object"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value['product'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>

        <div class="additional-info">/
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendor_communication:product_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendor_communication:product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value['product_code'], ENT_QUOTES, 'UTF-8');?>

            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendor_communication:product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <span class="additional-text">/
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['object']->value['price']), 0, false);
?></span>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['object']->value && $_smarty_tpl->tpl_vars['object']->value['object_type'] == (defined('VC_OBJECT_TYPE_ORDER') ? constant('VC_OBJECT_TYPE_ORDER') : null)) {?>
        <?php if ($_smarty_tpl->tpl_vars['new_thread']->value) {?>
            <input type="hidden" name="thread[subject]" id="thread_message_subject_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo $_smarty_tpl->__("order");?>
 #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
"/>
        <?php }?>
        <?php if (fn_check_permissions("orders","details","admin")) {?>
            <a href="<?php echo htmlspecialchars((string) fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['object']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"
               class="post-object" title="<?php echo $_smarty_tpl->__("order");?>
 #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->__("order");?>
 #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value['order_id'], ENT_QUOTES, 'UTF-8');?>

            </a>
        <?php } else { ?>
            <span class="post-object"><?php echo $_smarty_tpl->__("order");?>
 #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>

        <div class="additional-info">/
            <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['object']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendor_communication:thread_object_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}

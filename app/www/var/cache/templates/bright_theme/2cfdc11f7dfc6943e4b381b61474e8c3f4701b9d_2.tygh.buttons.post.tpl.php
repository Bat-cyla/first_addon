<?php
/* Smarty version 4.1.1, created on 2024-07-11 11:56:06
  from '/app/www/design/themes/responsive/templates/addons/wishlist/hooks/gift_certificates/buttons.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668f9e26757743_85698270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cfdc11f7dfc6943e4b381b61474e8c3f4701b9d' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/wishlist/hooks/gift_certificates/buttons.post.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl' => 2,
  ),
),false)) {
function content_668f9e26757743_85698270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>&nbsp;&nbsp;&nbsp;<?php $_smarty_tpl->_subTemplateRender("tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('wishlist_but_name'=>"dispatch[gift_certificates.wishlist_add]"), 0, false);
?>
<input type="hidden" name="result_ids" value="cart_status*,wish_list*,account_info*,gift_certificate*" />
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/gift_certificates/buttons.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/gift_certificates/buttons.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>&nbsp;&nbsp;&nbsp;<?php $_smarty_tpl->_subTemplateRender("tygh:addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('wishlist_but_name'=>"dispatch[gift_certificates.wishlist_add]"), 0, true);
?>
<input type="hidden" name="result_ids" value="cart_status*,wish_list*,account_info*,gift_certificate*" />
<?php }
}
}

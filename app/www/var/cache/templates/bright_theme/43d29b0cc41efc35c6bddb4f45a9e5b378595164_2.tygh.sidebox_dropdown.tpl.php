<?php
/* Smarty version 4.1.1, created on 2024-07-04 16:42:13
  from '/app/www/design/themes/responsive/templates/blocks/sidebox_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6686a6b5601be8_13110737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43d29b0cc41efc35c6bddb4f45a9e5b378595164' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/sidebox_dropdown.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/sidebox_dropdown.tpl' => 3,
  ),
),false)) {
function content_6686a6b5601be8_13110737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:sidebox_dropdown"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:sidebox_dropdown_element"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_element"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><li class="ty-menu__item cm-menu-item-responsive <?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>dropdown-vertical__dir<?php }
if ($_smarty_tpl->tpl_vars['item']->value['active'] || fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__item-active<?php }?> menu-level-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"><?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><div class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-menu__icon-open"),$_smarty_tpl);
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-menu__icon-hide"),$_smarty_tpl);?>
</div><div class="ty-menu__item-arrow hidden-phone"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-open"),$_smarty_tpl);
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-left-open"),$_smarty_tpl);?>
</div><?php }
$_smarty_tpl->_assignInScope('item_url', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['block']->value['type']));?><div class="ty-menu__submenu-item-header"><a<?php if ($_smarty_tpl->tpl_vars['item_url']->value) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['new_window']) {?>target="_blank"<?php }?> class="ty-menu__item-link"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</a></div><?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value]) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:sidebox_dropdown_childs"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_childs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><div class="ty-menu__submenu"><ul class="ty-menu__submenu-items cm-responsive-menu-submenu"><?php $_smarty_tpl->_subTemplateRender("tygh:blocks/sidebox_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value],'separated'=>true,'submenu'=>true,'iid'=>$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['item_id']->value],'level'=>$_smarty_tpl->tpl_vars['level']->value+1), 0, true);
?></ul></div><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_childs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?></li><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_element"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/sidebox_dropdown.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/sidebox_dropdown.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:sidebox_dropdown"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:sidebox_dropdown_element"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_element"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><li class="ty-menu__item cm-menu-item-responsive <?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>dropdown-vertical__dir<?php }
if ($_smarty_tpl->tpl_vars['item']->value['active'] || fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__item-active<?php }?> menu-level-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['class'], ENT_QUOTES, 'UTF-8');
}?>"><?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><div class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-menu__icon-open"),$_smarty_tpl);
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-menu__icon-hide"),$_smarty_tpl);?>
</div><div class="ty-menu__item-arrow hidden-phone"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-open"),$_smarty_tpl);
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-left-open"),$_smarty_tpl);?>
</div><?php }
$_smarty_tpl->_assignInScope('item_url', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['block']->value['type']));?><div class="ty-menu__submenu-item-header"><a<?php if ($_smarty_tpl->tpl_vars['item_url']->value) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['new_window']) {?>target="_blank"<?php }?> class="ty-menu__item-link"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</a></div><?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value]) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:sidebox_dropdown_childs"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_childs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><div class="ty-menu__submenu"><ul class="ty-menu__submenu-items cm-responsive-menu-submenu"><?php $_smarty_tpl->_subTemplateRender("tygh:blocks/sidebox_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['childs']->value],'separated'=>true,'submenu'=>true,'iid'=>$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['item_id']->value],'level'=>$_smarty_tpl->tpl_vars['level']->value+1), 0, true);
?></ul></div><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_childs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?></li><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown_element"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:sidebox_dropdown"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}

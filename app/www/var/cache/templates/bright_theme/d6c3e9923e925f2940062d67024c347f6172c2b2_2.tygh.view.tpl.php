<?php
/* Smarty version 4.1.1, created on 2024-05-29 11:10:06
  from '/app/www/design/themes/responsive/templates/addons/tags/views/tags/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656e2de0528f3_90379080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6c3e9923e925f2940062d67024c347f6172c2b2' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/tags/views/tags/view.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 4,
  ),
),false)) {
function content_6656e2de0528f3_90379080 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('products','pages','no_data','products','pages','no_data'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_products'] == "Y" && $_smarty_tpl->tpl_vars['products']->value) {?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("products")), 0, false);
?>
    
    <?php $_smarty_tpl->_assignInScope('layouts', fn_get_products_views('',false,0));?>
    
    <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']), 0, true);
?>
    <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_pages'] == "Y" && $_smarty_tpl->tpl_vars['pages']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("pages")), 0, true);
?>

    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
        <li><a href="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"tags:view"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"tags:view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"tags:view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if (!$_smarty_tpl->tpl_vars['tag_objects_exist']->value) {?>
<p class="ty-no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_title']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/tags/views/tags/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/tags/views/tags/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_products'] == "Y" && $_smarty_tpl->tpl_vars['products']->value) {?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("products")), 0, true);
?>
    
    <?php $_smarty_tpl->_assignInScope('layouts', fn_get_products_views('',false,0));?>
    
    <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']), 0, true);
?>
    <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_pages'] == "Y" && $_smarty_tpl->tpl_vars['pages']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("pages")), 0, true);
?>

    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
        <li><a href="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"tags:view"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"tags:view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"tags:view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if (!$_smarty_tpl->tpl_vars['tag_objects_exist']->value) {?>
<p class="ty-no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_title']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}

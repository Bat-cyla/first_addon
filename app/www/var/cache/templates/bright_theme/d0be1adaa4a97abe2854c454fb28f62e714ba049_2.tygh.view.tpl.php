<?php
/* Smarty version 4.1.1, created on 2024-05-15 11:14:50
  from '/app/www/design/themes/responsive/templates/views/pages/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66446efa361346_81545494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0be1adaa4a97abe2854c454fb28f62e714ba049' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/pages/view.tpl',
      1 => 1715579481,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66446efa361346_81545494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.live_edit.php','function'=>'smarty_function_live_edit',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-wysiwyg-content">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div <?php echo smarty_function_live_edit(array('name'=>"page:description:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>
</div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?><span <?php echo smarty_function_live_edit(array('name'=>"page:page:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/pages/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/pages/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-wysiwyg-content">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div <?php echo smarty_function_live_edit(array('name'=>"page:description:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>
</div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?><span <?php echo smarty_function_live_edit(array('name'=>"page:page:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}

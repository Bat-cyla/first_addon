<?php
/* Smarty version 4.1.1, created on 2024-06-05 11:49:16
  from '/app/www/design/backend/templates/views/block_manager/update_custom_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6660268cd67fc7_19533716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb11b2ae8d9f054a7af5cea4f929add24cce6830' => 
    array (
      0 => '/app/www/design/backend/templates/views/block_manager/update_custom_block.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_6660268cd67fc7_19533716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('custom_blocks.name','custom_blocks.url','custom_blocks.url.hint','custom_blocks.first_menu_level_url.hint','open_in_new_window','custom_blocks.content','save','create'));
if ($_smarty_tpl->tpl_vars['object_type']->value === "custom_block") {
$_smarty_tpl->_assignInScope('show_descr', false);
$_smarty_tpl->_assignInScope('show_url', false);
$_smarty_tpl->_assignInScope('show_content', true);
} elseif ($_smarty_tpl->tpl_vars['object_type']->value === "menu_item") {
$_smarty_tpl->_assignInScope('show_descr', true);
$_smarty_tpl->_assignInScope('show_url', true);
$_smarty_tpl->_assignInScope('show_content', false);
} else {
$_smarty_tpl->_assignInScope('show_descr', true);
$_smarty_tpl->_assignInScope('show_url', false);
$_smarty_tpl->_assignInScope('show_content', false);
}?><div class="block-manager-update-custom-block"><form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"method="post"name="update_custom_block_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"enctype="multipart/form-data" class="form-horizontal form-edit" ><input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['return_url']->value ?? null)===null||$tmp==='' ? 'index.index' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="block_data[block_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="block_data[section]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_block']->value['section'], ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="block_data[type]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_block']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="block_data[id_path]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_block']->value['id_path'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['notifications']->value) {?><div class="block-manager-update-custom-block__notifications"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value, 'notification');
$_smarty_tpl->tpl_vars['notification']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notification']->value) {
$_smarty_tpl->tpl_vars['notification']->do_else = false;
?><div class="alert alert-block"><p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['notification']->value, ENT_QUOTES, 'UTF-8');?>
</p></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
if ($_smarty_tpl->tpl_vars['show_descr']->value) {?><div class="control-group"><label for="custom_block_descr_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("custom_blocks.name");?>
:</label><div class="controls"><input type="text" id="custom_block_descr_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"size="40"class="input-large"name="block_data[title]"value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_block']->value['title'], ENT_QUOTES, 'UTF-8');?>
"/></div></div><?php }
if ($_smarty_tpl->tpl_vars['show_url']->value) {?><div class="control-group"><label for="custom_block_url_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if ($_smarty_tpl->tpl_vars['custom_block']->value['menu_level'] !== "1") {?>cm-required<?php }?>"><?php echo $_smarty_tpl->__("custom_blocks.url");?>
:</label><div class="controls"><input type="text" id="custom_block_url_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"size="40"class="input-large"name="block_data[href]"value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_block']->value['href'], ENT_QUOTES, 'UTF-8');?>
"/><p class="muted description"><?php if ($_smarty_tpl->tpl_vars['custom_block']->value['menu_level'] !== "1") {
echo $_smarty_tpl->__("custom_blocks.url.hint");
} else {
echo $_smarty_tpl->__("custom_blocks.first_menu_level_url.hint");
}?></p></div></div><div class="control-group"><label for="custom_block_new_window_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("open_in_new_window");?>
:</label><div class="controls"><input type="hidden" name="block_data[new_window]" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" /><input type="checkbox" id="custom_block_new_window_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" name="block_data[new_window]" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['custom_block']->value['new_window'] === smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?> /></div></div><?php }
if ($_smarty_tpl->tpl_vars['show_content']->value) {?><div class="control-group"><label for="custom_block_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("custom_blocks.content");?>
:</label><div class="controls"><textarea id="custom_block_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"name="block_data[content]"cols="55"rows="8"class="cm-wysiwyg input-large"><?php echo $_smarty_tpl->tpl_vars['custom_block']->value['content'];?>
</textarea></div></div><?php }?><div class="buttons-container"><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->tpl_vars['custom_block']->value['block_id'] ? $_smarty_tpl->__("save") : $_smarty_tpl->__("create"),'but_role'=>"submit-button",'but_name'=>$_smarty_tpl->tpl_vars['object_type']->value === "menu_item" ? "dispatch[custom_menu.update_block]" : "dispatch[index.update_block]"), 0, false);
?></div></form></div><?php }
}

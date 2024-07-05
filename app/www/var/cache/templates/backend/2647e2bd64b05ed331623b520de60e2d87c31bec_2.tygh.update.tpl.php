<?php
/* Smarty version 4.1.1, created on 2024-07-04 08:11:33
  from '/app/www/design/backend/templates/addons/cp_generate_cart_from_file/views/cp_generate_cart_from_file/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66862f0569fd58_16259039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2647e2bd64b05ed331623b520de60e2d87c31bec' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_generate_cart_from_file/views/cp_generate_cart_from_file/update.tpl',
      1 => 1719490045,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/save_cancel.tpl' => 2,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66862f0569fd58_16259039 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('name','upload_file','download','cp_template_default','cp_template_default','delete','cp_add_template'));
if ($_smarty_tpl->tpl_vars['template_data']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['template_data']->value['template_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
    method="post"
    class="form-horizontal form-edit"
    name="cp_template_form"
    enctype="multipart/form-data">

        <input type="hidden" class="cm-no-hide-input" name="fake" value="1" />
        <input type="hidden" class="cm-no-hide-input" name="template_data[template_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

        <div class="control-group">
            <label for="elm_template_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
            <div class="controls">
                <input type="text" 
                name="template_data[name]"
                id="elm_template_name"
                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                size="25"/>
            </div>
        </div>
        
        <div class="control-group">
            <label for="upload-file" class="control-label"><?php echo $_smarty_tpl->__("upload_file");?>
:</label>
            <div class="controls">
                <input class="upload-file" type="file" name="cp_attachment[]" id="upload-file" accept="xls, xlsx" size="1"/>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['template_data']->value['filename']) {?>
            <div class="controls">
                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template_data']->value['path_to_file'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template_data']->value['filename'], ENT_QUOTES, 'UTF-8');?>
</a>&nbsp; (<a href="<?php echo htmlspecialchars((string) fn_url("cp_generate_cart_from_file.get_file?attachment_id=".((string)$_smarty_tpl->tpl_vars['template_data']->value['attachment_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("download");?>
</a>)
                &nbsp;
            </div>
            <?php }?>
        </div>
        
        <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__("cp_template_default");?>
:</label>
                <div class="controls">
                    <input type="checkbox" checked="checked" name= "template_data[default_template]" value= "Y"/>
                </div>
            </div>
        <?php } else { ?>
            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__("cp_template_default");?>
:</label>
                <div class="controls">
                    <?php if ($_smarty_tpl->tpl_vars['template_data']->value['default_template'] === "Y") {?>
                        <input type="checkbox" checked="checked" name= "template_data[default_template]" value= "Y"/>
                    <?php } else { ?>
                        <input type="checkbox" name= "template_data[default_template]" value= "Y"/>
                    <?php }?>
                </div>
            </div>
        <?php }?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
            <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"cp_generate_cart_from_file.delete?template_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'method'=>"POST"), true);?>

                    </li>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php }?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
            <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit-link",'but_target_form'=>"cp_template_form",'but_name'=>"dispatch[cp_generate_cart_from_file.update]"), 0, false);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[cp_generate_cart_from_file.update]",'but_role'=>"submit-link",'but_target_form'=>"cp_template_form",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'hide_second_button'=>$_smarty_tpl->tpl_vars['hide_second_button']->value,'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, true);
?>
            <?php }?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    </form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>


<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['id']->value ? $_smarty_tpl->tpl_vars['template_data']->value['name'] : $_smarty_tpl->__("cp_add_template"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons')), 0, false);
}
}

<?php
/* Smarty version 4.1.1, created on 2024-05-31 15:46:08
  from '/app/www/design/backend/templates/views/static_data/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6659c690162620_72972370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d7720a93d7ec4909c29a8ce67f741a900616eee' => 
    array (
      0 => '/app/www/design/backend/templates/views/static_data/manage.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/static_data/components/multi_list.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:views/static_data/components/single_list.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:views/static_data/update.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6659c690162620_72972370 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_data'));
if ($_smarty_tpl->tpl_vars['language_direction']->value == "rtl") {?>
    <?php $_smarty_tpl->_assignInScope('direction', "right");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('direction', "left");
}?>

<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="static_data_tree_form" id="static_data_tree_form">
    <?php $_smarty_tpl->_assignInScope('static_data_statuses', fn_get_default_statuses('',true));?>

    <div class="<?php if (!fn_allow_save_object('',"static_data",$_smarty_tpl->tpl_vars['section_data']->value['skip_edition_checking'])) {?> cm-hide-inputs<?php }?>" id="static_data_list">
        <?php if ($_smarty_tpl->tpl_vars['section_data']->value['multi_level'] == true) {?>
            <input name="section" type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->tpl_vars['section_data']->value['owner_object']) {?>
                <?php $_smarty_tpl->_assignInScope('request_key', $_smarty_tpl->tpl_vars['section_data']->value['owner_object']['key']);?>
                <?php $_smarty_tpl->_assignInScope('owner_condition', ((string)$_smarty_tpl->tpl_vars['request_key']->value)."=".((string)$_REQUEST[$_smarty_tpl->tpl_vars['request_key']->value]));?>
                <?php $_smarty_tpl->_assignInScope('request_value', $_REQUEST[$_smarty_tpl->tpl_vars['request_key']->value]);?>

                <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['request_key']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['request_value']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('owner_condition', '');?>
            <?php }?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "static_data_table", null, null);?>
                <div class="items-container multi-level longtap-selection">
                    <?php if ($_smarty_tpl->tpl_vars['static_data']->value) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/static_data/components/multi_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['static_data']->value,'header'=>true,'direction'=>$_smarty_tpl->tpl_vars['direction']->value), 0, false);
?>
                    <?php } else { ?>
                        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
                    <?php }?>
                </div>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"static_data_tree_form",'object'=>"static_data",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'static_data_table')), 0, false);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/static_data/components/single_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    <!--static_data_list--></div>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"static_data:manage_tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"static_data:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"static_data:manage_tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>


        <?php if ($_smarty_tpl->tpl_vars['section_data']->value['multi_level'] == true && $_smarty_tpl->tpl_vars['static_data']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[static_data.m_update]",'but_role'=>"action",'but_target_form'=>"static_data_tree_form",'but_meta'=>"cm-submit"), 0, false);
?>
        <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
        <?php if ($_smarty_tpl->tpl_vars['is_allow_update_static_data']->value && fn_allow_save_object('',"static_data",$_smarty_tpl->tpl_vars['section_data']->value['skip_edition_checking'])) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/static_data/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('static_data'=>array()), 0, false);
?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_section",'text'=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['section_data']->value['add_title']),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'title'=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['section_data']->value['add_button']),'act'=>"general",'icon'=>"icon-plus"), 0, false);
?>
        <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['owner_object_name']->value) {?>
    <?php ob_start();
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['section_data']->value['mainbox_title']);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('title', $_prefixVariable1.": ".((string)$_smarty_tpl->tpl_vars['owner_object_name']->value));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->__($_smarty_tpl->tpl_vars['section_data']->value['mainbox_title']));
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'tools'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'select_languages'=>true,'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons')), 0, false);
}
}

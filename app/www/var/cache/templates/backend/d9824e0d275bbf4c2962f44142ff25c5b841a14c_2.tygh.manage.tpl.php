<?php
/* Smarty version 4.1.1, created on 2024-05-31 15:46:01
  from '/app/www/design/backend/templates/views/menus/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6659c689ab1dc3_19331684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9824e0d275bbf4c2962f44142ff25c5b841a14c' => 
    array (
      0 => '/app/www/design/backend/templates/views/menus/manage.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/object_group.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6659c689ab1dc3_19331684 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('name','status','manage_items','no_data','new_menu','add_menu','menus'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_menus_form" id="manage_menus_form">
        <?php $_smarty_tpl->_assignInScope('r_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
        <?php $_smarty_tpl->_assignInScope('menus_statuses', fn_get_default_statuses('',false));?>

        <div class="items-container" id="manage_tabs_list">
            <?php if ($_smarty_tpl->tpl_vars['menus']->value) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "menus_table", null, null);?>
                    <div class="table-responsive-wrapper longtap-selection">
                        <table class="table table-middle table--relative table-objects table-responsive table-responsive-w-titles">
                            <thead
                                data-ca-bulkedit-default-object="true"
                                data-ca-bulkedit-component="defaultObject"
                            >
                                <tr>
                                    <th width="6%" class="left mobile-hide" >
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>$_smarty_tpl->tpl_vars['menus_statuses']->value), 0, false);
?>

                                        <input type="checkbox"
                                            class="bulkedit-toggler hide"
                                            data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                                            data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                        />
                                    </th>
                                    <th><?php echo $_smarty_tpl->__("name");?>
</th>
                                    <th></th>
                                    <th></th>
                                    <th class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
                                </tr>
                            </thead>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>
                                <?php $_smarty_tpl->_assignInScope('_href_delete', "menus.delete?menu_id=".((string)$_smarty_tpl->tpl_vars['menu']->value['menu_id']));?>        
                                <?php $_smarty_tpl->_assignInScope('dialog_name', $_smarty_tpl->tpl_vars['menu']->value['name']);?>
                                <?php $_smarty_tpl->_assignInScope('name', $_smarty_tpl->tpl_vars['menu']->value['name']);?>
                                <?php $_smarty_tpl->_assignInScope('edit_link', "menus.update?menu_data[menu_id]=".((string)$_smarty_tpl->tpl_vars['menu']->value['menu_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value));?>
                                <?php $_smarty_tpl->_assignInScope('manage_items_link', "static_data.manage?section=A&menu_id=".((string)$_smarty_tpl->tpl_vars['menu']->value['menu_id']));?>
                                
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "items_link", null, null);?>            
                                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("manage_items"),'href'=>$_smarty_tpl->tpl_vars['manage_items_link']->value), true);?>
</li>
                                    <li class="divider"></li>
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['menu']->value['menu_id'],'text'=>$_smarty_tpl->tpl_vars['name']->value,'href'=>$_smarty_tpl->tpl_vars['edit_link']->value,'main_link'=>$_smarty_tpl->tpl_vars['manage_items_link']->value,'href_edit'=>$_smarty_tpl->tpl_vars['edit_link']->value,'href_delete'=>$_smarty_tpl->tpl_vars['_href_delete']->value,'delete_target_id'=>"manage_tabs_list",'header_text'=>$_smarty_tpl->tpl_vars['dialog_name']->value,'table'=>"menus",'object_id_name'=>"menu_id",'status'=>$_smarty_tpl->tpl_vars['menu']->value['status'],'tool_items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'items_link'),'no_table'=>true,'is_bulkedit_menu'=>true,'checkbox_col_width'=>"6%",'checkbox_name'=>"menu_ids[]",'show_checkboxes'=>true,'hidden_checkbox'=>true,'no_padding'=>true), 0, true);
?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </table>
                    </div>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"manage_menus_form",'object'=>"menus",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'menus_table')), 0, false);
?>
            <?php } else { ?>
                <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
            <?php }?>
        <!--manage_tabs_list--></div>

        <div class="buttons-container">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "extra_tools", null, null);?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"currencies:import_rates"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"currencies:import_rates"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"currencies:import_rates"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        </div>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('act'=>"general",'id'=>"add_menu",'text'=>$_smarty_tpl->__("new_menu"),'title'=>$_smarty_tpl->__("add_menu"),'href'=>"menus.update",'opener_ajax_class'=>"cm-ajax",'icon'=>"icon-plus",'content'=>''), 0, false);
?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    </form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("menus"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'select_languages'=>true,'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons')), 0, false);
}
}

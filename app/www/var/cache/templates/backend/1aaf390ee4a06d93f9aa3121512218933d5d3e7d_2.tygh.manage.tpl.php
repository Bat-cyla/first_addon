<?php
/* Smarty version 4.1.1, created on 2024-07-11 12:52:18
  from '/app/www/design/backend/templates/addons/newsletters/views/mailing_lists/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668fab525f82d8_60903738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1aaf390ee4a06d93f9aa3121512218933d5d3e7d' => 
    array (
      0 => '/app/www/design/backend/templates/addons/newsletters/views/mailing_lists/manage.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/object_group.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:addons/newsletters/views/mailing_lists/update.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_668fab525f82d8_60903738 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('name','subscribers_num','status','manage_subscribers','subscribers_num','no_data','new_mailing_lists','add_mailing_lists','mailing_lists'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="mailing_lists_form" id="mailing_lists_form">
    <div class="items-container" id="mailing_lists">
    <?php if ($_smarty_tpl->tpl_vars['mailing_lists']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mailing_lists_table", null, null);?>
            <div class="table-responsive-wrapper longtap-selection">
                <table width="100%" class="table table-middle table--relative table-responsive table-responsive-w-titles">
                    <thead
                            data-ca-bulkedit-default-object="true"
                            data-ca-bulkedit-component="defaultObject"
                    >
                        <tr>
                            <th>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                <input type="checkbox"
                                       class="bulkedit-toggler hide"
                                       data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                       data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                />
                            </th>
                            <th><?php echo $_smarty_tpl->__("name");?>
</th>
                            <th><?php echo $_smarty_tpl->__("subscribers_num");?>
</th>
                            <th width="5%">&nbsp;</th>
                            <th width="15%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mailing_lists']->value, 'mailing_list');
$_smarty_tpl->tpl_vars['mailing_list']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mailing_list']->value) {
$_smarty_tpl->tpl_vars['mailing_list']->do_else = false;
?>

                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tool_items", null, null);?>
                                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("manage_subscribers"),'href'=>"subscribers.manage?list_id=".((string)$_smarty_tpl->tpl_vars['mailing_list']->value['list_id'])), true);?>
</li>
                                <li class="divider"></li>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                            <?php ob_start();
echo $_smarty_tpl->__("subscribers_num");
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_table'=>true,'id'=>$_smarty_tpl->tpl_vars['mailing_list']->value['list_id'],'text'=>$_smarty_tpl->tpl_vars['mailing_list']->value['object'],'status'=>$_smarty_tpl->tpl_vars['mailing_list']->value['status'],'hidden'=>true,'href'=>"mailing_lists.update?list_id=".((string)$_smarty_tpl->tpl_vars['mailing_list']->value['list_id']),'details'=>$_prefixVariable1.": ".((string)$_smarty_tpl->tpl_vars['mailing_list']->value['subscribers_num']),'object_id_name'=>"list_id",'table'=>"mailing_lists",'href_delete'=>"mailing_lists.delete?list_id=".((string)$_smarty_tpl->tpl_vars['mailing_list']->value['list_id']),'delete_target_id'=>"mailing_lists",'header_text'=>$_smarty_tpl->tpl_vars['mailing_list']->value['object'],'tool_items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tool_items'),'is_bulkedit_menu'=>true,'checkbox_col_width'=>"6%",'checkbox_name'=>"list_ids[]",'show_checkboxes'=>true,'hidden_checkbox'=>true,'no_padding'=>true), 0, true);
?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"mailing_lists_form",'object'=>"mailing_lists",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mailing_lists_table')), 0, false);
?>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
    <!--mailing_lists--></div>
</form>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
        <?php if ($_smarty_tpl->tpl_vars['is_allow_update_mailing_lists']->value) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/newsletters/views/mailing_lists/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mailing_list'=>array()), 0, false);
?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_mailing_lists",'text'=>$_smarty_tpl->__("new_mailing_lists"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'title'=>$_smarty_tpl->__("add_mailing_lists"),'act'=>"general",'icon'=>"icon-plus"), 0, false);
?>
        <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("mailing_lists"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'select_languages'=>true), 0, false);
}
}

<?php
/* Smarty version 4.1.1, created on 2024-07-15 08:14:21
  from '/app/www/design/backend/templates/addons/newsletters/views/newsletters/campaigns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6694b02d21d998_69310372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb3300f23506d85591cd2f84fc9145d23ffe470d' => 
    array (
      0 => '/app/www/design/backend/templates/addons/newsletters/views/newsletters/campaigns.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/select_status.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6694b02d21d998_69310372 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('name','status','name','tools','campaign_stats','campaign_stats','delete','status','no_data','general','name','add_campaign','new_campaign','add_campaign','newsletters'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="update_campaign_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="" id="update_campaign_form">

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['campaigns']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "campaigns_table", null, null);?>
        <div class="table-responsive-wrapper longtap-selection">
            <table class="table table-middle table--relative table-responsive" width="100%">
                <thead
                        data-ca-bulkedit-default-object="true"
                        data-ca-bulkedit-component="defaultObject"
                >
                    <tr>
                        <th class="center mobile-hide" width="1%">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <input type="checkbox"
                                   class="bulkedit-toggler hide"
                                   data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                   data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                            />
                        </th>
                        <th width="70%"><?php echo $_smarty_tpl->__("name");?>
</th>
                        <th width="5%" class="center">&nbsp;</th>
                        <th width="10%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
                    </tr>
                </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['campaigns']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                    <tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['c']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target"
                        data-ca-longtap-action="setCheckBox"
                        data-ca-longtap-target="input.cm-item"
                        data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['c']->value['campaign_id'], ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <td class="left mobile-hide" width="1%">
                            <input type="checkbox" name="campaign_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['c']->value['campaign_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['c']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" /></td>
                        <td data-th="<?php echo $_smarty_tpl->__("name");?>
">
                            <input type="text" name="campaigns[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['c']->value['campaign_id'], ENT_QUOTES, 'UTF-8');?>
][name]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['c']->value['object'], ENT_QUOTES, 'UTF-8');?>
" class="input-large input-hidden" /></td>
                        <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'text'=>$_smarty_tpl->__("campaign_stats"),'title'=>$_smarty_tpl->__("campaign_stats"),'href'=>"newsletters.campaign_stats?campaign_id=".((string)$_smarty_tpl->tpl_vars['c']->value['campaign_id']),'target_id'=>"campaign_stats_".((string)$_smarty_tpl->tpl_vars['c']->value['campaign_id'])), true);?>
</li>
                                <li class="divider"></li>
                                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete"),'href'=>"newsletters.delete_campaign?campaign_id=".((string)$_smarty_tpl->tpl_vars['c']->value['campaign_id']),'method'=>"POST"), true);?>
</li>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <div class="hidden-tools">
                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                            </div>
                        </td>
                        <td class="nowrap right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['c']->value['campaign_id'],'status'=>$_smarty_tpl->tpl_vars['c']->value['status'],'hidden'=>false,'object_id_name'=>"campaign_id",'table'=>"newsletter_campaigns"), 0, true);
?>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
            </table>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"update_campaign_form",'object'=>"campaigns",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'campaigns_table')), 0, false);
} else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</form>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['campaigns']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[newsletters.m_update_campaigns]",'but_role'=>"action",'but_target_form'=>"update_campaign_form_".((string)$_smarty_tpl->tpl_vars['id']->value),'but_meta'=>"cm-submit"), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['is_allow_add_campaign']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
            <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit" name="add_campaign_form">
                <div class="tabs cm-j-tabs">
                    <ul class="nav nav-tabs">
                        <li id="tab_steps_new" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
                    </ul>
                </div>

                <div class="cm-tabs-content" id="content_tab_steps_new">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label cm-required" for="c_name"><?php echo $_smarty_tpl->__("name");?>
</label>
                            <div class="controls">
                                <input class="span9" type="text" id="c_name" name="campaign_data[name]" value="" size="60" />
                            </div>
                        </div>

                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"campaign_data[status]",'id'=>"c_status"), 0, false);
?>

                    </fieldset>
                </div>

                <div class="buttons-container">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[newsletters.add_campaign]",'cancel_action'=>"close",'text'=>$_smarty_tpl->__("add_campaign")), 0, false);
?>
                </div>
            </form>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_campaign",'text'=>$_smarty_tpl->__("new_campaign"),'title'=>$_smarty_tpl->__("add_campaign"),'act'=>"general",'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'icon'=>"icon-plus"), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("newsletters"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'select_languages'=>true), 0, false);
}
}

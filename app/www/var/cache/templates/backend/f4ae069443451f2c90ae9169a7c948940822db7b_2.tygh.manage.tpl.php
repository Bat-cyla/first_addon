<?php
/* Smarty version 4.1.1, created on 2024-05-31 15:52:41
  from '/app/www/design/backend/templates/addons/yml_export/views/yml/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6659c8196007d6_80170252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4ae069443451f2c90ae9169a7c948940822db7b' => 
    array (
      0 => '/app/www/design/backend/templates/addons/yml_export/views/yml/manage.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
    'tygh:views/companies/components/company_name.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:common/tools.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6659c8196007d6_80170252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('name','yml_export.generation_link','yml_export.get_link','yml_export.generation_status','status','yml_export.create','yml_export.go_to_link','yml_export.stop_generate','edit','yml_export.abort_generate','delete','no_data','yml_export.add_price','yml_export.price_lists'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/yml_export/manage.js"),$_smarty_tpl);?>


    <?php $_smarty_tpl->_assignInScope('allow_save', fn_check_permissions("yml","update","admin","POST"));?>

    <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
        <?php $_smarty_tpl->_assignInScope('no_hide_input', "cm-no-hide-input");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('no_hide_input', '');?>
    <?php }?>

    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="yml_export_price_lists_form" enctype="multipart/form-data" id="yml_export_price_lists_form">
        <input type="hidden" name="fake" value="1" disabled/>

        <?php if ($_smarty_tpl->tpl_vars['price_lists']->value) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "yml_export_price_lists_table", null, null);?>
                <div class="table-responsive-wrapper longtap-selection">
                    <table class="table table-middle table--relative">
                        <thead
                                data-ca-bulkedit-default-object="true"
                                data-ca-bulkedit-component="defaultObject"
                        >
                        <tr>
                            <th width="1%" class="left">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>"cm-no-hide-input"), 0, false);
?>

                                <input type="checkbox"
                                       class="bulkedit-toggler hide"
                                       data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                       data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                />
                            </th>
                            <th><?php echo $_smarty_tpl->__("name");?>
</th>

                            <th width="15%"><?php echo $_smarty_tpl->__("yml_export.generation_link");?>
</th>
                            <th width="15%"><?php echo $_smarty_tpl->__("yml_export.get_link");?>
</th>
                            <th width="25%"><?php echo $_smarty_tpl->__("yml_export.generation_status");?>
</th>

                            <th width="6%">&nbsp;</th>
                            <th width="10%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
                        </tr>
                        </thead>
                        <tbody class="cm-hide-inputs">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['price_lists']->value, 'price');
$_smarty_tpl->tpl_vars['price']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->do_else = false;
?>
                            <tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['price']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target"
                                data-ca-longtap-action="setCheckBox"
                                data-ca-longtap-target="input.cm-item"
                                data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
"
                            >
                                <td class="left <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <input type="checkbox" name="price_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['price']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" /></td>
                                <td class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <a class="row-status" href="<?php echo htmlspecialchars((string) fn_url("yml.update?price_id=".((string)$_smarty_tpl->tpl_vars['price']->value['param_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['param_data']['name_price_list'], ENT_QUOTES, 'UTF-8');?>
</a>
                                    <?php if ($_smarty_tpl->tpl_vars['price']->value['company_id']) {
$_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['price']->value), 0, true);
}?>
                                </td>
                                <td class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <a class="row-status" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['generate_link'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("yml_export.create");?>
</a>
                                </td>
                                <td class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <a class="row-status" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['get_link'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("yml_export.go_to_link");?>
</a>
                                </td>
                                <td class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
" id="generation_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['price']->value['count'] > 0 && $_smarty_tpl->tpl_vars['generation_statuses']->value[$_smarty_tpl->tpl_vars['price']->value['param_id']] == 'active') {?>
                                        <span><?php echo htmlspecialchars((string) round(100/$_smarty_tpl->tpl_vars['price']->value['count']*$_smarty_tpl->tpl_vars['price']->value['offset']), ENT_QUOTES, 'UTF-8');?>
% (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['offset'], ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['count'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['runtime'], ENT_QUOTES, 'UTF-8');?>
)</span>
                                    <?php } elseif (!empty($_smarty_tpl->tpl_vars['price']->value['time'])) {?>
                                        <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['time'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['generation_statuses']->value[$_smarty_tpl->tpl_vars['price']->value['param_id']] != 'finish') {?>, <?php echo $_smarty_tpl->__("yml_export.stop_generate");
}?></span>
                                    <?php } else { ?>
                                        <span></span>
                                    <?php }?>
                                    <!--generation_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
--></td>
                                <td id="price_list_tool_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
">
                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                                        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"yml.update?price_id=".((string)$_smarty_tpl->tpl_vars['price']->value['param_id'])), true);?>
</li>
                                        <?php if ($_smarty_tpl->tpl_vars['generation_statuses']->value[$_smarty_tpl->tpl_vars['price']->value['param_id']] == 'active') {?>
                                        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm cm-post",'text'=>$_smarty_tpl->__("yml_export.abort_generate"),'href'=>"yml.stop_generate?price_id=".((string)$_smarty_tpl->tpl_vars['price']->value['param_id'])), true);?>
</li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                                            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm cm-post",'text'=>$_smarty_tpl->__("delete"),'href'=>"yml.delete_price_list?price_id=".((string)$_smarty_tpl->tpl_vars['price']->value['param_id'])), true);?>
</li>
                                        <?php }?>
                                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                    <div class="hidden-tools">
                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                                    </div>
                                    <!--price_list_tool_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
--></td>
                                <td class="right">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['price']->value['param_id'],'status'=>$_smarty_tpl->tpl_vars['price']->value['status'],'non_editable'=>!$_smarty_tpl->tpl_vars['allow_save']->value,'hidden'=>false,'object_id_name'=>"param_id",'table'=>"yml_param",'popup_additional_class'=>((string)$_smarty_tpl->tpl_vars['no_hide_input']->value)." dropleft"), 0, true);
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

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"yml_export_price_lists_form",'object'=>"yml_export_price_lists",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'yml_export_price_lists_table')), 0, false);
?>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>

    </form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_href'=>"yml.update",'prefix'=>"top",'hide_tools'=>"true",'title'=>$_smarty_tpl->__("yml_export.add_price"),'icon'=>"icon-plus"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("yml_export.price_lists"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons')), 0, false);
}
}

<?php
/* Smarty version 4.1.1, created on 2024-05-15 11:11:18
  from '/app/www/design/backend/templates/views/pages/components/pages_tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66446e2643cff2_82182503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b456425801bbfab6fb56baa7d66c789fe5c9d209' => 
    array (
      0 => '/app/www/design/backend/templates/views/pages/components/pages_tree.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 2,
    'tygh:views/companies/components/company_name.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:views/pages/components/pages_tree.tpl' => 2,
  ),
),false)) {
function content_66446e2643cff2_82182503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
\Tygh\Languages\Helper::preloadLangVars(array('position_short','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','name','status','position_short','name','expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items','tools','edit','delete','status'));
if (!$_smarty_tpl->tpl_vars['checkbox_name']->value) {?>
    <?php $_smarty_tpl->_assignInScope('checkbox_name', "page_ids");
}?>

<?php if ($_smarty_tpl->tpl_vars['parent_id']->value) {?>
    <div class="pages-tree__children <?php if (!$_smarty_tpl->tpl_vars['expand_all']->value) {?>hidden<?php }?>" id="page<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages_tree']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>

    <?php if (fn_allowed_for("ULTIMATE")) {?>
        <?php $_smarty_tpl->_assignInScope('allow_save', fn_allow_save_object($_smarty_tpl->tpl_vars['page']->value,"pages"));?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['is_exclusive_page_type']->value && $_smarty_tpl->tpl_vars['page_types']->value[$_smarty_tpl->tpl_vars['page']->value['page_type']]['exclusive']) {?>
        <?php $_smarty_tpl->_assignInScope('_come_from', $_smarty_tpl->tpl_vars['page']->value['page_type']);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('_come_from', $_smarty_tpl->tpl_vars['come_from']->value);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['language_direction']->value == "rtl") {?>
        <?php $_smarty_tpl->_assignInScope('direction', "right");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('direction', "left");?>
    <?php }?>
    
    <div class="longtap-selection" data-ca-bulkedit-component="tableWrapper">
        <table width="100%" class="table table-tree table-middle table--relative table-nobg table-responsive">
            <?php if ($_smarty_tpl->tpl_vars['header']->value && !$_smarty_tpl->tpl_vars['hide_header']->value) {?>
                <?php $_smarty_tpl->_assignInScope('header', '');?>
                <thead data-ca-bulkedit-default-object="true" data-ca-bulkedit-component="defaultObject">
                    <tr>
                        <th class="left mobile-hide" width="6%">
                            <?php if ($_smarty_tpl->tpl_vars['display']->value != "radio") {?>
                                <?php if ($_smarty_tpl->tpl_vars['is_bulkedit_menu']->value) {?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>$_smarty_tpl->tpl_vars['pages_statuses']->value,'is_check_disabled'=>!$_smarty_tpl->tpl_vars['has_permission']->value), 0, true);
?>

                                    <input type="checkbox"
                                        class="bulkedit-toggler hide"
                                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                    />
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                <?php }?>
                            <?php }?>
                        </th>
                        <?php if (!$_smarty_tpl->tpl_vars['picker']->value && !$_smarty_tpl->tpl_vars['hide_position']->value) {?>
                            <th class="left mobile-hide" width="7%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
                        <?php }?>
                        <th width="70%" class="left">
                            <?php if (!$_smarty_tpl->tpl_vars['hide_show_all']->value && $_smarty_tpl->tpl_vars['search']->value['get_tree'] == "multi_level") {?>
                                <span alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="on_page<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combinations-pages<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['expand_all']->value) {?> hidden<?php }?>" ><span class="icon-caret-right "></span></span>
                                <span alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" id="off_page<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combinations-pages<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['expand_all']->value) {?> hidden<?php }?>" ><span class="icon-caret-down "></span></span>
                            <?php }?>
                            <?php echo $_smarty_tpl->__("name");?>

                        </th>
                        <?php if (!$_smarty_tpl->tpl_vars['hide_delete_button']->value) {?>
                            <th width="10%" class="mobile-hide">&nbsp;</th>
                        <?php }?>
                        <?php if (!$_smarty_tpl->tpl_vars['picker']->value) {?>
                            <th width="10%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
                        <?php }?>
                    </tr>
                </thead>
            <?php }?>
            <tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['page']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['page']->value['level'] > 0 && $_smarty_tpl->tpl_vars['search']->value['get_tree'] == "multi_level") {?> cm-longtap-target longtap-selection multiple-table-row<?php }?>"
                <?php if ($_smarty_tpl->tpl_vars['is_bulkedit_menu']->value && $_smarty_tpl->tpl_vars['has_permission']->value && $_smarty_tpl->tpl_vars['display']->value !== "radio") {?>
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            >
                <td class="left mobile-hide" width="6%">
                    <?php if ($_smarty_tpl->tpl_vars['display']->value == "radio") {?>
                        <input type="radio" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['checkbox_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="radio_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" />
                    <?php } else { ?>
                        <input type="checkbox" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['checkbox_name']->value, ENT_QUOTES, 'UTF-8');?>
[]" id="checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['page']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['is_bulkedit_menu']->value) {?> hide <?php }?>user-success" />
                    <?php }?>
                </td>
                <?php if (!$_smarty_tpl->tpl_vars['picker']->value && !$_smarty_tpl->tpl_vars['hide_position']->value) {?>
                    <td width="7%" class="mobile-hide" data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
                        <input type="text" name="pages_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
][position]" size="3" maxlength="10" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['position'], ENT_QUOTES, 'UTF-8');?>
" class="input-micro input-hidden" />
                        
                        <?php if (fn_allowed_for("ULTIMATE")) {?>
                            <input type="hidden" name="pages_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
][company_id]" size="3" maxlength="3" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden" />
                        <?php }?>
                    </td>
                <?php }?>
                <td class="row-status" width="70%" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                    <div class="text-over" <?php if ($_smarty_tpl->tpl_vars['search']->value['get_tree'] == "multi_level") {?>style="padding-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: <?php echo smarty_function_math(array('equation'=>"x*14",'x'=>(($tmp = $_smarty_tpl->tpl_vars['page']->value['level'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)),$_smarty_tpl);?>
px;"<?php }?>><?php if ($_smarty_tpl->tpl_vars['page']->value['subpages'] || $_smarty_tpl->tpl_vars['page']->value['has_children']) {
$_smarty_tpl->_assignInScope('_dispatch', (($tmp = $_smarty_tpl->tpl_vars['dispatch']->value ?? null)===null||$tmp==='' ? "pages.manage" ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['except_id']->value) {
$_smarty_tpl->_assignInScope('except_url', "&except_id=".((string)$_smarty_tpl->tpl_vars['except_id']->value));
}?><a href="#" alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_page<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination-pages<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['expand_all']->value && !$_smarty_tpl->tpl_vars['hide_show_all']->value) {?>hidden<?php }?>" <?php if ($_smarty_tpl->tpl_vars['page']->value['has_children']) {?>onclick="Tygh.$.ceAjax('request', '<?php ob_start();
if ($_smarty_tpl->tpl_vars['is_exclusive_page_type']->value) {
echo "&page_type=";
echo (string)$_smarty_tpl->tpl_vars['page']->value['page_type'];
}
$_prefixVariable1=ob_get_clean();
echo fn_url(((string)$_smarty_tpl->tpl_vars['_dispatch']->value)."?parent_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])."&get_tree=multi_level".((string)$_smarty_tpl->tpl_vars['except_url']->value)."&display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&combination_suffix=".((string)$_smarty_tpl->tpl_vars['combination_suffix']->value).$_prefixVariable1);?>
', <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: 'page<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
', caching: true<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);"<?php }?>><span class="icon-caret-right"></span></a><a href="#" alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_page<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination-pages<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['expand_all']->value || $_smarty_tpl->tpl_vars['hide_show_all']->value) {?>hidden<?php }?>"><span class="icon-caret-down"></span> </a><?php } elseif ($_smarty_tpl->tpl_vars['search']->value['get_tree'] == "multi_level") {?><span style="padding-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['direction']->value, ENT_QUOTES, 'UTF-8');?>
: 14px;">&nbsp;</span><?php }
if (!$_smarty_tpl->tpl_vars['picker']->value) {?><a href="<?php echo htmlspecialchars((string) fn_url("pages.update?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])."&come_from=".((string)$_smarty_tpl->tpl_vars['_come_from']->value)), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['page']->value['status'] == "N") {?>class="manage-root-item-disabled"<?php }?> id="page_title_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
"><?php } else { ?><label class="inline-label" for="radio_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" id="page_title_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['picker']->value) {?></a><?php } else { ?></label><?php }
if ($_smarty_tpl->tpl_vars['show_id']->value || $_smarty_tpl->tpl_vars['page']->value['page_type'] && !$_smarty_tpl->tpl_vars['is_exclusive_page_type']->value) {?><span class="muted"> <small><?php if ($_smarty_tpl->tpl_vars['show_id']->value) {?> #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['show_id']->value && $_smarty_tpl->tpl_vars['page']->value['page_type'] && !$_smarty_tpl->tpl_vars['is_exclusive_page_type']->value) {?>, <?php }
if ($_smarty_tpl->tpl_vars['page']->value['page_type'] && !$_smarty_tpl->tpl_vars['is_exclusive_page_type']->value) {
$_smarty_tpl->_assignInScope('pt', $_smarty_tpl->tpl_vars['page_types']->value[$_smarty_tpl->tpl_vars['page']->value['page_type']]);
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['pt']->value['single']);
}?></small></span><?php }?><div class="shift-left"><?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['page']->value), 0, true);
?></div></div>
                </td>
                <?php if (!$_smarty_tpl->tpl_vars['picker']->value) {?>
                    <td width="10%" class="mobile-hide" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                        <input type="hidden" name="pages_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
][parent_id]" size="3" maxlength="10" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['parent_id'], ENT_QUOTES, 'UTF-8');?>
" />
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                            <?php if ($_smarty_tpl->tpl_vars['search']->value['get_tree']) {?>
                                <?php $_smarty_tpl->_assignInScope('multi_level', "&multi_level=Y");?>
                            <?php }?>
                            <?php if (!$_smarty_tpl->tpl_vars['picker']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('_href', "pages.update?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])."&come_from=".((string)$_smarty_tpl->tpl_vars['_come_from']->value));?>
                            <?php }?>
                            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>$_smarty_tpl->tpl_vars['_href']->value), true);?>
</li>
                            <?php if (fn_allowed_for("ULTIMATE") && $_smarty_tpl->tpl_vars['allow_save']->value || !fn_allowed_for("ULTIMATE")) {?>
                                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"pages.delete?page_type=".((string)$_smarty_tpl->tpl_vars['page']->value['page_type'])."&page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id']).((string)$_smarty_tpl->tpl_vars['multi_level']->value)."&come_from=".((string)$_smarty_tpl->tpl_vars['_come_from']->value),'method'=>"POST"), true);?>
</li>
                            <?php }?>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <div class="hidden-tools">
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                        </div>
                    </td>
                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['hide_delete_button']->value) {?>
                    <td width="10%" class="nowrap right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                        <?php if (fn_allowed_for("ULTIMATE") && $_smarty_tpl->tpl_vars['allow_save']->value || !fn_allowed_for("ULTIMATE")) {?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['page']->value['page_id'],'status'=>$_smarty_tpl->tpl_vars['page']->value['status'],'hidden'=>true,'object_id_name'=>"page_id",'table'=>"pages",'popup_additional_class'=>"dropleft"), 0, true);
?>
                        <?php }?>
                    </td>
                <?php }?>
            </tr>
        </table>

        <?php if ($_smarty_tpl->tpl_vars['page']->value['subpages'] || $_smarty_tpl->tpl_vars['page']->value['has_children']) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/pages/components/pages_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pages_tree'=>$_smarty_tpl->tpl_vars['page']->value['subpages'],'parent_id'=>$_smarty_tpl->tpl_vars['page']->value['page_id'],'show_id'=>$_smarty_tpl->tpl_vars['show_id']->value), 0, true);
?>
        <?php }?>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['parent_id']->value) {?><!--page<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['combination_suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['parent_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
}

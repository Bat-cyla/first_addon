<?php
/* Smarty version 4.1.1, created on 2024-06-24 11:01:13
  from '/app/www/design/backend/templates/addons/tags/views/tags/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667927c995eba2_32692464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1c2e425858377c56bb228f89cf42676fc3a7d19' => 
    array (
      0 => '/app/www/design/backend/templates/addons/tags/views/tags/manage.tpl',
      1 => 1718778526,
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
    'tygh:common/saved_search.tpl' => 1,
    'tygh:addons/tags/views/tags/components/tags_search_form.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_667927c995eba2_32692464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('tag','status','tag','tools','delete','status','no_data','tags'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));
$_smarty_tpl->_assignInScope('tags_statuses', fn_get_default_statuses('',false));?>

<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>


<form class="form-horizontal form-edit" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="tags_form">

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tags_table", null, null);?>
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-sort table-middle table--relative table-responsive">
            <thead 
                data-ca-bulkedit-default-object="true" 
                data-ca-bulkedit-component="defaultObject"
            >
            <tr>
                <th class="left mobile-hide" width="6%">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>$_smarty_tpl->tpl_vars['tags_statuses']->value), 0, false);
?>

                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th width="40%"><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "tag") {?> sort-link-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=tag&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("tag");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "tag") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
}?></a></th>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tag_objects']->value, 'o');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
                <th width="8%" class="center">&nbsp;&nbsp;<?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['o']->value['name']);?>
&nbsp;&nbsp;</th>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <th width="8%">&nbsp;</th>
                <th class="right" width="10%"><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "status") {?> sort-link-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
}?></a></th>
            </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
            <tbody>
                <tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['tag']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target"
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag_id'], ENT_QUOTES, 'UTF-8');?>
"
                >
                    <td width="6%" class="left mobile-hide">
                        <input type="checkbox" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['tag']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag_id'], ENT_QUOTES, 'UTF-8');?>
" name="tag_ids[]"/>
                    </td>
                    <td width="40%" data-th="<?php echo $_smarty_tpl->__("tag");?>
">
                        <input type="text" name="tags_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag_id'], ENT_QUOTES, 'UTF-8');?>
][tag]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" size="20" class="input-hidden">
                    </td>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tag_objects']->value, 'o', false, 'k');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
                    <td class="center" width="8%" data-th="<?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['o']->value['name']);?>
">
                        <?php if ($_smarty_tpl->tpl_vars['tag']->value['objects_count'][$_smarty_tpl->tpl_vars['k']->value]) {?><a href="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['o']->value['url'],"tag=".((string)$_smarty_tpl->tpl_vars['tag']->value['tag']))), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['objects_count'][$_smarty_tpl->tpl_vars['k']->value], ENT_QUOTES, 'UTF-8');?>
</a><?php } else { ?>0<?php }?>
                    </td>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <td width="8%" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                        <div class="hidden-tools">
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete"),'href'=>"tags.delete?tag_id=".((string)$_smarty_tpl->tpl_vars['tag']->value['tag_id']),'method'=>"POST"), true);?>
</li>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                        </div>
                    </td>
                    <td width="10%" class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['tag']->value['tag_id'],'status'=>$_smarty_tpl->tpl_vars['tag']->value['status'],'items_status'=>fn_get_predefined_statuses("tags"),'object_id_name'=>"tag_id",'table'=>"tags"), 0, true);
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

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"tags_form",'object'=>"tags",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tags_table')), 0, false);
?>

<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</form>


<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"tags:list_extra_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"tags:list_extra_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"tags:list_extra_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

    <?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[tags.m_update]",'but_role'=>"submit-link",'but_target_form'=>"tags_form"), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"tags.manage",'view_type'=>"tags"), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/tags/views/tags/components/tags_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"tags.manage"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("tags"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar')), 0, false);
}
}

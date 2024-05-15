<?php
/* Smarty version 4.1.1, created on 2024-05-15 11:11:18
  from '/app/www/design/backend/templates/views/pages/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66446e263c1054_08555997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee5e38eac860cfbd0233244f4b1c2d470d983589' => 
    array (
      0 => '/app/www/design/backend/templates/views/pages/manage.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:views/pages/components/pages_tree.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:common/tools.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/saved_search.tpl' => 1,
    'tygh:views/pages/components/pages_search_form.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66446e263c1054_08555997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.sizeof.php','function'=>'smarty_modifier_sizeof',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_data','pages'));
echo smarty_function_script(array('src'=>"js/tygh/backend/pages_bulk_edit.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->_assignInScope('pages_statuses', fn_get_default_statuses('',true));
$_smarty_tpl->_assignInScope('has_permission', fn_check_permissions("pages","update","admin","POST"));?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="pages_tree_form" id="pages_tree_form">
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_REQUEST['content_id'],'hide_position'=>$_smarty_tpl->tpl_vars['hide_position']->value), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "pages_table", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['search']->value['page_type']) {?>
    <input type="hidden" name="page_type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['page_type'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['page_types']->value[$_smarty_tpl->tpl_vars['search']->value['page_type']]['hide_fields'] && $_smarty_tpl->tpl_vars['page_types']->value[$_smarty_tpl->tpl_vars['search']->value['page_type']]['hide_fields']['position']) {?>
        <?php $_smarty_tpl->_assignInScope('hide_position', true);?>
    <?php }?>


    <?php $_smarty_tpl->_assignInScope('come_from', $_smarty_tpl->tpl_vars['search']->value['page_type']);?>

    <div class="items-container multi-level pages-tree__content">
        <?php if ($_smarty_tpl->tpl_vars['pages_tree']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/pages/components/pages_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('header'=>true,'show_id'=>true,'combination_suffix'=>"_list",'is_bulkedit_menu'=>true), 0, false);
?>
        <?php } else { ?>
            <?php if (!$_smarty_tpl->tpl_vars['hide_show_all']->value) {?>
                <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
            <?php }?>
        <?php }?>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('has_permission'=>$_smarty_tpl->tpl_vars['has_permission']->value,'form'=>"pages_tree_form",'object'=>"pages",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'pages_table')), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>$_REQUEST['content_id']), 0, true);
?>

<?php $_smarty_tpl->_assignInScope('rev', (($tmp = $_REQUEST['content_id'] ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['has_permission']->value) {?>
        <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['page_types']->value) == 1) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page_types']->value, '_p', false, '_k');
$_smarty_tpl->tpl_vars['_p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_k']->value => $_smarty_tpl->tpl_vars['_p']->value) {
$_smarty_tpl->tpl_vars['_p']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_href'=>"pages.add?page_type=".((string)$_smarty_tpl->tpl_vars['_k']->value)."&come_from=".((string)$_smarty_tpl->tpl_vars['come_from']->value),'prefix'=>"top",'title'=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['_p']->value['add_name']),'hide_tools'=>true,'icon'=>"icon-plus"), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page_types']->value, '_p', false, '_k');
$_smarty_tpl->tpl_vars['_p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_k']->value => $_smarty_tpl->tpl_vars['_p']->value) {
$_smarty_tpl->tpl_vars['_p']->do_else = false;
?>
                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['_p']->value['add_name']),'href'=>"pages.add?page_type=".((string)$_smarty_tpl->tpl_vars['_k']->value)."&come_from=".((string)$_smarty_tpl->tpl_vars['come_from']->value)), true);?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list'),'icon'=>"icon-plus",'no_caret'=>true,'placement'=>"right"), true);?>

        <?php }?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['pages_tree']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:list_extra_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:list_extra_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:list_extra_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list'),'class'=>"mobile-hide bulkedit-dropdown--legacy hide"), true);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[pages.m_update]",'but_role'=>"action",'but_target_form'=>"pages_tree_form",'but_meta'=>"cm-submit"), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['is_exclusive_page_type']->value) {?>
    <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->__($_smarty_tpl->tpl_vars['page_types']->value[$_smarty_tpl->tpl_vars['search']->value['page_type']]['content']));?>
    <?php $_smarty_tpl->_assignInScope('view_type', "pages_".((string)$_smarty_tpl->tpl_vars['search']->value['page_type']));?>
    <?php $_smarty_tpl->_assignInScope('view_suffix', "page_type=".((string)$_smarty_tpl->tpl_vars['search']->value['page_type'])."&get_tree=multi_level");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->__("pages"));?>
    <?php $_smarty_tpl->_assignInScope('view_type', "pages");?>
    <?php $_smarty_tpl->_assignInScope('view_suffix', '');
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:manage_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"pages.manage",'view_type'=>$_smarty_tpl->tpl_vars['view_type']->value,'view_suffix'=>$_smarty_tpl->tpl_vars['view_suffix']->value), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/pages/components/pages_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"pages.manage",'view_type'=>$_smarty_tpl->tpl_vars['view_type']->value), 0, false);
?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>


<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'content_id'=>"manage_pages"), 0, false);
}
}

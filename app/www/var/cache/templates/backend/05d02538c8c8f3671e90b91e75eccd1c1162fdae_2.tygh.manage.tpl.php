<?php
/* Smarty version 4.1.1, created on 2024-05-31 13:29:28
  from '/app/www/design/backend/templates/addons/discussion/views/discussion_manager/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6659a688f016f6_51000512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05d02538c8c8f3671e90b91e75eccd1c1162fdae' => 
    array (
      0 => '/app/www/design/backend/templates/addons/discussion/views/discussion_manager/manage.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:addons/discussion/views/discussion_manager/components/post.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/saved_search.tpl' => 1,
    'tygh:addons/discussion/views/discussion_manager/components/discussion_search_form.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6659a688f016f6_51000512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_enabled_testimonials_notice','no_data','add_post','discussion'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
<div id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['discussion_object_types']->value[$_smarty_tpl->tpl_vars['discussion_object_type']->value], ENT_QUOTES, 'UTF-8');?>
">

<?php if ($_smarty_tpl->tpl_vars['discussion_object_type']->value == 'E' && $_smarty_tpl->tpl_vars['addons']->value['discussion']['home_page_testimonials'] == 'D') {?>
    <?php echo $_smarty_tpl->__("text_enabled_testimonials_notice");?>

<?php }
$_smarty_tpl->_assignInScope('is_allowed_to_update_reviews', fn_check_permissions("discussion","update","admin"));
$_smarty_tpl->_assignInScope('is_allowed_to_add_reviews', fn_check_permissions("discussion","add","admin"));?>
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="POST" <?php if (!$_smarty_tpl->tpl_vars['is_allowed_to_update_reviews']->value) {?>class="cm-hide-inputs"<?php }?> name="update_posts_form_<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['discussion_object_type']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) fn_url("discussion_manager.manage?selected_section=".((string)$_smarty_tpl->tpl_vars['discussion_object_types']->value[$_smarty_tpl->tpl_vars['discussion_object_type']->value])), ENT_QUOTES, 'UTF-8');?>
">
<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>"pagination_contents_".((string)$_smarty_tpl->tpl_vars['discussion_object_type']->value)), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['posts']->value) {?>

<?php echo smarty_function_script(array('src'=>"js/addons/discussion/discussion.js"),$_smarty_tpl);?>

<div class="posts-container">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
    <div class="post-item">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"discussion_manager:items_list_row"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"discussion_manager:items_list_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['post']->value,'type'=>$_smarty_tpl->tpl_vars['post']->value['type'],'show_object_link'=>true,'allow_save'=>$_smarty_tpl->tpl_vars['is_allowed_to_update_reviews']->value), 0, true);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"discussion_manager:items_list_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php } else { ?>
<p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>"pagination_contents_".((string)$_smarty_tpl->tpl_vars['discussion_object_type']->value)), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['posts']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['discussion_object_type']->value == 'E') {?>
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['discussion']['home_page_testimonials'] != 'D' && $_smarty_tpl->tpl_vars['is_allowed_to_add_reviews']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("add_post"),'but_icon'=>"icon-plus",'but_role'=>"action",'but_href'=>"discussion.update?discussion_type=E#add_new_post"), 0, false);
?>
        <?php }?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['posts']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
            <li><?php ob_start();
echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['discussion_object_type']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"delete_selected",'dispatch'=>"dispatch[discussion.m_delete]",'form'=>"update_posts_form_".$_prefixVariable1), true);?>
</li>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>


        <?php if ($_smarty_tpl->tpl_vars['discussion_object_type']->value != "E") {?>
            <?php $_smarty_tpl->_assignInScope('but_class', "btn-primary");?>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[discussion.update]",'but_role'=>"action",'but_target_form'=>"update_posts_form_".((string)(mb_strtolower($_smarty_tpl->tpl_vars['discussion_object_type']->value, 'UTF-8'))),'but_meta'=>"cm-submit ".((string)$_smarty_tpl->tpl_vars['but_class']->value)), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"discussion_manager.manage",'view_type'=>"discussion"), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/discussion_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

</form>

<!--content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['discussion_object_types']->value[$_smarty_tpl->tpl_vars['discussion_object_type']->value], ENT_QUOTES, 'UTF-8');?>
--></div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_smarty_tpl->tpl_vars['discussion_object_types']->value[$_smarty_tpl->tpl_vars['discussion_object_type']->value],'track'=>true), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("discussion"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'title_extra'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title_extra'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons')), 0, false);
}
}

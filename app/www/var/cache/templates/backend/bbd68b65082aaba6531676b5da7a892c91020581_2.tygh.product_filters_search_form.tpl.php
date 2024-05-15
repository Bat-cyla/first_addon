<?php
/* Smarty version 4.1.1, created on 2024-05-13 10:09:59
  from '/app/www/design/backend/templates/views/product_filters/components/product_filters_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6641bcc778d109_49385504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbd68b65082aaba6531676b5da7a892c91020581' => 
    array (
      0 => '/app/www/design/backend/templates/views/product_filters/components/product_filters_search_form.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/categories/picker.tpl' => 1,
    'tygh:common/select_category.tpl' => 1,
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_6641bcc778d109_49385504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.array_to_fields.php','function'=>'smarty_function_array_to_fields',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','category','all_categories','feature','filter'));
if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <div class="adv-search">
    <div class="group">
<?php } else { ?>
    <div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
<?php }?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="product_filters_search_form" method="get" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php if ($_smarty_tpl->tpl_vars['put_request_vars']->value) {?>
    <?php echo smarty_function_array_to_fields(array('data'=>$_REQUEST,'skip'=>array("callback")),$_smarty_tpl);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);
echo $_smarty_tpl->tpl_vars['extra']->value;?>

<div class="sidebar-field">
        <label><?php echo $_smarty_tpl->__("category");?>
</label>
        <div class="break clear correct-picker-but">
        <?php if (fn_show_picker("categories",(defined('CATEGORY_THRESHOLD') ? constant('CATEGORY_THRESHOLD') : null))) {?>
            <?php if ($_smarty_tpl->tpl_vars['search']->value['category_ids']) {?>
                <?php $_smarty_tpl->_assignInScope('s_cid', $_smarty_tpl->tpl_vars['search']->value['category_ids']);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('s_cid', "0");?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_id'=>"location_category",'input_name'=>"category_ids",'item_ids'=>$_smarty_tpl->tpl_vars['s_cid']->value,'hide_link'=>true,'hide_delete_button'=>true,'default_name'=>$_smarty_tpl->__("all_categories"),'extra'=>''), 0, false);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"category_ids",'id'=>$_smarty_tpl->tpl_vars['search']->value['category_ids']), 0, false);
?>
        <?php }?>
        </div>
</div>
<div class="sidebar-field">
    <label for="elm_feature_name"><?php echo $_smarty_tpl->__("feature");?>
:</label>
    <div class="break">
        <input type="text" name="feature_name" id="elm_feature_name" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['feature_name'], ENT_QUOTES, 'UTF-8');?>
" size="30" class="search-input-text" />
    </div>
</div>
<div class="sidebar-field">
    <label for="elm_filter_name"><?php echo $_smarty_tpl->__("filter");?>
:</label>
    <div class="break">
        <input type="text" name="filter_name" id="elm_filter_name" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['filter_name'], ENT_QUOTES, 'UTF-8');?>
" size="30" class="search-input-text" />
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "advanced_search", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_filters:search_form"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_filters:search_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_filters:search_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'advanced_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'advanced_search'),'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"product_filters",'in_popup'=>$_smarty_tpl->tpl_vars['in_popup']->value), 0, false);
?>

</form>
<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    </div></div>
<?php } else { ?>
    </div><hr>
<?php }
}
}

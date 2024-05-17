<?php
/* Smarty version 4.1.1, created on 2024-05-16 10:05:50
  from '/app/www/design/backend/templates/addons/tags/views/tags/components/tags_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6645b04e5b9eb7_43736990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32c78118715a74574d5343fabcdd01ee51e362da' => 
    array (
      0 => '/app/www/design/backend/templates/addons/tags/views/tags/components/tags_search_form.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/period_selector.tpl' => 1,
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_6645b04e5b9eb7_43736990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','tag','show','all','active','disabled','period'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="tags_search_form" method="get">
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);?>
    <div class="sidebar-field">
        <label for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
        <input type="text" id="elm_tag" name="tag" size="20" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-text" />
    </div>

    <div class="sidebar-field">
        <label for="tag_status_identifier"><?php echo $_smarty_tpl->__("show");?>
</label>
        <select name="status" id="tag_status_identifier">
            <option value=""><?php echo $_smarty_tpl->__("all");?>
</option>
            <option value="A"<?php if ($_smarty_tpl->tpl_vars['search']->value['status'] == "A") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("active");?>
</option>
            <option value="D"<?php if ($_smarty_tpl->tpl_vars['search']->value['status'] == "D") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("disabled");?>
</option>
        </select>
    </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "advanced_search", null, null);?>
    <div class="group form-horizontal">
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("period");?>
</label>
            <div class="controls">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"tags_search_form"), 0, false);
?>
            </div>
        </div>
    </div>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"tags:search_form"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"tags:search_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"tags:search_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'advanced_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'advanced_search'),'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"tags"), 0, false);
?>

    </form>
</div><?php }
}

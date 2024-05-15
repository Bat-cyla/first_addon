<?php
/* Smarty version 4.1.1, created on 2024-05-15 08:39:17
  from '/app/www/design/backend/templates/addons/banners/views/banners/components/banners_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66444a85cfd5f4_13465492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf56d341a66b759b6f1c6c8b6fef27a3cb97c306' => 
    array (
      0 => '/app/www/design/backend/templates/addons/banners/views/banners/components/banners_search_form.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_66444a85cfd5f4_13465492 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.array_to_fields.php','function'=>'smarty_function_array_to_fields',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','banner','type','all','graphic_banner','text_banner','status','all'));
if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <div class="adv-search">
    <div class="group">
<?php } else { ?>
    <div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
<?php }?>

<form name="banner_search_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">

    <?php if ($_REQUEST['redirect_url']) {?>
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['selected_section']->value != '') {?>
        <input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_section']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['put_request_vars']->value) {?>
        <?php echo smarty_function_array_to_fields(array('data'=>$_REQUEST,'skip'=>array("callback")),$_smarty_tpl);?>

    <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>


    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);?>
        <div class="sidebar-field">
            <label for="elm_name"><?php echo $_smarty_tpl->__("banner");?>
</label>
            <div class="break">
                <input type="text" name="name" id="elm_name" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <div class="sidebar-field">
            <label for="elm_type"><?php echo $_smarty_tpl->__("type");?>
</label>
            <div class="controls">
                <select name="type" id="elm_type">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"banners:search_form_banner_type"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"banners:search_form_banner_type"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <option value=""><?php echo $_smarty_tpl->__("all");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['search']->value['type'] == "G") {?>selected="selected"<?php }?> value="G"><?php echo $_smarty_tpl->__("graphic_banner");?>
</option>
                    <option <?php if ($_smarty_tpl->tpl_vars['search']->value['type'] == "T") {?>selected="selected"<?php }?> value="T"><?php echo $_smarty_tpl->__("text_banner");?>
</option>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"banners:search_form_banner_type"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </select>
            </div>
        </div>

        <div class="sidebar-field">
            <label for="elm_type"><?php echo $_smarty_tpl->__("status");?>
</label>
            <?php $_smarty_tpl->_assignInScope('items_status', fn_get_default_statuses('',true));?>
            <div class="controls">
                <select name="status" id="elm_type">
                    <option value=""><?php echo $_smarty_tpl->__("all");?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items_status']->value, 'status', false, 'key');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['status'] == $_smarty_tpl->tpl_vars['key']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_adv_link'=>true,'simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"banners"), 0, false);
?>

</form>

<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    </div></div>
<?php } else { ?>
    </div><hr>
<?php }
}
}

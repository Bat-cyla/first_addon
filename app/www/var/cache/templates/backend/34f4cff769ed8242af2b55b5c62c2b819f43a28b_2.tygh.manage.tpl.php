<?php
/* Smarty version 4.1.1, created on 2024-06-18 14:47:08
  from '/app/www/design/backend/templates/views/robots/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667173bcc14607_07513378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34f4cff769ed8242af2b55b5c62c2b819f43a28b' => 
    array (
      0 => '/app/www/design/backend/templates/views/robots/manage.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/update_for_all.tpl' => 1,
    'tygh:common/subheader.tpl' => 1,
    'tygh:buttons/button.tpl' => 2,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_667173bcc14607_07513378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('edit_robots','edit_robots','ftp_server_options','host','login','password','ftp_directory','recheck','upload_via_ftp','robots_title'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->_assignInScope('r_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>

<div class="items-container" id="manage_robots">

<form id="robots_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="robots_update_form" class="form-horizontal form-edit cm-ajax cm-disable-empty-files">
    <input type="hidden" name="result_ids" value="manage_robots" />

    <div id="manage_robots_content">

    <?php if (fn_allowed_for("ULTIMATE")) {?>
    <div class="control-group disable-overlay-wrap" id="field_robots_content">
        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] && !$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
            <div class="disable-overlay" id="robots_logo_disable_overlay"></div>
        <?php }?>
        <label for="elm_robots_edit" class="control-label"><?php echo $_smarty_tpl->__("edit_robots");?>
:</label>

        <div class="controls" id="robots_content">
            <textarea id="elm_robots_robots" name="robots_data[content]" cols="55" rows="12" class="span12"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['robots']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>

            <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                <div class="right">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>true,'object_id'=>"robots",'name'=>"robots_data[update_content]",'hide_element'=>"robots_uploader",'component'=>"robots.robots_uploader"), 0, false);
?>
                </div>
            <?php }?>
        </div>
    </div>
    <?php } else { ?>
    <div class="control-group">
        <label for="elm_robots_edit" class="control-label"><?php echo $_smarty_tpl->__("edit_robots");?>
:</label>

        <div class="controls">
            <textarea id="elm_robots_robots" name="robots_data[content]" cols="55" rows="12" class="span12"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['robots']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>
        </div>
    </div>
    <?php }?>

    <!--manage_robots_content--></div>

    <?php if ($_REQUEST['is_not_writable']) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("ftp_server_options")), 0, false);
?>
        <div class="control-group">
            <label for="host" class="control-label"><?php echo $_smarty_tpl->__("host");?>
:</label>
            <div class="controls">
                <input id="host" type="text" name="ftp_access[ftp_hostname]" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ftp_access']->value['ftp_hostname'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
            </div>
        </div>

        <div class="control-group">
            <label for="login" class="control-label"><?php echo $_smarty_tpl->__("login");?>
:</label>
            <div class="controls">
                <input id="login" type="text" name="ftp_access[ftp_username]" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ftp_access']->value['ftp_username'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
            </div>
        </div>

        <div class="control-group">
            <label for="password" class="control-label"><?php echo $_smarty_tpl->__("password");?>
:</label>
            <div class="controls">
                <input id="password" type="password" name="ftp_access[ftp_password]" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ftp_access']->value['ftp_password'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
            </div>
        </div>

        <div class="control-group">
            <label for="base_path" class="control-label"><?php echo $_smarty_tpl->__("ftp_directory");?>
:</label>
            <div class="controls">
                <input id="base_path" type="text" name="ftp_access[ftp_directory]" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ftp_access']->value['ftp_directory'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
            </div>
        </div>

        <div class="buttons-container">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->__("recheck"),'but_name'=>"dispatch[robots.check]",'but_meta'=>" "), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->__("upload_via_ftp"),'but_name'=>"dispatch[robots.update_via_ftp]"), 0, true);
?>
        </div>
    <?php }?>

</form>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    (function(_, $){
        $(_.doc).on('click', '[data-ca-update-for-all="robots.robots_uploader"]', function(e){
            $('#robots_uploader').toggleClass('disable-overlay-wrap');
            $('#robots_logo_disable_overlay').toggleClass('disable-overlay');
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<!--manage_robots--></div>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[robots.update]",'but_role'=>"submit-link",'but_target_form'=>"robots_update_form"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("robots_title"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'select_storefront'=>true,'show_all_storefront'=>!(fn_allowed_for("MULTIVENDOR"))), 0, false);
}
}

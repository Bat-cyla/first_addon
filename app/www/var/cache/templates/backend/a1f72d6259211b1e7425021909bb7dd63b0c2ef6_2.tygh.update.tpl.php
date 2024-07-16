<?php
/* Smarty version 4.1.1, created on 2024-07-12 13:08:35
  from '/app/www/design/backend/templates/views/documents/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_669100a3f09d04_94997092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1f72d6259211b1e7425021909bb7dd63b0c2ef6' => 
    array (
      0 => '/app/www/design/backend/templates/views/documents/update.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/snippets/components/adv_buttons.tpl' => 1,
    'tygh:views/snippets/components/list.tpl' => 1,
    'tygh:views/snippets/components/table_column_tab.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:views/documents/preview.tpl' => 1,
    'tygh:views/documents/components/variable_attributes.tpl' => 1,
    'tygh:common/fileuploader.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:buttons/save_changes.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_669100a3f09d04_94997092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('add_snippet','variables','or','snippets','affected_email_templates','customer_notifications','admin_notifications','import','preview','export','import','import','text_restore_question','restore'));
echo smarty_function_script(array('src'=>"js/tygh/template_editor.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));
$_smarty_tpl->_assignInScope('return_url', $_smarty_tpl->tpl_vars['config']->value['current_url']);
$_smarty_tpl->_assignInScope('return_url_escape', rawurlencode((string)$_smarty_tpl->tpl_vars['return_url']->value));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->_assignInScope('id', 0);
if ($_smarty_tpl->tpl_vars['document']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['document']->value->getId());
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>

<div id="content_general" class="document-editor__wrapper">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" name="document_form" class="form-horizontal">

        <input type="hidden" name="selected_section" id="selected_section" value="<?php echo htmlspecialchars((string) $_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="result_ids" value="preview_dialog" />

        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
            <input type="hidden" name="document_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>

        <fieldset>
            <div class="control-group ie-redactor">
                <textarea id="elm_document_body_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="document[template]" cols="55" rows="14" class="cm-wysiwyg input-textarea-long cm-emltpl-set-active"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['document']->value->getTemplate(), ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </fieldset>

    </form>

</div>
<div class="hidden" id="content_snippets">
    <div class="btn-toolbar clearfix cm-toggle-button">
        <div class="pull-right">

            <?php $_smarty_tpl->_subTemplateRender("tygh:views/snippets/components/adv_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_smarty_tpl->tpl_vars['snippet_type']->value,'addon'=>$_smarty_tpl->tpl_vars['document']->value->getAddon(),'result_ids'=>"content_snippets,sidebar_snippets",'return_url'=>$_smarty_tpl->tpl_vars['return_url']->value,'text'=>$_smarty_tpl->tpl_vars['text']->value,'link_text'=>$_smarty_tpl->__("add_snippet")), 0, false);
?>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/snippets/components/list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('snippets'=>$_smarty_tpl->tpl_vars['snippets']->value,'type'=>$_smarty_tpl->tpl_vars['snippet_type']->value,'addon'=>$_smarty_tpl->tpl_vars['document']->value->getAddon(),'result_ids'=>"content_snippets,sidebar_snippets",'return_url'=>$_smarty_tpl->tpl_vars['return_url']->value), 0, false);
?>
<!--content_snippets--></div>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['snippets_tables']->value, 'snippet_table');
$_smarty_tpl->tpl_vars['snippet_table']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['snippet_table']->value) {
$_smarty_tpl->tpl_vars['snippet_table']->do_else = false;
?>
    <div class="hidden" id="content_snippet_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snippet_table']->value['snippet']->getId(), ENT_QUOTES, 'UTF-8');?>
_table_columns">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/snippets/components/table_column_tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('snippet'=>$_smarty_tpl->tpl_vars['snippet_table']->value['snippet'],'columns'=>$_smarty_tpl->tpl_vars['snippet_table']->value['columns']), 0, true);
?>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"documents:tabs_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"documents:tabs_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"documents:tabs_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'track'=>true), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['has_preview']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/documents/preview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('preview'=>''), 0, false);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <div class="document-editor__list">
        <div class="sidebar-row">
            <h6><?php echo $_smarty_tpl->__("variables");?>
</h6>
            <ul class="nav nav-list" id="sidebar_variables">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variables']->value, 'variable');
$_smarty_tpl->tpl_vars['variable']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variable']->value) {
$_smarty_tpl->tpl_vars['variable']->do_else = false;
?>
                    <li <?php if ($_smarty_tpl->tpl_vars['variable']->value->getAttributes()) {?>style="white-space:nowrap;"<?php }?>>
                        <span class="label hand cm-emltpl-insert-variable" data-ca-target-template="elm_document_body_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-template-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variable']->value->getName(), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variable']->value->getName(), ENT_QUOTES, 'UTF-8');?>
</span>
                        <?php $_smarty_tpl->_assignInScope('variable_name', $_smarty_tpl->tpl_vars['variable']->value->getName());?>
                        <?php if ($_smarty_tpl->tpl_vars['variable']->value->getAlias()) {?>
                            <?php $_smarty_tpl->_assignInScope('variable_name', $_smarty_tpl->tpl_vars['variable']->value->getAlias());?>
                            <?php echo $_smarty_tpl->__("or");?>

                            <span class="label hand cm-emltpl-insert-variable" data-ca-target-template="elm_document_body_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-template-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variable']->value->getAlias(), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variable']->value->getAlias(), ENT_QUOTES, 'UTF-8');?>
</span>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['variable']->value->getAttributes()) {?>
                            <span class="icon-plus hand nav-opener"></span>
                            <?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variable_name']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:views/documents/components/variable_attributes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('attributes'=>$_smarty_tpl->tpl_vars['variable']->value->getAttributes(),'variable'=>$_prefixVariable1,'template'=>"elm_document_body_".((string)$_smarty_tpl->tpl_vars['id']->value)), 0, true);
?>
                        <?php }?>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>


    <div class="sidebar-row" id="sidebar_snippets">
        <h6><?php echo $_smarty_tpl->__("snippets");?>
</h6>
        <ul class="nav nav-list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['snippets']->value, 'snippet');
$_smarty_tpl->tpl_vars['snippet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['snippet']->value) {
$_smarty_tpl->tpl_vars['snippet']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['snippet']->value->getStatus() == "A") {?>
                    <li><span class="cm-emltpl-insert-variable label label-info hand" data-ca-target-template="elm_document_body_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-template-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snippet']->value->getCallTag(), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snippet']->value->getCode(), ENT_QUOTES, 'UTF-8');?>
</span></li>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <!--sidebar_snippets--></div>


    <?php if ($_smarty_tpl->tpl_vars['email_templates']->value['C'] || $_smarty_tpl->tpl_vars['email']->value['templates']['A']) {?>
    <div class="sidebar-row document-editor__email-templates" id="sidebar_email_templates">
        <h6><?php echo $_smarty_tpl->__("affected_email_templates");?>
</h6>
        <?php if ($_smarty_tpl->tpl_vars['email_templates']->value['C']) {?>
            <strong class="document-editor__email-templates__header"><?php echo $_smarty_tpl->__("customer_notifications");?>
</strong>
            <ul class="nav nav-list document-editor__email-templates__list">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['email_templates']->value['C'], 'email_template');
$_smarty_tpl->tpl_vars['email_template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['email_template']->value) {
$_smarty_tpl->tpl_vars['email_template']->do_else = false;
?>
                    <li class="document-editor__email-templates__list__item">
                        <a href="<?php echo htmlspecialchars((string) fn_url("email_templates.update?template_id=".((string)$_smarty_tpl->tpl_vars['email_template']->value->getId())), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['email_template']->value->getName(), ENT_QUOTES, 'UTF-8');?>
</a>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['email_templates']->value['A']) {?>
            <strong class="document-editor__email-templates__header"><?php echo $_smarty_tpl->__("admin_notifications");?>
</strong>
            <ul class="nav nav-list document-editor__email-templates__list">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['email_templates']->value['A'], 'email_template');
$_smarty_tpl->tpl_vars['email_template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['email_template']->value) {
$_smarty_tpl->tpl_vars['email_template']->do_else = false;
?>
                    <li class="document-editor__email-templates__list__item">
                        <a href="<?php echo htmlspecialchars((string) fn_url("email_templates.update?template_id=".((string)$_smarty_tpl->tpl_vars['email_template']->value->getId())), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['email_template']->value->getName(), ENT_QUOTES, 'UTF-8');?>
</a>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php }?>
    <!--sidebar_email_templates--></div>
    <?php }?>
    </div>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
        (function(_, $) {
            $(document).ready(function () {
                $('#sidebar_variables').on('click', '.nav-opener', function(e) {
                    var list = $(this).parent().find('ul.nav:first');
                    list.toggleClass('hidden');

                    if ($(this).hasClass('icon-minus')) { //close child lists
                        list.find('ul').addClass('hidden');
                        list.find('.icon-minus').toggleClass('icon-plus icon-minus');
                    }

                    $(this).toggleClass('icon-plus icon-minus');
                });

                $.ceEvent('on', 'ce.update_object_status_callback', function(data, params) {
                    if (typeof data.snippet_id == 'undefined') {
                        return;
                    }

                    var $tab = $('#snippet_content_' + data.snippet_id + '_table_columns');

                    if (data.success && $tab.length) {
                        if (data.new_status != 'A') {
                            $tab.addClass('hidden');
                        } else {
                            $tab.removeClass('hidden');
                        }
                    }
                });
            });
        }(Tygh, Tygh.$));

    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "import_form", null, null);?>
    <div class="install-addon">
        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit" name="import_documents" enctype="multipart/form-data">
            <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
"/>
            <div class="install-addon-wrapper">
                <img class="install-addon-banner" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addon_box.png" width="151" height="141" />
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"filename[]",'allowed_ext'=>"xml"), 0, false);
?>
            </div>
            <div class="buttons-container">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("import"),'but_name'=>"dispatch[documents.import]",'cancel_action'=>"close"), 0, false);
?>
            </div>
        </form>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"documents:update_tools_list_general"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"documents:update_tools_list_general"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['has_preview']->value) {?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("preview"),'class'=>"cm-ajax cm-form-dialog-opener cm-dialog-auto-size",'dispatch'=>"dispatch[documents.preview]",'form'=>"document_form"), true);?>
</li>
            <?php }?>
            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'text'=>$_smarty_tpl->__("export"),'href'=>"documents.export?document_id=".((string)$_smarty_tpl->tpl_vars['document']->value->getId()),'method'=>"POST"), true);?>
</li>

            <?php if (fn_check_permissions("documents","import","admin","POST")) {?>
                <li><?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"import_form",'link_text'=>$_smarty_tpl->__("import"),'act'=>"link",'link_class'=>"cm-dialog-auto-size",'text'=>$_smarty_tpl->__("import"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'import_form'),'general_class'=>"action-btn"), 0, false);
?></li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['document']->value->isModified()) {?>
                <?php $_smarty_tpl->_assignInScope('r_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
                <li><?php ob_start();
echo $_smarty_tpl->__("text_restore_question");
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'href'=>"documents.restore?document_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'class'=>"cm-confirm",'data'=>array("data-ca-confirm-text"=>$_prefixVariable2),'text'=>$_smarty_tpl->__("restore"),'method'=>"POST"), true);?>
</li>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"documents:update_tools_list_general"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list'),'class'=>"cm-tab-tools tab-tools",'id'=>"tools_general"), true);?>


    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"documents:update_buttons_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"documents:update_buttons_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"documents:update_buttons_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_changes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"action",'but_id'=>"document_save",'but_name'=>"dispatch[documents.update]",'but_target_form'=>"document_form",'but_meta'=>"cm-submit btn-primary",'save'=>$_smarty_tpl->tpl_vars['document']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"documents:update_adv_buttons_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"documents:update_adv_buttons_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"documents:update_adv_buttons_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['document']->value->getName(),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'sidebar_position'=>"left",'select_languages'=>true), 0, false);
}
}

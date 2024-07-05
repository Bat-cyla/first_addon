<?php
/* Smarty version 4.1.1, created on 2024-06-28 15:16:52
  from '/app/www/design/backend/templates/views/orders/modify_invoice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667ea9b4b56ed2_07610166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '597c20b232e04dcc8dbb61df96d41b973ff04943' => 
    array (
      0 => '/app/www/design/backend/templates/views/orders/modify_invoice.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_667ea9b4b56ed2_07610166 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('subject','email_order_invoice_subject','email','invoice','send'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="edit_order_invoice_form" class="form-horizontal form-edit">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"orders:modify_invoice"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"orders:modify_invoice"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <input type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
" name="order_id" />
        <div class="control-group">
            <label for="elm_subject" class="cm-required control-label"><?php echo $_smarty_tpl->__("subject");?>
:</label>
            <div class="controls">
                <input id="elm_subject" type="text" name="invoice[subject]" value="<?php echo $_smarty_tpl->__("email_order_invoice_subject",array("[company_name]"=>$_smarty_tpl->tpl_vars['company_data']->value['company_name'],"[order_id]"=>$_smarty_tpl->tpl_vars['order_info']->value['order_id']));?>
" class="span9">
            </div>
        </div>

        <div class="control-group">
            <label for="elm_email" class="cm-required cm-email control-label"><?php echo $_smarty_tpl->__("email");?>
:</label>
            <div class="controls">
                <input id="elm_email" type="text" name="invoice[email]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_info']->value['email'], ENT_QUOTES, 'UTF-8');?>
" class="span9">
            </div>
        </div>

        <div class="control-group">
            <label for="elm_invoice" class="cm-required control-label"><?php echo $_smarty_tpl->__("invoice");?>
:</label>
            <div class="controls">
                <textarea id="elm_invoice" name="invoice[body]" cols="55" rows="14" class="cm-wysiwyg input-textarea-long"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['invoice']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"orders:modify_invoice"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </form>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("send"),'but_name'=>"dispatch[orders.modify_invoice]",'but_target_form'=>"edit_order_invoice_form",'but_role'=>"submit-link"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title_start'=>$_smarty_tpl->__('editing_order_invoice_responsive'),'title_end'=>"#".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons')), 0, false);
}
}

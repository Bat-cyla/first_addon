<?php
/* Smarty version 4.1.1, created on 2024-05-29 11:09:56
  from '/app/www/design/themes/responsive/templates/addons/attachments/blocks/product_tabs/attachments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656e2d47b3a07_74243602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cc6efd21979037f320b8f1d605c66dfcd1719e4' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/attachments/blocks/product_tabs/attachments.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6656e2d47b3a07_74243602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.formatfilesize.php','function'=>'smarty_modifier_formatfilesize',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('download','download'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['attachments_data']->value) {?>
    <div class="attachments" id="content_attachments">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attachments_data']->value, 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
        <p class="attachment__item">
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value['description'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value['filename'], ENT_QUOTES, 'UTF-8');?>
, <?php echo smarty_modifier_formatfilesize($_smarty_tpl->tpl_vars['file']->value['filesize']);?>
) [<a class="attachment__a cm-no-ajax" href="<?php echo htmlspecialchars((string) fn_url("attachments.getfile?attachment_id=".((string)$_smarty_tpl->tpl_vars['file']->value['attachment_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("download");?>
</a>]
        </p>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/attachments/blocks/product_tabs/attachments.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/attachments/blocks/product_tabs/attachments.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['attachments_data']->value) {?>
    <div class="attachments" id="content_attachments">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attachments_data']->value, 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
        <p class="attachment__item">
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value['description'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['file']->value['filename'], ENT_QUOTES, 'UTF-8');?>
, <?php echo smarty_modifier_formatfilesize($_smarty_tpl->tpl_vars['file']->value['filesize']);?>
) [<a class="attachment__a cm-no-ajax" href="<?php echo htmlspecialchars((string) fn_url("attachments.getfile?attachment_id=".((string)$_smarty_tpl->tpl_vars['file']->value['attachment_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("download");?>
</a>]
        </p>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
}

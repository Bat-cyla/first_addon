<?php
/* Smarty version 4.1.1, created on 2024-06-28 10:31:44
  from '/app/www/design/themes/responsive/templates/addons/cp_generate_cart_from_file/views/export_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667e66e0639fe8_38219078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0161d1ab7ce46ec1ef09260339f758c7a6f0f061' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/cp_generate_cart_from_file/views/export_view.tpl',
      1 => 1719559894,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667e66e0639fe8_38219078 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div id="cp_generate_cart_modal_2">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="cp_unload_file_form" class="form-horizontal cm-ajax" enctype="multipart/form-data">
        <p>Test</p>
    </form>
    <?php echo '<script'; ?>
>
        $('#cp_generate_cart_open_modal_link').click();
    <?php echo '</script'; ?>
>

    <!--cp_generate_cart_modal--></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_generate_cart_from_file/views/export_view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cp_generate_cart_from_file/views/export_view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="cp_generate_cart_modal_2">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="cp_unload_file_form" class="form-horizontal cm-ajax" enctype="multipart/form-data">
        <p>Test</p>
    </form>
    <?php echo '<script'; ?>
>
        $('#cp_generate_cart_open_modal_link').click();
    <?php echo '</script'; ?>
>

    <!--cp_generate_cart_modal--></div><?php }
}
}

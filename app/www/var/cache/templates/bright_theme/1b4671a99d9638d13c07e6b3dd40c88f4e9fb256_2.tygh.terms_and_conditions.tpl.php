<?php
/* Smarty version 4.1.1, created on 2024-06-27 14:47:03
  from '/app/www/design/themes/responsive/templates/blocks/lite_checkout/terms_and_conditions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667d51370dbaf8_62628785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b4671a99d9638d13c07e6b3dd40c88f4e9fb256' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/lite_checkout/terms_and_conditions.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/checkout/components/terms_and_conditions.tpl' => 2,
  ),
),false)) {
function content_667d51370dbaf8_62628785 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="litecheckout__container">
    <?php if (!$_smarty_tpl->tpl_vars['suffix']->value) {?>
        <?php $_smarty_tpl->_assignInScope('suffix', uniqid(''));?>
    <?php }?>

    <div class="litecheckout__item">
        <div class="litecheckout__terms" id="litecheckout_terms">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/terms_and_conditions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('suffix'=>$_smarty_tpl->tpl_vars['suffix']->value), 0, false);
?>
        <!--litecheckout_terms--></div>
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/lite_checkout/terms_and_conditions.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/lite_checkout/terms_and_conditions.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="litecheckout__container">
    <?php if (!$_smarty_tpl->tpl_vars['suffix']->value) {?>
        <?php $_smarty_tpl->_assignInScope('suffix', uniqid(''));?>
    <?php }?>

    <div class="litecheckout__item">
        <div class="litecheckout__terms" id="litecheckout_terms">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/terms_and_conditions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('suffix'=>$_smarty_tpl->tpl_vars['suffix']->value), 0, true);
?>
        <!--litecheckout_terms--></div>
    </div>
</div>
<?php }
}
}

<?php
/* Smarty version 4.1.1, created on 2024-05-20 09:30:02
  from '/app/www/design/backend/templates/addons/first_addon/hooks/companies/product_details_fields.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_664aedeaa17416_98985984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49c1222aa4cf606ef353f07e984a3b0beb8e7135' => 
    array (
      0 => '/app/www/design/backend/templates/addons/first_addon/hooks/companies/product_details_fields.pre.tpl',
      1 => 1716186437,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664aedeaa17416_98985984 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('my_setting'));
?>
<div class="control-group">
    <label class="control-label" for="elm_my_setting"><?php echo $_smarty_tpl->__("my_setting");?>
:</label>
    <div class="controls">
        <input type="text" name="product_data[my_setting]" id="elm_my_setting" size="20" maxlength=<?php echo htmlspecialchars((string) smarty_modifier_enum("ProductFieldsLength::PRODUCT_CODE"), ENT_QUOTES, 'UTF-8');?>
  value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['my_setting'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
    </div>
</div><?php }
}

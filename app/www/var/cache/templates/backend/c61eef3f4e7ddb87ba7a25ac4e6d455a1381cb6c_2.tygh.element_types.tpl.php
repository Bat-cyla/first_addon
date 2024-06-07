<?php
/* Smarty version 4.1.1, created on 2024-05-15 11:11:29
  from '/app/www/design/backend/templates/addons/form_builder/views/pages/components/element_types.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66446e31dfaf20_29690025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c61eef3f4e7ddb87ba7a25ac4e6d455a1381cb6c' => 
    array (
      0 => '/app/www/design/backend/templates/addons/form_builder/views/pages/components/element_types.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66446e31dfaf20_29690025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('base','selectbox','radiogroup','multiple_checkboxes','multiple_selectbox','checkbox','input_field','textarea','header','separator','special','date','email','number','phone','countries_list','states_list','file','referer','ip_address'));
?>
<select id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="page_data[form][elements_data][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][element_type]" onchange="fn_check_element_type(this.value, this.id, '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selectable_elements']->value, ENT_QUOTES, 'UTF-8');?>
');">
    <optgroup label="<?php echo $_smarty_tpl->__("base");?>
">
    <option value="<?php echo htmlspecialchars((string) (defined('FORM_SELECT') ? constant('FORM_SELECT') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value == (defined('FORM_SELECT') ? constant('FORM_SELECT') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("selectbox");?>
</option>
    <option value="<?php echo htmlspecialchars((string) (defined('FORM_RADIO') ? constant('FORM_RADIO') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value == (defined('FORM_RADIO') ? constant('FORM_RADIO') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("radiogroup");?>
</option>
    <option value="<?php echo htmlspecialchars((string) (defined('FORM_MULTIPLE_CB') ? constant('FORM_MULTIPLE_CB') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value == (defined('FORM_MULTIPLE_CB') ? constant('FORM_MULTIPLE_CB') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("multiple_checkboxes");?>
</option>
    <option value="<?php echo htmlspecialchars((string) (defined('FORM_MULTIPLE_SB') ? constant('FORM_MULTIPLE_SB') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value == (defined('FORM_MULTIPLE_SB') ? constant('FORM_MULTIPLE_SB') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("multiple_selectbox");?>
</option>
    <option value="<?php echo htmlspecialchars((string) (defined('FORM_CHECKBOX') ? constant('FORM_CHECKBOX') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value == (defined('FORM_CHECKBOX') ? constant('FORM_CHECKBOX') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("checkbox");?>
</option>
    <option value="<?php echo htmlspecialchars((string) (defined('FORM_INPUT') ? constant('FORM_INPUT') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value == (defined('FORM_INPUT') ? constant('FORM_INPUT') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("input_field");?>
</option>
    <option value="<?php echo htmlspecialchars((string) (defined('FORM_TEXTAREA') ? constant('FORM_TEXTAREA') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value == (defined('FORM_TEXTAREA') ? constant('FORM_TEXTAREA') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("textarea");?>
</option>
    <option value="<?php echo htmlspecialchars((string) (defined('FORM_HEADER') ? constant('FORM_HEADER') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value == (defined('FORM_HEADER') ? constant('FORM_HEADER') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("header");?>
</option>
    <option value="<?php echo htmlspecialchars((string) (defined('FORM_SEPARATOR') ? constant('FORM_SEPARATOR') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value == (defined('FORM_SEPARATOR') ? constant('FORM_SEPARATOR') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("separator");?>
</option>
    </optgroup>
    <optgroup label="<?php echo $_smarty_tpl->__("special");?>
">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:form_elements"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:form_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <option value="<?php echo htmlspecialchars((string) (defined('FORM_DATE') ? constant('FORM_DATE') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value == (defined('FORM_DATE') ? constant('FORM_DATE') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("date");?>
</option>
    <option value="<?php echo htmlspecialchars((string) (defined('FORM_EMAIL') ? constant('FORM_EMAIL') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value == (defined('FORM_EMAIL') ? constant('FORM_EMAIL') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("email");?>
</option>
    <option value="<?php echo htmlspecialchars((string) (defined('FORM_NUMBER') ? constant('FORM_NUMBER') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value == (defined('FORM_NUMBER') ? constant('FORM_NUMBER') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("number");?>
</option>
    <option value="<?php echo htmlspecialchars((string) (defined('FORM_PHONE') ? constant('FORM_PHONE') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value == (defined('FORM_PHONE') ? constant('FORM_PHONE') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("phone");?>
</option>
    <option value="<?php echo htmlspecialchars((string) (defined('FORM_COUNTRIES') ? constant('FORM_COUNTRIES') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value == (defined('FORM_COUNTRIES') ? constant('FORM_COUNTRIES') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("countries_list");?>
</option>
    <option value="<?php echo htmlspecialchars((string) (defined('FORM_STATES') ? constant('FORM_STATES') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value == (defined('FORM_STATES') ? constant('FORM_STATES') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("states_list");?>
</option>
    <option value="<?php echo htmlspecialchars((string) (defined('FORM_FILE') ? constant('FORM_FILE') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value == (defined('FORM_FILE') ? constant('FORM_FILE') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("file");?>
</option>
    <option value="<?php echo htmlspecialchars((string) (defined('FORM_REFERER') ? constant('FORM_REFERER') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value == (defined('FORM_REFERER') ? constant('FORM_REFERER') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("referer");?>
</option>
    <option value="<?php echo htmlspecialchars((string) (defined('FORM_IP_ADDRESS') ? constant('FORM_IP_ADDRESS') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value == (defined('FORM_IP_ADDRESS') ? constant('FORM_IP_ADDRESS') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ip_address");?>
</option>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:form_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </optgroup>
</select><?php }
}

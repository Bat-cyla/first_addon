<?php
/* Smarty version 4.1.1, created on 2024-05-29 11:09:56
  from '/app/www/design/themes/responsive/templates/addons/social_buttons/providers/facebook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656e2d42c0653_74009669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73a0af2d9190d933c21b9b144f03d20055fcf7b1' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/social_buttons/providers/facebook.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6656e2d42c0653_74009669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable'] == "Y" && $_smarty_tpl->tpl_vars['provider_settings']->value['facebook']['data']) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"social_buttons:facebook"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"social_buttons:facebook"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('facebook_lang', $_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_lang']);
$_smarty_tpl->_assignInScope('facebook_app_id', $_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_app_id']);?>

<div id="fb-root"></div>

<div class="fb-like" <?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['facebook']['data'];?>
></div>
<div hidden
    data-ca-social-buttons="facebook"
    data-ca-social-buttons-src="//connect.facebook.net/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facebook_lang']->value, ENT_QUOTES, 'UTF-8');?>
/all.js#xfbml=1&appId=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facebook_app_id']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
<?php echo smarty_function_script(array('src'=>"js/addons/social_buttons/providers/facebook.js",'class'=>"cm-ajax-force",'cookie-name'=>"facebook"),$_smarty_tpl);?>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"social_buttons:facebook"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/providers/facebook.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/providers/facebook.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable'] == "Y" && $_smarty_tpl->tpl_vars['provider_settings']->value['facebook']['data']) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"social_buttons:facebook"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"social_buttons:facebook"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('facebook_lang', $_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_lang']);
$_smarty_tpl->_assignInScope('facebook_app_id', $_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_app_id']);?>

<div id="fb-root"></div>

<div class="fb-like" <?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['facebook']['data'];?>
></div>
<div hidden
    data-ca-social-buttons="facebook"
    data-ca-social-buttons-src="//connect.facebook.net/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facebook_lang']->value, ENT_QUOTES, 'UTF-8');?>
/all.js#xfbml=1&appId=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['facebook_app_id']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
<?php echo smarty_function_script(array('src'=>"js/addons/social_buttons/providers/facebook.js",'class'=>"cm-ajax-force",'cookie-name'=>"facebook"),$_smarty_tpl);?>

<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"social_buttons:facebook"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
}

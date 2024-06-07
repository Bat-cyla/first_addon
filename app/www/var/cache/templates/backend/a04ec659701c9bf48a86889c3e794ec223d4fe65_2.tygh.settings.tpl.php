<?php
/* Smarty version 4.1.1, created on 2024-05-13 08:54:24
  from '/app/www/design/backend/templates/views/setup_wizard/components/tabs/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6641ab106fa9c3_30076480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a04ec659701c9bf48a86889c3e794ec223d4fe65' => 
    array (
      0 => '/app/www/design/backend/templates/views/setup_wizard/components/tabs/settings.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_6641ab106fa9c3_30076480 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('sw.admin_notifications','sw.configure','sw.vendor_notifications','sw.configure'));
?>
<div id="sw_settings_extra">
    <div class="sw-columns-block">
        <div class="form-horizontal">
            <div class="control-icon sw_notifications_icon"></div>
            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__("sw.admin_notifications");?>
:</label>
                <div class="controls">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"notification_settings.manage?receiver_type=A",'but_text'=>$_smarty_tpl->__("sw.configure"),'but_role'=>"action",'but_target'=>"_blank"), 0, false);
?>
                </div>
            </div>
        </div>
        <?php if (fn_allowed_for("MULTIVENDOR")) {?>
            <div class="form-horizontal">
                <div class="control-group">
                    <label class="control-label"><?php echo $_smarty_tpl->__("sw.vendor_notifications");?>
:</label>
                    <div class="controls">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"notification_settings.manage?receiver_type=V",'but_text'=>$_smarty_tpl->__("sw.configure"),'but_role'=>"action",'but_target'=>"_blank"), 0, true);
?>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
<!--sw_settings_extra--></div>
<?php }
}

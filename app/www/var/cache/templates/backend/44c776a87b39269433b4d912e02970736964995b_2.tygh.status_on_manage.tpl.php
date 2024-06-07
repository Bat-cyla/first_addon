<?php
/* Smarty version 4.1.1, created on 2024-06-05 10:28:54
  from '/app/www/design/backend/templates/views/companies/components/status_on_manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_666013b617bd06_41147865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44c776a87b39269433b4d912e02970736964995b' => 
    array (
      0 => '/app/www/design/backend/templates/views/companies/components/status_on_manage.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/approve_disapprove.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:views/companies/components/company_status_switcher.tpl' => 1,
  ),
),false)) {
function content_666013b617bd06_41147865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('notify_vendor'));
?>

<?php if (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['company']->value['status'] === smarty_modifier_enum("VendorStatuses::NEW_ACCOUNT")) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/approve_disapprove.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'dispatch'=>"companies.update_status"), 0, false);
} elseif (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['company']->value['status'] !== smarty_modifier_enum("VendorStatuses::NEW_ACCOUNT")) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value,'items_status'=>$_smarty_tpl->tpl_vars['items_status']->value,'object_id_name'=>"company_id",'hide_for_vendor'=>$_smarty_tpl->tpl_vars['runtime']->value['company_id'],'update_controller'=>"companies",'notify'=>true,'notify_text'=>$_smarty_tpl->__("notify_vendor"),'status_target_id'=>"pagination_contents",'extra'=>"&return_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value),'popup_additional_class'=>"dropleft"), 0, false);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_status_switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company'=>$_smarty_tpl->tpl_vars['company']->value), 0, false);
}
}
}

<?php
/* Smarty version 4.1.1, created on 2024-05-31 13:29:24
  from '/app/www/design/backend/templates/addons/hybrid_auth/views/hybrid_auth/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6659a684f32d84_98681180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23a964e8288091ebbaaae96ea916e9121e9582bf' => 
    array (
      0 => '/app/www/design/backend/templates/addons/hybrid_auth/views/hybrid_auth/manage.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/object_group.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:addons/hybrid_auth/views/hybrid_auth/update.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6659a684f32d84_98681180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('hybrid_auth.editing_provider','no_items','hybrid_auth.new_provider','hybrid_auth.add_provider','hybrid_auth.providers'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="hybrid_auth_form" id="hybrid_auth_form">

<div class="items-container cm-sortable" data-ca-sortable-table="hybrid_auth_providers" data-ca-sortable-id-name="provider_id" id="manage_providers_list">
<?php if ($_smarty_tpl->tpl_vars['providers_list']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "hybrid_auth_table", null, null);?>
        <div class="table-responsive-wrapper longtap-selection">
            <table class="table table-middle table--relative table-objects table-striped table-responsive table-responsive-w-titles">
                <thead
                        data-ca-bulkedit-default-object="true"
                        data-ca-bulkedit-component="defaultObject"
                >
                <tr>
                    <th>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <input type="checkbox"
                               class="bulkedit-toggler hide"
                               data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                               data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                        />
                    </th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['providers_list']->value, 'provider_data');
$_smarty_tpl->tpl_vars['provider_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['provider_data']->value) {
$_smarty_tpl->tpl_vars['provider_data']->do_else = false;
?>
                    <?php ob_start();
echo $_smarty_tpl->__("hybrid_auth.editing_provider");
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['provider_data']->value['provider_id'],'text'=>(($tmp = $_smarty_tpl->tpl_vars['provider_data']->value['name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['provider_data']->value['provider'] ?? null : $tmp),'href'=>"hybrid_auth.update?provider_id=".((string)$_smarty_tpl->tpl_vars['provider_data']->value['provider_id']),'href_delete'=>"hybrid_auth.delete_provider?provider_id=".((string)$_smarty_tpl->tpl_vars['provider_data']->value['provider_id']),'table'=>"hybrid_auth_providers",'object_id_name'=>"provider_id",'delete_target_id'=>"manage_providers_list,content_group_*",'status'=>$_smarty_tpl->tpl_vars['provider_data']->value['status'],'additional_class'=>"cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['provider_data']->value['provider_id']),'no_table'=>true,'is_view_link'=>false,'header_text'=>$_prefixVariable1.": ".((string)$_smarty_tpl->tpl_vars['provider_data']->value['name']),'draggable'=>true,'is_bulkedit_menu'=>true,'checkbox_col_width'=>"6%",'checkbox_name'=>"provider_ids[]",'show_checkboxes'=>true,'hidden_checkbox'=>true), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"hybrid_auth_form",'object'=>"hybrid_auth",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'hybrid_auth_table')), 0, false);
} else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
<?php }?>
<!--manage_providers_list--></div>
</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/hybrid_auth/views/hybrid_auth/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('provider_data'=>array()), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php if (fn_check_view_permissions("hybrid_auth.update_provider","POST")) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_provider",'text'=>$_smarty_tpl->__("hybrid_auth.new_provider"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'title'=>$_smarty_tpl->__("hybrid_auth.add_provider"),'act'=>"general",'icon'=>"icon-plus"), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("hybrid_auth.providers"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons')), 0, false);
}
}

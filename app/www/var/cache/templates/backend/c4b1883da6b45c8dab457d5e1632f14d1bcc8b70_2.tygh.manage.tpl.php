<?php
/* Smarty version 4.1.1, created on 2024-06-05 09:21:32
  from '/app/www/design/backend/templates/views/sync_data/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_666003ecbe34e4_64480671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4b1883da6b45c8dab457d5e1632f14d1bcc8b70' => 
    array (
      0 => '/app/www/design/backend/templates/views/sync_data/manage.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/sync_data/components/sync_provider.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_666003ecbe34e4_64480671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('name','last_sync','status','log_file','no_items_for_marketplace_administrator','no_items','sync_data'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['sync_provider_list']->value) {?>
        <?php $_smarty_tpl->_assignInScope('display_table', true);?>
        <?php if (count($_smarty_tpl->tpl_vars['sync_provider_list']->value) === 1) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sync_provider_list']->value, 'provider', false, 'provider_id');
$_smarty_tpl->tpl_vars['provider']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['provider_id']->value => $_smarty_tpl->tpl_vars['provider']->value) {
$_smarty_tpl->tpl_vars['provider']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('display_table', fn_check_permissions("sync_data","update","admin","GET",array("sync_provider_id"=>$_smarty_tpl->tpl_vars['provider_id']->value)));?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['display_table']->value) {?>
            <div class="table-responsive-wrapper">
                <table width="100%" class="table table-middle table--relative table-responsive">
                    <thead>
                    <tr>
                        <th><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                        <th><?php echo $_smarty_tpl->__("last_sync");?>
</th>
                        <th><?php echo $_smarty_tpl->__("status");?>
</th>
                        <th><?php echo $_smarty_tpl->__("log_file");?>
</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sync_provider_list']->value, 'provider', false, 'provider_id');
$_smarty_tpl->tpl_vars['provider']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['provider_id']->value => $_smarty_tpl->tpl_vars['provider']->value) {
$_smarty_tpl->tpl_vars['provider']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/sync_data/components/sync_provider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('last_sync_info'=>$_smarty_tpl->tpl_vars['last_sync_info']->value[$_smarty_tpl->tpl_vars['provider_id']->value]), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_items_for_marketplace_administrator");?>
</p>
        <?php }?>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("sync_data"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'show_all_storefront'=>false), 0, false);
}
}

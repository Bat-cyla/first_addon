<?php
/* Smarty version 4.1.1, created on 2024-05-31 14:14:04
  from '/app/www/design/backend/templates/addons/store_locator/views/store_locator/components/context_menu/pickup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6659b0fc5b81c2_31697947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '967f7d6aa73f07ec7a2fc4c09b42966af1b39dff' => 
    array (
      0 => '/app/www/design/backend/templates/addons/store_locator/views/store_locator/components/context_menu/pickup.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/context_menu/items/dropdown.tpl' => 1,
  ),
),false)) {
function content_6659b0fc5b81c2_31697947 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('reset','apply'));
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "content", null);?>
    <div class="bulk-edit-inner__header">
        <span><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['data']->value['name']['template'],$_smarty_tpl->tpl_vars['data']->value['name']['params']);?>
</span>
    </div>

    <div class="bulk-edit-inner__body">
        <div class="bulk-edit-inner__input-group">
            <select class="input-medium input-hidden"
                    data-ca-bulkedit-pickup-changer
            >
                <option value="0"> -- </option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['destinations']->value, 'destination');
$_smarty_tpl->tpl_vars['destination']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['destination']->value) {
$_smarty_tpl->tpl_vars['destination']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination']->value['destination_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destination']->value['destination'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>

    <div class="bulk-edit-inner__footer">
        <button class="btn bulk-edit-inner__btn bulkedit-pickup-cancel"
                role="button"
                data-ca-bulkedit-pickup-cancel
                data-ca-bulkedit-pickup-reset-changer="[data-ca-bulkedit-pickup-changer]"
        ><?php echo $_smarty_tpl->__("reset");?>
</button>
        <button class="btn btn-primary bulk-edit-inner__btn bulkedit-pickup-update"
                role="button"
                data-ca-bulkedit-pickup-update
                data-ca-bulkedit-pickup-values="[data-ca-bulkedit-pickup-changer]"
                data-ca-bulkedit-pickup-target-form="[name=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['params']->value['form'], ENT_QUOTES, 'UTF-8');?>
]"
                data-ca-bulkedit-pickup-target-form-active-objects="tr.selected:has(input[type=checkbox].cm-item:checked)"
                data-ca-bulkedit-pickup-dispatch="store_locator.m_update_pickup"
        ><?php echo $_smarty_tpl->__("apply");?>
</button>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:components/context_menu/items/dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->tpl_vars['content']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'id'=>"pickup"), 0, false);
}
}

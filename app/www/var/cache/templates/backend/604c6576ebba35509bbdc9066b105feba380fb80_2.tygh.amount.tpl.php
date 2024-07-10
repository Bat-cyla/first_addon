<?php
/* Smarty version 4.1.1, created on 2024-07-10 13:21:51
  from '/app/www/design/backend/templates/addons/gift_certificates/views/gift_certificates/components/context_menu/amount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668e60bf10c1e3_76190241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '604c6576ebba35509bbdc9066b105feba380fb80' => 
    array (
      0 => '/app/www/design/backend/templates/addons/gift_certificates/views/gift_certificates/components/context_menu/amount.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/context_menu/items/dropdown.tpl' => 1,
  ),
),false)) {
function content_668e60bf10c1e3_76190241 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('amount','bulk_edit.decrease_hint','bulk_edit.example_of_modified_value','current_amount','reset','apply'));
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "content", null);?>
    <div class="bulk-edit-inner__header">
        <span><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['data']->value['name']['template'],$_smarty_tpl->tpl_vars['data']->value['name']['params']);?>
</span>
    </div>

    <div class="bulk-edit-inner__body">
        <div class="bulk-edit-inner__input-group">
            <input type="number"
                   step="any"
                   class="input-group__text"
                   placeholder="<?php echo $_smarty_tpl->__("amount");?>
"
                   data-ca-bulkedit-mod-changer
                   data-ca-bulkedit-mod-affect-on="[data-ca-bulkedit-mod-amount]"
                   data-ca-bulkedit-mod-filter="[data-ca-bulkedit-mod-amount-filter-a]"
            />
            <select class="input-group__modifier" data-ca-bulkedit-mod-amount-filter-a>
                <option value="number"><?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
</option>
                <option value="percent">%</option>
            </select>
        </div>

        <div class="bulk-edit-inner__hint">
            <span><?php echo $_smarty_tpl->__("bulk_edit.decrease_hint");?>
</span>
        </div>

        <div class="bulk-edit-inner__example">
            <p class="bulk-edit-inner__example-title"><?php echo $_smarty_tpl->__("bulk_edit.example_of_modified_value");?>
</p>

                <p class="bulk-edit-inner__example-line">
                    <span class="bulk-edit-inner__example-line--left"><?php echo $_smarty_tpl->__("current_amount");?>
:</span>
                    <span class="bulk-edit-inner__example-line--right"
                          data-ca-bulkedit-mod-default-value="30.00"
                          data-ca-bulkedit-mod-affected-write-into=".bulk-edit-inner__example-line--red"
                          data-ca-bulkedit-mod-affected-old-value=".bulk-edit-inner__example-line--green"
                          data-ca-bulkedit-mod-amount
                    >
                        <span class="bulk-edit-inner__example-line--green">30.00</span>
                        <span class="bulk-edit-inner__example-line--red"></span>
                    </span>
                </p>
        </div>
    </div>

    <div class="bulk-edit-inner__footer">
        <button class="btn bulk-edit-inner__btn bulkedit-mod-cancel"
                role="button"
                data-ca-bulkedit-mod-cancel
                data-ca-bulkedit-mod-reset-changer="[data-ca-bulkedit-mod-changer]"
        ><?php echo $_smarty_tpl->__("reset");?>
</button>
        <button class="btn btn-primary bulk-edit-inner__btn bulkedit-mod-update"
                role="button"
                data-ca-bulkedit-mod-update
                data-ca-bulkedit-mod-values="[data-ca-bulkedit-mod-changer]"
                data-ca-bulkedit-mod-target-form="[name=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['params']->value['form'], ENT_QUOTES, 'UTF-8');?>
]"
                data-ca-bulkedit-mod-target-form-active-objects="tr.selected:has(input[type=checkbox].cm-item:checked)"
                data-ca-bulkedit-mod-dispatch="gift_certificates.m_update_amount"
        ><?php echo $_smarty_tpl->__("apply");?>
</button>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:components/context_menu/items/dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->tpl_vars['content']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'id'=>$_smarty_tpl->tpl_vars['item_id']->value), 0, false);
}
}

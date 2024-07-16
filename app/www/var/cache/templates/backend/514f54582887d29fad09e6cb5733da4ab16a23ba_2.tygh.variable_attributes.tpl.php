<?php
/* Smarty version 4.1.1, created on 2024-07-12 13:08:36
  from '/app/www/design/backend/templates/views/documents/components/variable_attributes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_669100a427c7e8_60041830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '514f54582887d29fad09e6cb5733da4ab16a23ba' => 
    array (
      0 => '/app/www/design/backend/templates/views/documents/components/variable_attributes.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/documents/components/variable_attributes.tpl' => 2,
  ),
),false)) {
function content_669100a427c7e8_60041830 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['attributes']->value) {?>
<ul class="hidden nav nav-list" >
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attributes']->value, 'item', false, 'attribute');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <li><span class="cm-emltpl-insert-variable label hand" data-ca-template-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variable']->value, ENT_QUOTES, 'UTF-8');?>
.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-template="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
</span>
            <?php if (is_array($_smarty_tpl->tpl_vars['item']->value)) {?>
                <span class="icon-plus hand nav-opener" <?php if (is_array($_smarty_tpl->tpl_vars['item']->value)) {?>style="white-space:nowrap;"<?php }?>></span>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/documents/components/variable_attributes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('attributes'=>$_smarty_tpl->tpl_vars['item']->value,'variable'=>((string)$_smarty_tpl->tpl_vars['variable']->value).".".((string)$_smarty_tpl->tpl_vars['attribute']->value),'template'=>$_smarty_tpl->tpl_vars['template']->value), 0, true);
?>
            <?php }?>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
}

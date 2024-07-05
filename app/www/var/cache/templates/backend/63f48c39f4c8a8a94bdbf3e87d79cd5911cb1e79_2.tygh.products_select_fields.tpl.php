<?php
/* Smarty version 4.1.1, created on 2024-07-02 11:46:55
  from '/app/www/design/backend/templates/views/products/components/products_select_fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6683be7f656a00_92798234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63f48c39f4c8a8a94bdbf3e87d79cd5911cb1e79' => 
    array (
      0 => '/app/www/design/backend/templates/views/products/components/products_select_fields.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
  ),
),false)) {
function content_6683be7f656a00_92798234 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.sort_by.php','function'=>'smarty_modifier_sort_by',),3=>array('file'=>'/app/www/app/functions/smarty_plugins/function.split.php','function'=>'smarty_function_split',),));
?>
<input type="hidden" name="selected_fields[object]" value="product" />
<?php echo smarty_function_math(array('equation'=>"ceil(n/c)",'assign'=>"rows",'n'=>smarty_modifier_count($_smarty_tpl->tpl_vars['selected_fields']->value),'c'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "4" ?? null : $tmp)),$_smarty_tpl);?>


<?php echo smarty_function_split(array('data'=>smarty_modifier_sort_by($_smarty_tpl->tpl_vars['selected_fields']->value,"text"),'size'=>$_smarty_tpl->tpl_vars['rows']->value,'assign'=>"splitted_selected_fields",'vertical_delimition'=>false,'size_is_horizontal'=>true),$_smarty_tpl);?>


<p>
<?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_target'=>"s",'style'=>"links"), 0, false);
?>
</p>
<div class="table-wrapper">
    <table cellpadding="10" width="100%">
    <tr valign="top">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splitted_selected_fields']->value, 'sfs');
$_smarty_tpl->tpl_vars['sfs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sfs']->value) {
$_smarty_tpl->tpl_vars['sfs']->do_else = false;
?>
            <td class="products-select-fields__column">
            <ul class="unstyled">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sfs']->value, 'sf', false, NULL, 'foreach_sfs', array (
));
$_smarty_tpl->tpl_vars['sf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sf']->value) {
$_smarty_tpl->tpl_vars['sf']->do_else = false;
?>
                    <li>
                        <?php if ($_smarty_tpl->tpl_vars['sf']->value) {?>
                            <?php if ($_smarty_tpl->tpl_vars['sf']->value['disabled'] == "Y") {?><input type="hidden" value="Y" name="selected_fields<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sf']->value['name'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?>
                            <label class="checkbox" for="elm_<?php echo htmlspecialchars((string) md5($_smarty_tpl->tpl_vars['sf']->value['name']), ENT_QUOTES, 'UTF-8');?>
"><input type="checkbox" value="Y" name="selected_fields<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sf']->value['name'], ENT_QUOTES, 'UTF-8');?>
" id="elm_<?php echo htmlspecialchars((string) md5($_smarty_tpl->tpl_vars['sf']->value['name']), ENT_QUOTES, 'UTF-8');?>
" checked="checked" <?php if ($_smarty_tpl->tpl_vars['sf']->value['disabled'] == "Y") {?>disabled="disabled"<?php }?> class="cm-item-s" />
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sf']->value['text'], ENT_QUOTES, 'UTF-8');?>
</label>
                        <?php }?>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            </td>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tr></table>
</div><?php }
}

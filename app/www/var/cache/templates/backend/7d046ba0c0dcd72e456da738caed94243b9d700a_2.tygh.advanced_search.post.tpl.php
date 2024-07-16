<?php
/* Smarty version 4.1.1, created on 2024-07-12 13:09:16
  from '/app/www/design/backend/templates/addons/cp_extended_tags/hooks/orders/advanced_search.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_669100cc2066f3_45722562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d046ba0c0dcd72e456da738caed94243b9d700a' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_extended_tags/hooks/orders/advanced_search.post.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669100cc2066f3_45722562 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('tag','browse'));
?>
<div class="group">

<div class="row-fluid">
    <div class="control-group">
        <label class="control-label" for="tags"><?php echo $_smarty_tpl->__("tag");?>
</label>
        <tr valign="top" class="delim">
            <td width="350px" data-th="test">
                <div class="object-selector object-selector--mobile-full-width object-selector--half-width">
                    <select id="tags" class="cm-object-selector select2-hidden-accessible" multiple=""
                            name="tags[]" data-ca-placeholder=<?php echo $_smarty_tpl->__("browse");?>
 data-ca-enable-images="true" data-ca-image-width="30"
                            data-ca-image-height="30" data-ca-enable-search="true" data-ca-page-size="10"
                            data-ca-data-url="dispatch=product_features.get_variants_list"
                            data-ca-close-on-select="false" data-select2-id="feature_variants_550" tabindex="-1" aria-hidden="true">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['tag']->value,$_smarty_tpl->tpl_vars['search']->value['tags'])) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </td>

        </tr>
    </div>
</div>
</div><?php }
}

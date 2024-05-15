<?php
/* Smarty version 4.1.1, created on 2024-05-14 17:03:57
  from '/app/www/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/product_details_fields.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66436f4d78ab77_40968551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8111900c1bdfd2d29f129a249e81e050e914feb2' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/product_details_fields.post.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66436f4d78ab77_40968551 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('approved','yes','pending','no'));
if (fn_allowed_for("MULTIVENDOR") && ($_smarty_tpl->tpl_vars['product_data']->value['company_pre_moderation'] == "Y" || $_smarty_tpl->tpl_vars['product_data']->value['company_pre_moderation_edit'] == "Y")) {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("approved");?>
:</label>
        <div class="controls">
        	<div class="text-type-value">
        		<?php if ($_smarty_tpl->tpl_vars['product_data']->value['approved'] == "Y") {
echo $_smarty_tpl->__("yes");
} elseif ($_smarty_tpl->tpl_vars['product_data']->value['approved'] == "P") {
echo $_smarty_tpl->__("pending");
} else {
echo $_smarty_tpl->__("no");
}?>
        	</div>
        </div>
    </div>
<?php }
}
}

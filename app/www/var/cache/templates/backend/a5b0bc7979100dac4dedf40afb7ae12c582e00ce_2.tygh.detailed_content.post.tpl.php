<?php
/* Smarty version 4.1.1, created on 2024-05-29 12:09:51
  from '/app/www/design/backend/templates/addons/age_verification/hooks/profiles/detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656f0dfe5ad26_93112524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5b0bc7979100dac4dedf40afb7ae12c582e00ce' => 
    array (
      0 => '/app/www/design/backend/templates/addons/age_verification/hooks/profiles/detailed_content.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:common/calendar.tpl' => 1,
  ),
),false)) {
function content_6656f0dfe5ad26_93112524 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('age_verification','birthday'));
if ($_smarty_tpl->tpl_vars['user_type']->value == "C") {
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("age_verification"),'target'=>"#age_verification_fields"), 0, false);
?>
<div id="age_verification_fields" class="collapse">
    <fieldset class="form-horizontal">
        <div class="control-group">
            <label for="birthday" class="control-label"><?php echo $_smarty_tpl->__("birthday");?>
</label>
            <div class="controls">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_id'=>"birthday",'date_name'=>"user_data[birthday]",'date_val'=>$_smarty_tpl->tpl_vars['user_data']->value['birthday']), 0, false);
?>
            </div>
        </div>
    </fieldset>
</div>
<?php }
}
}

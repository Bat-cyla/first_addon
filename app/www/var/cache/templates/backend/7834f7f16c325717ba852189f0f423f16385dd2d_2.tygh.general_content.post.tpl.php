<?php
/* Smarty version 4.1.1, created on 2024-06-10 10:31:30
  from '/app/www/design/backend/templates/addons/cp_extended_tags/hooks/promotions/general_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6666abd26bcab1_96344068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7834f7f16c325717ba852189f0f423f16385dd2d' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_extended_tags/hooks/promotions/general_content.post.tpl',
      1 => 1717768489,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6666abd26bcab1_96344068 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('adding_a_tag'));
?>


<div class="control-group">
    <label class="control-label" for="elm_promotion_tags"><?php echo $_smarty_tpl->__("adding_a_tag");?>
:</label>
        <div class="controls">
            <input type="hidden" name="promotion_data[tags]" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" />
            <input type="checkbox" name="promotion_data[tags]" id="elm_promotion_tags" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['promotion_data']->value['tags'] == smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?>/>
        </div>
</div>
<?php }
}

<?php
/* Smarty version 4.1.1, created on 2024-05-31 12:41:36
  from '/app/www/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/customer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66599b50b21d87_68835468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d0ba97e3746b95958ca0ef6b83eed0773767446' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/customer.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/reviews/customer_icon.tpl' => 1,
  ),
),false)) {
function content_66599b50b21d87_68835468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
\Tygh\Languages\Helper::preloadLangVars(array('anonymous'));
?>

<?php $_smarty_tpl->_assignInScope('show_customer', (($tmp = $_smarty_tpl->tpl_vars['show_customer']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('customer_name', smarty_modifier_truncate($_smarty_tpl->tpl_vars['user_data']->value['name'],$_smarty_tpl->tpl_vars['NAME_CHARACTERS_THRESHOLD']->value,"...",true));
$_smarty_tpl->_assignInScope('NAME_CHARACTERS_THRESHOLD', 30);?>

<span>
    <?php if ($_smarty_tpl->tpl_vars['show_customer']->value && $_smarty_tpl->tpl_vars['user_data']->value['is_authorized']) {?>
        <a href="<?php echo htmlspecialchars((string) fn_url("profiles.update&user_id=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php echo $_smarty_tpl->tpl_vars['customer_name']->value;?>

        </a>

    <?php } elseif ($_smarty_tpl->tpl_vars['show_customer']->value && $_smarty_tpl->tpl_vars['user_data']->value['name']) {?>
        <span title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->tpl_vars['customer_name']->value;?>

        </span>

    <?php } elseif ($_smarty_tpl->tpl_vars['show_customer']->value) {?>
        <span class="muted">
            <?php echo $_smarty_tpl->__("anonymous");?>

        </span>

    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/reviews/customer_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user_data'=>$_smarty_tpl->tpl_vars['user_data']->value), 0, false);
?>
</span>
<?php }
}

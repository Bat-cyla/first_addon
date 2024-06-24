<?php
/* Smarty version 4.1.1, created on 2024-06-06 08:24:03
  from '/app/www/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/picker/item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_666147f3061434_41217306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b577486ba09570802eb818e5fe82ba22fef3724c' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/picker/item.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666147f3061434_41217306 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
?>
<div class="object-picker__vendor-plan-main">
    <?php if ($_smarty_tpl->tpl_vars['type']->value === "result") {?>
        <div class="object-picker__vendor-plan-content">
            <div class="object-picker__vendor-plan-name">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.name}<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>

            </div>
            <div class="object-picker__vendor-plan-monthly-fee">
                ${data.price}&nbsp;${data.periodicity}
            </div>
            <div class="object-picker__vendor-plan-transaction-fee">
                ${data.commission_text}
            </div>
            <div class="object-picker__vendor-plan-vendor-count">
                ${data.vendor_count_text}
            </div>
            <div class="object-picker__vendor-plan-status">
                ${data.status}
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value === "selection") {?>
        ${data.name}(${data.price})
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value === "load") {?>
        ...
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value === "new_item") {?>
        <div class="object-picker__results-label object-picker__vendor-plan-results-label">
            <?php if ((($tmp = $_smarty_tpl->tpl_vars['icon']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
                <div class="object-picker__results-label-icon-wrapper object-picker__vendor-plan-results-label-icon-wrapper">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)((($tmp = $_smarty_tpl->tpl_vars['icon']->value ?? null)===null||$tmp==='' ? 'icon-plus-sign' ?? null : $tmp)))." object-picker__results-label-icon object-picker__vendor-plan-results-label-icon"),$_smarty_tpl);?>

                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['title_pre']->value) {?>
                <div class="object-picker__results-label-prefix object-picker__vendor-plan-results-label-prefix">
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>

                </div>
            <?php }?>
            <div class="object-picker__results-label-body object-picker__vendor-plan-results-label-body">
                ${data.name}
            </div>
        </div>
    <?php }?>
</div>
<?php }
}

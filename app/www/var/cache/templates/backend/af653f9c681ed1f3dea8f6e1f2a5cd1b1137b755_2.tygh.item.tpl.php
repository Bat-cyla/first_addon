<?php
/* Smarty version 4.1.1, created on 2024-05-28 17:16:00
  from '/app/www/design/backend/templates/views/categories/components/picker/item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655e7207b10e5_91237327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af653f9c681ed1f3dea8f6e1f2a5cd1b1137b755' => 
    array (
      0 => '/app/www/design/backend/templates/views/categories/components/picker/item.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6655e7207b10e5_91237327 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('enter_category_name_and_path'));
?>
<div class="object-picker__categories-main">
    <?php if ($_smarty_tpl->tpl_vars['type']->value === "result" || $_smarty_tpl->tpl_vars['type']->value === "selection" || $_smarty_tpl->tpl_vars['type']->value === "selection_external") {?>
        <div class="object-picker__categories-main-content">
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>

                <?php if ($_smarty_tpl->tpl_vars['has_selection_controls']->value) {?>
                    <input class="select2__category-status-checkbox cm-tristate tristate-checkbox-cursor <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['categories_picker_item_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                        type="checkbox"
                        data-ca-category-id="${data.id}"
                        data-ca-tristate-process="false"
                        data-ca-tristate-just-click=""
                        data-checked=""
                    />
                <?php }?>
                <span class="select2-selection__choice__handler"></span>
                <div class="select2__category-name">
                    <?php if ($_smarty_tpl->tpl_vars['type']->value === "selection_external") {?>
                        <a href="${data.url}">${data.name}</a>
                    <?php } else { ?>
                        ${data.name}
                    <?php }?>
                </div>
                <div class="select2__category-parents">
                    ${data.parents_path ? data.parents_path : ``}
                </div>

                <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
                    
                        ${data.company
                        ? `<div class="select2__category-company">${data.company}</div>`
                            : ``
                        }
                    
                <?php }?>
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value === "load") {?>
        ...
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value === "new_item") {?>
        <div class="object-picker__results-label object-picker__results-label--categories">
            <?php if ((($tmp = $_smarty_tpl->tpl_vars['icon']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
                <div class="object-picker__results-label-icon-wrapper object-picker__results-label-icon-wrapper--categories">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)((($tmp = $_smarty_tpl->tpl_vars['icon']->value ?? null)===null||$tmp==='' ? 'icon-plus-sign' ?? null : $tmp)))." object-picker__results-label-icon object-picker__results-label-icon--categories"),$_smarty_tpl);?>

                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['title_pre']->value) {?>
                <div class="object-picker__results-label-prefix object-picker__results-label-prefix--categories">
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>

                </div>
            <?php }?>
            <div class="object-picker__results-label-body object-picker__results-label-body--categories">
                <span class="select2-selection__choice__handler"></span>
                ${data.text}
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['help']->value) {?>
            <div class="object-picker__results-help object-picker__results-help--categories">
                <?php echo $_smarty_tpl->__("enter_category_name_and_path");?>

            </div>
        <?php }?>
    <?php }?>
</div>
<?php }
}

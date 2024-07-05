<?php
/* Smarty version 4.1.1, created on 2024-07-04 16:42:13
  from '/app/www/design/themes/responsive/templates/blocks/categories/categories_dropdown_vertical.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6686a6b55cb070_95067991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d7a68fb9a8da5eebd7af658f1103e76d6023782' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/categories/categories_dropdown_vertical.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/sidebox_dropdown.tpl' => 2,
  ),
),false)) {
function content_6686a6b55cb070_95067991 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('menu','menu'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<div class="ty-menu ty-menu-vertical  ty-menu-vertical__dropdown">
    <ul id="vmenu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-menu__items cm-responsive-menu<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['right_to_left_orientation'] == "Y") {?> rtl<?php }?>">
        <li class="ty-menu__item ty-menu__menu-btn visible-phone cm-responsive-menu-toggle-main">
            <a class="ty-menu__item-link">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-short-list"),$_smarty_tpl);?>

                <span><?php echo $_smarty_tpl->__("menu");?>
</span>
            </a>
        </li>
        <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/sidebox_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'separated'=>true,'submenu'=>false,'name'=>"category",'item_id'=>"category_id",'childs'=>"subcategories"), 0, false);
?>
    </ul>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/categories/categories_dropdown_vertical.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/categories/categories_dropdown_vertical.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<div class="ty-menu ty-menu-vertical  ty-menu-vertical__dropdown">
    <ul id="vmenu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-menu__items cm-responsive-menu<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['right_to_left_orientation'] == "Y") {?> rtl<?php }?>">
        <li class="ty-menu__item ty-menu__menu-btn visible-phone cm-responsive-menu-toggle-main">
            <a class="ty-menu__item-link">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-short-list"),$_smarty_tpl);?>

                <span><?php echo $_smarty_tpl->__("menu");?>
</span>
            </a>
        </li>
        <?php $_smarty_tpl->_subTemplateRender("tygh:blocks/sidebox_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['items']->value,'separated'=>true,'submenu'=>false,'name'=>"category",'item_id'=>"category_id",'childs'=>"subcategories"), 0, true);
?>
    </ul>
</div>
<?php }
}
}

<?php
/* Smarty version 4.1.1, created on 2024-05-29 11:24:03
  from '/app/www/design/backend/templates/addons/vendor_panel_configurator/config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6656e623c5b1e2_66296199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '983cba61709f2b6cf3c40738d7d27980045bbc0a' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_panel_configurator/config.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6656e623c5b1e2_66296199 (Smarty_Internal_Template $_smarty_tpl) {
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {?>
    <?php $_smarty_tpl->_assignInScope('navigation_accordion', (($tmp = $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["navigation_accordion"] ?? null)===null||$tmp==='' ? true ?? null : $tmp) ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('select_languages', (($tmp = $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["select_languages"] ?? null)===null||$tmp==='' ? false ?? null : $tmp) ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('enable_onclick_menu', (($tmp = $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["enable_onclick_menu"] ?? null)===null||$tmp==='' ? true ?? null : $tmp) ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('enable_sticky_scroll', (($tmp = $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["enable_sticky_scroll"] ?? null)===null||$tmp==='' ? false ?? null : $tmp) ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('enable_search_collapse', (($tmp = $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["enable_search_collapse"] ?? null)===null||$tmp==='' ? false ?? null : $tmp) ,false ,2);?>

    <?php $_smarty_tpl->_assignInScope('show_company', (($tmp = $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["show_company"] ?? null)===null||$tmp==='' ? false ?? null : $tmp) ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('show_menu_descriptions', (($tmp = $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["show_menu_descriptions"] ?? null)===null||$tmp==='' ? false ?? null : $tmp) ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('show_menu_caret', (($tmp = $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["show_menu_caret"] ?? null)===null||$tmp==='' ? false ?? null : $tmp) ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('show_addon_icon', (($tmp = $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["show_addon_icon"] ?? null)===null||$tmp==='' ? false ?? null : $tmp) ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('show_languages_in_header_menu', (($tmp = $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["show_languages_in_header_menu"] ?? null)===null||$tmp==='' ? false ?? null : $tmp) ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('show_currencies_in_header_menu', (($tmp = $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["show_currencies_in_header_menu"] ?? null)===null||$tmp==='' ? false ?? null : $tmp) ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('show_last_viewed_items', (($tmp = $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["show_last_viewed_items"] ?? null)===null||$tmp==='' ? false ?? null : $tmp) ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('show_pagination_open', (($tmp = $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["show_pagination_open"] ?? null)===null||$tmp==='' ? false ?? null : $tmp) ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('show_list_price_column', (($tmp = $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["show_list_price_column"] ?? null)===null||$tmp==='' ? false ?? null : $tmp) ,false ,2);?>

    <?php $_smarty_tpl->_assignInScope('image_width', (($tmp = $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["image_width"] ?? null)===null||$tmp==='' ? "80" ?? null : $tmp) ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('image_height', (($tmp = $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["image_height"] ?? null)===null||$tmp==='' ? "80" ?? null : $tmp) ,false ,2);?>

    <?php $_smarty_tpl->_assignInScope('is_open_state_sidebar_save', (($tmp = $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["is_open_state_sidebar_save"] ?? null)===null||$tmp==='' ? true ?? null : $tmp) ,false ,2);?>

            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['element_color']) {?>
        <?php $_smarty_tpl->_assignInScope('mainColor', (($tmp = $_smarty_tpl->tpl_vars['dashboard_element_color']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['element_color'] ?? null : $tmp) ,false ,2);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["main_color"]) {?>
        <?php $_smarty_tpl->_assignInScope('mainColor', $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["main_color"] ,false ,2);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('mainColor', "#024567" ,false ,2);?>     <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['sidebar_color']) {?>
        <?php $_smarty_tpl->_assignInScope('menuSidebarColor', (($tmp = $_smarty_tpl->tpl_vars['dashboard_sidebar_color']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['sidebar_color'] ?? null : $tmp) ,false ,2);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["menu_sidebar_color"]) {?>
        <?php $_smarty_tpl->_assignInScope('menuSidebarColor', $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["menu_sidebar_color"] ,false ,2);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('menuSidebarColor', "#eef1f3" ,false ,2);?>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['main_pair']['icon']['image_path']) {?>
        <?php $_smarty_tpl->_assignInScope('menuSidebarBg', "url(".((string)$_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['main_pair']['icon']['image_path']).")" ,false ,2);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["menu_sidebar_bg"]) {?>
        <?php $_smarty_tpl->_assignInScope('menuSidebarBg', "url(".((string)$_smarty_tpl->tpl_vars['config']->value['vendor_panel_style']['menu_sidebar_bg']).")" ,false ,2);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('menuSidebarBg', "none" ,false ,2);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['is_gray_main_color']->value) {?>
        <?php $_smarty_tpl->_assignInScope('isGrayMainColor', (($tmp = $_smarty_tpl->tpl_vars['is_gray_main_color']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp) ,false ,2);?>
    <?php }
}
}
}

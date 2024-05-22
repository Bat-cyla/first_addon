<?php
/* Smarty version 4.1.1, created on 2024-05-22 14:40:28
  from '/app/www/design/backend/templates/addons/rus_boxberry/hooks/shipments/list_extra_links.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_664dd9ac6cb596_17233045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe47fe923f40cd7fc177478fd7b3fe729bfe33d5' => 
    array (
      0 => '/app/www/design/backend/templates/addons/rus_boxberry/hooks/shipments/list_extra_links.pre.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664dd9ac6cb596_17233045 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('rus_boxberry.print_label'));
if ($_smarty_tpl->tpl_vars['shipment']->value['boxberry_label']) {?>
    <li>
        <?php ob_start();
echo $_smarty_tpl->__("rus_boxberry.print_label");
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_prefixVariable1,'href'=>((string)$_smarty_tpl->tpl_vars['shipment']->value['boxberry_label']),'target'=>"_blank"), true);?>

    </li>
<?php }
}
}

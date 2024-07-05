<?php
/* Smarty version 4.1.1, created on 2024-07-04 16:42:13
  from '/app/www/design/themes/responsive/templates/blocks/vendors/vendor_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6686a6b5439250_78132909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cf72d01596b4a7ab4f102928bf4201e3461b116' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/blocks/vendors/vendor_search.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/magnifier.tpl' => 2,
  ),
),false)) {
function content_6686a6b5439250_78132909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('block_vendor_search','storefront_search_button','block_vendor_search','storefront_search_button'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?>
<div class="ty-search-block">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="search_form" method="get">
        <input type="hidden" name="subcats" value="Y" />
        <input type="hidden" name="pcode_from_q" value="Y" />
        <input type="hidden" name="status" value="A" />
        <input type="hidden" name="pshort" value="Y" />
        <input type="hidden" name="pfull" value="Y" />
        <input type="hidden" name="pname" value="Y" />
        <input type="hidden" name="pkeywords" value="Y" />
        <input type="hidden" name="search_performed" value="Y" />
        <input type="hidden" name="company_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="category_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_data']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" />

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendor_search:additional_fields"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendor_search:additional_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendor_search:additional_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <input type="text" name="q" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("block_vendor_search");?>
" class="ty-search-block__input cm-hint" /><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"companies.products",'alt'=>$_smarty_tpl->__("storefront_search_button")), 0, false);
?>
    </form>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/vendors/vendor_search.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/vendors/vendor_search.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?>
<div class="ty-search-block">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="search_form" method="get">
        <input type="hidden" name="subcats" value="Y" />
        <input type="hidden" name="pcode_from_q" value="Y" />
        <input type="hidden" name="status" value="A" />
        <input type="hidden" name="pshort" value="Y" />
        <input type="hidden" name="pfull" value="Y" />
        <input type="hidden" name="pname" value="Y" />
        <input type="hidden" name="pkeywords" value="Y" />
        <input type="hidden" name="search_performed" value="Y" />
        <input type="hidden" name="company_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="category_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_data']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" />

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendor_search:additional_fields"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendor_search:additional_fields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendor_search:additional_fields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <input type="text" name="q" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("block_vendor_search");?>
" class="ty-search-block__input cm-hint" /><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"companies.products",'alt'=>$_smarty_tpl->__("storefront_search_button")), 0, true);
?>
    </form>
</div>
<?php }
}
}

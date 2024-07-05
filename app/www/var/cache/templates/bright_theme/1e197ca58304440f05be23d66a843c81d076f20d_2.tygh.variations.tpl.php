<?php
/* Smarty version 4.1.1, created on 2024-07-04 08:00:05
  from '/app/www/design/themes/responsive/templates/addons/cp_generate_cart_from_file/views/variations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66862c55c75c81_26609609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e197ca58304440f05be23d66a843c81d076f20d' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/addons/cp_generate_cart_from_file/views/variations.tpl',
      1 => 1719573210,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_66862c55c75c81_26609609 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('cp_specific_products','name','cp_artiqle','name','cp_article','name','cp_article','name','cp_article','cp_undefined_product','ok','cp_specific_products','name','cp_artiqle','name','cp_article','name','cp_article','name','cp_article','cp_undefined_product','ok'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div id="cp_variations_modal">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="POST" name="cp_variations_modal_form" class="form-horizontal cm-ajax" enctype="multipart/form-data">
    <input type="hidden" class="cp-variation-modal"/>
        <fieldset>
            <div class="table-responsive-wrapper">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="4" class="center">
                                <h4><?php echo $_smarty_tpl->__("cp_specific_products");?>
</h4>
                            </th>
                        </tr>
                        <tr class="variations-head">
                            <th class="variations-head__item">
                            </th>
                            <th class="variations-head__item">
                                <?php echo $_smarty_tpl->__("name");?>

                            </th>
                            <th class="variations-head__item">
                                <?php echo $_smarty_tpl->__("cp_artiqle");?>

                            </th>
                            <th class="variations-head__item">
                            </th>
                        </tr>
                    </thead>
                    <?php if ($_smarty_tpl->tpl_vars['variations']->value) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variations']->value, 'variation', false, 'artiqle');
$_smarty_tpl->tpl_vars['variation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['artiqle']->value => $_smarty_tpl->tpl_vars['variation']->value) {
$_smarty_tpl->tpl_vars['variation']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['variation']->value['reference_product']) {?>
                                <tr>
                                    <td></td>
                                    <td class="variations__item" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                                        <b><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variation']->value['reference_product']['name'], ENT_QUOTES, 'UTF-8');?>
</b>
                                    </td>
                                    <td class="cp-center variations__item " data-th="<?php echo $_smarty_tpl->__("cp_article");?>
" width="30%">
                                        <b><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variation']->value['reference_product']['artiqle'], ENT_QUOTES, 'UTF-8');?>
</b>
                                    </td>
                                </tr>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['variation']->value['products']) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variation']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                    <tr class="variations__list">
                                        <td width="5%">
                                            <input type="checkbox" id="cp_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" name="chosen_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variation']->value['amount'], ENT_QUOTES, 'UTF-8');?>
"/>
                                        </td>
                                        <td class="variations__item" data-th="<?php echo $_smarty_tpl->__("name");?>
" width="50%">
                                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>

                                        </td>
                                        <td class="cp-center variations__item " data-th="<?php echo $_smarty_tpl->__("cp_article");?>
" width="30%">
                                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>

                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['undefined_products']->value) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['undefined_products']->value, 'undefined_product');
$_smarty_tpl->tpl_vars['undefined_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['undefined_product']->value) {
$_smarty_tpl->tpl_vars['undefined_product']->do_else = false;
?>
                            <tr class="variations__list">
                                <td width="5%"></td>
                                <td class="variations__item" data-th="<?php echo $_smarty_tpl->__("name");?>
" width="50%">
                                    <b><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['undefined_product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</b>
                                </td>
                                <td class="cp-center variations__item " data-th="<?php echo $_smarty_tpl->__("cp_article");?>
" width="30%">
                                    <b><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['undefined_product']->value['artiqle'], ENT_QUOTES, 'UTF-8');?>
</b>
                                </td>
                                <td><b><?php echo $_smarty_tpl->__("cp_undefined_product");?>
</b></td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                </table>
            </div>
        </fieldset>
        <div class="buttons-container">
		    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->__("ok"),'but_name'=>"dispatch[cp_generate_cart_from_file.finish]",'but_meta'=>"ty-btn__primary cm-process-items cm-dialog-closer ty-float-right",'but_target_form'=>"cp_variations_modal_form"), 0, false);
?>
        </div>
    </form>

    <?php echo '<script'; ?>
>
        $('#cp_variations_open_modal_link').click();
    <?php echo '</script'; ?>
>
<!--cp_variations_modal--></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/cp_generate_cart_from_file/views/variations.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/cp_generate_cart_from_file/views/variations.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="cp_variations_modal">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="POST" name="cp_variations_modal_form" class="form-horizontal cm-ajax" enctype="multipart/form-data">
    <input type="hidden" class="cp-variation-modal"/>
        <fieldset>
            <div class="table-responsive-wrapper">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="4" class="center">
                                <h4><?php echo $_smarty_tpl->__("cp_specific_products");?>
</h4>
                            </th>
                        </tr>
                        <tr class="variations-head">
                            <th class="variations-head__item">
                            </th>
                            <th class="variations-head__item">
                                <?php echo $_smarty_tpl->__("name");?>

                            </th>
                            <th class="variations-head__item">
                                <?php echo $_smarty_tpl->__("cp_artiqle");?>

                            </th>
                            <th class="variations-head__item">
                            </th>
                        </tr>
                    </thead>
                    <?php if ($_smarty_tpl->tpl_vars['variations']->value) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variations']->value, 'variation', false, 'artiqle');
$_smarty_tpl->tpl_vars['variation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['artiqle']->value => $_smarty_tpl->tpl_vars['variation']->value) {
$_smarty_tpl->tpl_vars['variation']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['variation']->value['reference_product']) {?>
                                <tr>
                                    <td></td>
                                    <td class="variations__item" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                                        <b><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variation']->value['reference_product']['name'], ENT_QUOTES, 'UTF-8');?>
</b>
                                    </td>
                                    <td class="cp-center variations__item " data-th="<?php echo $_smarty_tpl->__("cp_article");?>
" width="30%">
                                        <b><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variation']->value['reference_product']['artiqle'], ENT_QUOTES, 'UTF-8');?>
</b>
                                    </td>
                                </tr>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['variation']->value['products']) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variation']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                    <tr class="variations__list">
                                        <td width="5%">
                                            <input type="checkbox" id="cp_checkbox_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" name="chosen_products[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variation']->value['amount'], ENT_QUOTES, 'UTF-8');?>
"/>
                                        </td>
                                        <td class="variations__item" data-th="<?php echo $_smarty_tpl->__("name");?>
" width="50%">
                                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>

                                        </td>
                                        <td class="cp-center variations__item " data-th="<?php echo $_smarty_tpl->__("cp_article");?>
" width="30%">
                                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>

                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['undefined_products']->value) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['undefined_products']->value, 'undefined_product');
$_smarty_tpl->tpl_vars['undefined_product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['undefined_product']->value) {
$_smarty_tpl->tpl_vars['undefined_product']->do_else = false;
?>
                            <tr class="variations__list">
                                <td width="5%"></td>
                                <td class="variations__item" data-th="<?php echo $_smarty_tpl->__("name");?>
" width="50%">
                                    <b><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['undefined_product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</b>
                                </td>
                                <td class="cp-center variations__item " data-th="<?php echo $_smarty_tpl->__("cp_article");?>
" width="30%">
                                    <b><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['undefined_product']->value['artiqle'], ENT_QUOTES, 'UTF-8');?>
</b>
                                </td>
                                <td><b><?php echo $_smarty_tpl->__("cp_undefined_product");?>
</b></td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                </table>
            </div>
        </fieldset>
        <div class="buttons-container">
		    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->__("ok"),'but_name'=>"dispatch[cp_generate_cart_from_file.finish]",'but_meta'=>"ty-btn__primary cm-process-items cm-dialog-closer ty-float-right",'but_target_form'=>"cp_variations_modal_form"), 0, true);
?>
        </div>
    </form>

    <?php echo '<script'; ?>
>
        $('#cp_variations_open_modal_link').click();
    <?php echo '</script'; ?>
>
<!--cp_variations_modal--></div><?php }
}
}

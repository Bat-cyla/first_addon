<?php
/* Smarty version 4.1.1, created on 2024-07-05 10:22:32
  from '/app/www/design/backend/templates/addons/cp_extended_tags/views/cp_extended_tags/components/tags_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66879f38640ff0_96311620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bff44bb776bc2abc0713114d26e372986e0e4e19' => 
    array (
      0 => '/app/www/design/backend/templates/addons/cp_extended_tags/views/cp_extended_tags/components/tags_search_form.tpl',
      1 => 1718709898,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_66879f38640ff0_96311620 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','tag','show','all','active','disabled'));
?>

<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="tags_search_form" method="get">
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);?>
    <div class="sidebar-field">
        <label for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
        <input type="text" id="elm_tag" name="tag" size="20" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-text" />
    </div>
    <div class="sidebar-field">
        <input type="hidden" name="object_type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
">
    </div>
    <div class="sidebar-field">
        <label for="tag_status_identifier"><?php echo $_smarty_tpl->__("show");?>
</label>
        <select name="status" id="tag_status_identifier">
            <option value=""><?php echo $_smarty_tpl->__("all");?>
</option>
            <option value="A"<?php if ($_smarty_tpl->tpl_vars['search']->value['status'] == "A") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("active");?>
</option>
            <option value="D"<?php if ($_smarty_tpl->tpl_vars['search']->value['status'] == "D") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("disabled");?>
</option>
        </select>
    </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>



     <?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_adv_link'=>true,'simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"tags"), 0, false);
?>

    </form>
</div><?php }
}

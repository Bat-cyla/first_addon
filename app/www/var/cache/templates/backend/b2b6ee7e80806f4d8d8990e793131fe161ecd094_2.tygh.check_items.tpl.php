<?php
/* Smarty version 4.1.1, created on 2024-05-28 16:47:59
  from '/app/www/design/backend/templates/common/check_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655e08fcd9067_29224774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2b6ee7e80806f4d8d8990e793131fe161ecd094' => 
    array (
      0 => '/app/www/design/backend/templates/common/check_items.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6655e08fcd9067_29224774 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('select_all','unselect_all','check_uncheck_all','check_all','check_none'));
$_smarty_tpl->_assignInScope('check_data', '');
$_smarty_tpl->_assignInScope('container', $_smarty_tpl->tpl_vars['elms_container']->value ? "data-ca-container=".((string)$_smarty_tpl->tpl_vars['elms_container']->value) : '');?>

<?php if ($_smarty_tpl->tpl_vars['check_target']->value) {?>
    <?php $_smarty_tpl->_assignInScope('check_data', "data-ca-target=\"".((string)$_smarty_tpl->tpl_vars['check_target']->value)."\"");
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "check_items_checkbox", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['style']->value == "links") {?>
        <a 
            <?php if ($_smarty_tpl->tpl_vars['check_link']->value) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['check_link']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?> 
            class="cm-check-items cm-on underlined" 
            <?php echo $_smarty_tpl->tpl_vars['check_data']->value;?>

        >
            <?php echo $_smarty_tpl->__("select_all");?>

        </a> | <a 
            <?php if ($_smarty_tpl->tpl_vars['check_link']->value) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['check_link']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?> 
            class="cm-check-items cm-off underlined" 
            <?php echo $_smarty_tpl->tpl_vars['check_data']->value;?>

        >
            <?php echo $_smarty_tpl->__("unselect_all");?>

        </a>
    <?php } else { ?>
        <input 
            type="checkbox" 
            name="check_all" 
            value="Y" 
            title="<?php echo $_smarty_tpl->__("check_uncheck_all");?>
" 
            class="<?php if ($_smarty_tpl->tpl_vars['check_statuses']->value) {?>pull-left<?php }?> cm-check-items <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" 
            <?php if ($_smarty_tpl->tpl_vars['check_onclick']->value) {?>onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['check_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> 
            <?php echo $_smarty_tpl->tpl_vars['check_data']->value;?>

            <?php if ($_smarty_tpl->tpl_vars['checked']->value) {?>checked="checked"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['is_check_disabled']->value) {?>disabled="disabled"<?php }?> 
        />
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if (($_smarty_tpl->tpl_vars['check_statuses']->value || $_smarty_tpl->tpl_vars['is_check_all_shown']->value) && !$_smarty_tpl->tpl_vars['is_check_disabled']->value) {?> 
    <?php if (!$_smarty_tpl->tpl_vars['wrap_select_actions_into_dropdown']->value) {?>
    <div class="btn-group btn-checkbox cm-check-items <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
">
        <a href="" data-toggle="dropdown" class="btn dropdown-toggle">
            <span class="caret"></span>
        </a>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'check_items_checkbox');?>

    <?php }?>
        <ul class="dropdown-menu <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_menu_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <li><a class="cm-on" <?php echo $_smarty_tpl->tpl_vars['check_data']->value;?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
 ><?php echo $_smarty_tpl->__("check_all");?>
</a></li>
            <li><a class="cm-off" <?php echo $_smarty_tpl->tpl_vars['check_data']->value;?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
 ><?php echo $_smarty_tpl->__("check_none");?>
</a></li>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['check_statuses']->value, 'title', false, 'status');
$_smarty_tpl->tpl_vars['title']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->do_else = false;
?>
            <li><a <?php echo $_smarty_tpl->tpl_vars['check_data']->value;?>
 data-ca-status="<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['status']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value, ENT_QUOTES, 'UTF-8');?>
 ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php if (!$_smarty_tpl->tpl_vars['wrap_select_actions_into_dropdown']->value) {?>
    </div>
    <?php }
} else { ?>
    <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'check_items_checkbox');?>

    </div>
<?php }
}
}

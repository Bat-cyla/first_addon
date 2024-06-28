<?php
/* Smarty version 4.1.1, created on 2024-06-28 09:50:30
  from '/app/www/design/backend/templates/views/debugger/components/request_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667e5d36aa8195_36925252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f3aa197a21a6f80009c659b86de1d5bf0991fda' => 
    array (
      0 => '/app/www/design/backend/templates/views/debugger/components/request_tab.tpl',
      1 => 1716808809,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667e5d36aa8195_36925252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="deb-tab-content" id="DebugToolbarTabRequestContent">
    <div class="table-wrapper">
        <table class="deb-table">
            <caption>REQUEST</caption>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['request'], 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <tr>
                    <td width="20%"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>

    <div class="table-wrapper">
        <table class="deb-table">
            <caption>SERVER</caption>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['server'], 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <tr>
                    <td width="20%"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>

    <div class="table-wrapper">
        <table class="deb-table">
            <caption>COOKIE</caption>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['cookie'], 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <tr>
                    <td width="20%"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
<!--DebugToolbarTabRequestContent--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/debugger/components/request_tab.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/debugger/components/request_tab.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="deb-tab-content" id="DebugToolbarTabRequestContent">
    <div class="table-wrapper">
        <table class="deb-table">
            <caption>REQUEST</caption>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['request'], 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <tr>
                    <td width="20%"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>

    <div class="table-wrapper">
        <table class="deb-table">
            <caption>SERVER</caption>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['server'], 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <tr>
                    <td width="20%"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>

    <div class="table-wrapper">
        <table class="deb-table">
            <caption>COOKIE</caption>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['cookie'], 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <tr>
                    <td width="20%"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
<!--DebugToolbarTabRequestContent--></div>
<?php }
}
}

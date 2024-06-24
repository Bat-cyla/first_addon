<?php
/* Smarty version 4.1.1, created on 2024-06-11 11:11:27
  from '/app/www/design/backend/templates/views/debugger/components/templates_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_666806af47a372_20201961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f40ba0650dfc382a12ffc18230ffbcee2a50ddd' => 
    array (
      0 => '/app/www/design/backend/templates/views/debugger/components/templates_tab.tpl',
      1 => 1716808809,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
    'backend:views/debugger/components/templates_list.tpl' => 1,
  ),
),false)) {
function content_666806af47a372_20201961 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="deb-tab-content" id="DebugToolbarTabTemplatesContent">
    <h1>Template tree</h1>
    <div class="tree">
        <?php $_smarty_tpl->_subTemplateRender("backend:views/debugger/components/templates_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('list'=>$_smarty_tpl->tpl_vars['data']->value['tpls']), 0, false);
?>
    </div>

    <div class="deb-variables">
        <h4>Variables</h4>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['vars'], 'var', false, 'name');
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
?>
            <a href="#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <div class="table-wrapper">
        <table class="deb-table">
            <caption>Template variables</caption>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['vars'], 'var', false, 'name');
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
?>
                <tr>
                    <td valign="top"><strong><a name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</a></strong></td>
                    <td><pre><code><?php echo htmlspecialchars((string) var_dump($_smarty_tpl->tpl_vars['var']->value), ENT_QUOTES, 'UTF-8');?>
</code></pre></td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
<!--DebugToolbarTabTemplatesContent--></div>
<?php }
}

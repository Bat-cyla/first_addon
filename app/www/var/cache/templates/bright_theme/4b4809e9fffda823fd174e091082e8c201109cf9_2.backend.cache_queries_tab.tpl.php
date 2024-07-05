<?php
/* Smarty version 4.1.1, created on 2024-06-28 09:50:16
  from '/app/www/design/backend/templates/views/debugger/components/cache_queries_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667e5d28b2a582_39965198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b4809e9fffda823fd174e091082e8c201109cf9' => 
    array (
      0 => '/app/www/design/backend/templates/views/debugger/components/cache_queries_tab.tpl',
      1 => 1716808809,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
    'backend:views/debugger/components/sorter.tpl' => 4,
  ),
),false)) {
function content_667e5d28b2a582_39965198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="deb-tab-content" id="DebugToolbarTabCacheQueriesContent">
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "cache_queries_tabs", null, null);?>
    <div class="deb-sub-tab-content" id="DebugToolbarSubTabCacheQueriesList">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "cache_queries_list_table", null, null);?>
        <div class="table-wrapper">
            <table class="deb-table" id="DebugToolbarSubTabCacheQueriesListTable">
                <caption>Queries <small class="deb-font-gray">time: <?php echo htmlspecialchars((string) number_format($_smarty_tpl->tpl_vars['data']->value['totals']['time'],"5"), ENT_QUOTES, 'UTF-8');?>
</small></caption>
                <tr>
                    <th style="width: 35px;"><?php $_smarty_tpl->_subTemplateRender("backend:views/debugger/components/sorter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"№",'field'=>"number",'order_by'=>$_smarty_tpl->tpl_vars['order_by']->value,'direction'=>$_smarty_tpl->tpl_vars['direction']->value,'url'=>"debugger.cache_queries",'debugger_hash'=>$_smarty_tpl->tpl_vars['debugger_hash']->value,'target_id'=>"DebugToolbarTabCacheQueriesContent"), 0, false);
?></th>
                    <th>Query</th>
                    <th style="width: 60px;"><?php $_smarty_tpl->_subTemplateRender("backend:views/debugger/components/sorter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Time",'field'=>"time",'order_by'=>$_smarty_tpl->tpl_vars['order_by']->value,'direction'=>$_smarty_tpl->tpl_vars['direction']->value,'url'=>"debugger.cache_queries",'debugger_hash'=>$_smarty_tpl->tpl_vars['debugger_hash']->value,'target_id'=>"DebugToolbarTabCacheQueriesContent"), 0, true);
?></th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['list'], 'query', false, 'key');
$_smarty_tpl->tpl_vars['query']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['query']->value) {
$_smarty_tpl->tpl_vars['query']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['query']->value['time'] > $_smarty_tpl->tpl_vars['long_query_time']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('color', "deb-light-red");?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['query']->value['time'] > $_smarty_tpl->tpl_vars['medium_query_time']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('color', "deb-light2-red");?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('color', false);?>
                    <?php }?>
                    <tr>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value+1, ENT_QUOTES, 'UTF-8');?>
</strong></td>
                        <td class="sql <?php if ($_smarty_tpl->tpl_vars['color']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');
}?>"><pre><code><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['query']->value['query'], ENT_QUOTES, 'UTF-8');?>
</code></pre></td>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><strong><?php echo htmlspecialchars((string) number_format($_smarty_tpl->tpl_vars['query']->value['time'],"5"), ENT_QUOTES, 'UTF-8');?>
</strong></td>
                    </tr>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cache_queries_list_table');?>

    </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <div class="deb-sub-tab">
        <ul>
            <li class="active"><a data-sub-tab-id="DebugToolbarSubTabCacheQueriesList">Queries list</a></li>
        </ul>
    </div>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cache_queries_tabs');?>

    <!--DebugToolbarTabCacheQueriesContent--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/debugger/components/cache_queries_tab.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/debugger/components/cache_queries_tab.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="deb-tab-content" id="DebugToolbarTabCacheQueriesContent">
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "cache_queries_tabs", null, null);?>
    <div class="deb-sub-tab-content" id="DebugToolbarSubTabCacheQueriesList">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "cache_queries_list_table", null, null);?>
        <div class="table-wrapper">
            <table class="deb-table" id="DebugToolbarSubTabCacheQueriesListTable">
                <caption>Queries <small class="deb-font-gray">time: <?php echo htmlspecialchars((string) number_format($_smarty_tpl->tpl_vars['data']->value['totals']['time'],"5"), ENT_QUOTES, 'UTF-8');?>
</small></caption>
                <tr>
                    <th style="width: 35px;"><?php $_smarty_tpl->_subTemplateRender("backend:views/debugger/components/sorter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"№",'field'=>"number",'order_by'=>$_smarty_tpl->tpl_vars['order_by']->value,'direction'=>$_smarty_tpl->tpl_vars['direction']->value,'url'=>"debugger.cache_queries",'debugger_hash'=>$_smarty_tpl->tpl_vars['debugger_hash']->value,'target_id'=>"DebugToolbarTabCacheQueriesContent"), 0, true);
?></th>
                    <th>Query</th>
                    <th style="width: 60px;"><?php $_smarty_tpl->_subTemplateRender("backend:views/debugger/components/sorter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"Time",'field'=>"time",'order_by'=>$_smarty_tpl->tpl_vars['order_by']->value,'direction'=>$_smarty_tpl->tpl_vars['direction']->value,'url'=>"debugger.cache_queries",'debugger_hash'=>$_smarty_tpl->tpl_vars['debugger_hash']->value,'target_id'=>"DebugToolbarTabCacheQueriesContent"), 0, true);
?></th>
                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['list'], 'query', false, 'key');
$_smarty_tpl->tpl_vars['query']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['query']->value) {
$_smarty_tpl->tpl_vars['query']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['query']->value['time'] > $_smarty_tpl->tpl_vars['long_query_time']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('color', "deb-light-red");?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['query']->value['time'] > $_smarty_tpl->tpl_vars['medium_query_time']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('color', "deb-light2-red");?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('color', false);?>
                    <?php }?>
                    <tr>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value+1, ENT_QUOTES, 'UTF-8');?>
</strong></td>
                        <td class="sql <?php if ($_smarty_tpl->tpl_vars['color']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');
}?>"><pre><code><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['query']->value['query'], ENT_QUOTES, 'UTF-8');?>
</code></pre></td>
                        <td <?php if ($_smarty_tpl->tpl_vars['color']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><strong><?php echo htmlspecialchars((string) number_format($_smarty_tpl->tpl_vars['query']->value['time'],"5"), ENT_QUOTES, 'UTF-8');?>
</strong></td>
                    </tr>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cache_queries_list_table');?>

    </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <div class="deb-sub-tab">
        <ul>
            <li class="active"><a data-sub-tab-id="DebugToolbarSubTabCacheQueriesList">Queries list</a></li>
        </ul>
    </div>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cache_queries_tabs');?>

    <!--DebugToolbarTabCacheQueriesContent--></div>
<?php }
}
}

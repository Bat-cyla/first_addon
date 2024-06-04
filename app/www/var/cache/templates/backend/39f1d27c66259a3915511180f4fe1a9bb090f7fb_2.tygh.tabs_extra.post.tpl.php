<?php
/* Smarty version 4.1.1, created on 2024-06-04 15:25:58
  from '/app/www/design/backend/templates/addons/discussion/hooks/pages/tabs_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665f07d61079e3_68304348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39f1d27c66259a3915511180f4fe1a9bb090f7fb' => 
    array (
      0 => '/app/www/design/backend/templates/addons/discussion/hooks/pages/tabs_extra.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl' => 1,
  ),
),false)) {
function content_665f07d61079e3_68304348 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page_type']->value != (defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_company_id'=>$_smarty_tpl->tpl_vars['page_data']->value['company_id']), 0, false);
}
}
}

<?php
/* Smarty version 4.1.1, created on 2024-05-15 09:50:52
  from '/app/www/design/backend/templates/common/content_more.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66445b4cbbf746_98253833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbe7027af2b522a06368858e5784088fb21d9bdf' => 
    array (
      0 => '/app/www/design/backend/templates/common/content_more.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66445b4cbbf746_98253833 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('content_more'));
?>

<?php $_smarty_tpl->_assignInScope('text_limit', (($tmp = $_smarty_tpl->tpl_vars['text_limit']->value ?? null)===null||$tmp==='' ? 600 ?? null : $tmp));
if (!$_smarty_tpl->tpl_vars['display']->value) {?>
    <?php $_smarty_tpl->_assignInScope('display', (mb_strlen($_smarty_tpl->tpl_vars['text']->value, 'UTF-8') > $_smarty_tpl->tpl_vars['text_limit']->value));
}
$_smarty_tpl->_assignInScope('text', (($tmp = $_smarty_tpl->tpl_vars['text']->value ?? null)===null||$tmp==='' ? "–" ?? null : $tmp));
$_smarty_tpl->_assignInScope('more_text', (($tmp = $_smarty_tpl->tpl_vars['more_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("content_more") ?? null : $tmp));?>

<div class="cs-content-more" data-ca-elem="contentMore">
    <div class="cs-content-more__text <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-elem="contentMoreText"
        <?php if ($_smarty_tpl->tpl_vars['visible_comment_lines']->value) {?>
            style="--cs-content-more-visible-comment-lines: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['visible_comment_lines']->value, ENT_QUOTES, 'UTF-8');?>
;"
        <?php }?>
    >
        <?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

    </div>
    <div class="cs-content-more__btn-wrapper <?php if (!$_smarty_tpl->tpl_vars['display']->value) {?>hidden<?php }?>" data-ca-elem="contentMoreBtnWrapper">
        <button type="button" class="cs-content-more__btn" data-ca-elem="contentMoreBtn">
            <?php echo $_smarty_tpl->tpl_vars['more_text']->value;?>

        </button>
    </div>
</div>
<?php }
}

<?php
/* Smarty version 4.3.4, created on 2024-07-01 22:45:28
  from '/var/www/html/admin123/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66831568cc2613_06444642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64688e68ee930bff99e70c3491eb0ce342aed178' => 
    array (
      0 => '/var/www/html/admin123/themes/default/template/content.tpl',
      1 => 1718360660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66831568cc2613_06444642 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}

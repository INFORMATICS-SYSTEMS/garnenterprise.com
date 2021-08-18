<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:06
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__stickers/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:619997270610e2efe2eada4-67372524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35f1acc634446c4069d589b2d29b4fa115e28d6e' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__stickers/hooks/index/scripts.post.tpl',
      1 => 1627896314,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '619997270610e2efe2eada4-67372524',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2efe2eda39_83875722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2efe2eda39_83875722')) {function content_610e2efe2eda39_83875722($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_function_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.script.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function (_, $) {
$.extend(_, {
ab__stickers: {
functions: { },
}
});
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo smarty_function_script(array('src'=>"js/addons/ab__stickers/admin.js"),$_smarty_tpl);?>
<?php }} ?>

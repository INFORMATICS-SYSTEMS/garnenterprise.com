<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:36:33
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__addons_manager/hooks/addons_detailed/manage_sidebar.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1604900676113fc917c4d68-94194414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efbe1b18dd30480be5191e187b8399f467968cc9' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__addons_manager/hooks/addons_detailed/manage_sidebar.pre.tpl',
      1 => 1627663026,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1604900676113fc917c4d68-94194414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fc917ca2a2_06871859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fc917ca2a2_06871859')) {function content_6113fc917ca2a2_06871859($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.inline_script.php';
?><?php if (preg_match('/^abt?__/',$_smarty_tpl->tpl_vars['addon']->value['addon'])) {?>
<style>
.control-group.sidebar__stats .text-warning {
display: none;
}
</style>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function (_, $) {
$('.control-group.sidebar__stats').each(function () {
if ($(this).find('.text-warning').length){
$(this).addClass('hidden');
}
});
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>

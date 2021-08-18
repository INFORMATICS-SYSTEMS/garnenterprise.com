<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:04
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__motivation_block/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:332801182610e2efc5c53d5-75745068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd683d187487ff4b19ea7722b7a77ce82d7f5e1fa' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__motivation_block/hooks/index/styles.post.tpl',
      1 => 1627896034,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '332801182610e2efc5c53d5-75745068',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2efc5cbcb9_27099993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2efc5cbcb9_27099993')) {function content_610e2efc5cbcb9_27099993($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.style.php';
if (!is_callable('smarty_modifier_in_array')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.in_array.php';
?><?php echo smarty_function_style(array('src'=>"addons/ab__motivation_block/styles.less"),$_smarty_tpl);?>

<?php echo smarty_function_style(array('src'=>"addons/ab__motivation_block/responsive_icons.less"),$_smarty_tpl);?>

<?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name'],array('abt__youpitheme'))) {?>
<?php echo smarty_function_style(array('src'=>"addons/ab__motivation_block/".((string)$_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name'])."_icons.less"),$_smarty_tpl);?>

<?php }?><?php }} ?>

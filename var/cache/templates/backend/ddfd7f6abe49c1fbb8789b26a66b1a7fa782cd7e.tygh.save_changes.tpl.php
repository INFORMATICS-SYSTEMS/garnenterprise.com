<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 11:12:51
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/buttons/save_changes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1260808595610e4083e81838-67405615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddfd7f6abe49c1fbb8789b26a66b1a7fa782cd7e' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/buttons/save_changes.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1260808595610e4083e81838-67405615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e4083e84109_53682208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e4083e84109_53682208')) {function content_610e4083e84109_53682208($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('save_changes'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("save_changes"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>

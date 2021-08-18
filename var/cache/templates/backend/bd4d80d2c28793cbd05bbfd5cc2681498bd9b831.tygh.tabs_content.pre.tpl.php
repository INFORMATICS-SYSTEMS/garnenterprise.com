<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:10:03
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/banners/tabs_content.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2025693249610e31cb5f1806-63704269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd4d80d2c28793cbd05bbfd5cc2681498bd9b831' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/banners/tabs_content.pre.tpl',
      1 => 1627895930,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2025693249610e31cb5f1806-63704269',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'device' => 0,
    'devices_enabled_fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e31cb5f54c3_25724129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e31cb5f54c3_25724129')) {function content_610e31cb5f54c3_25724129($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['device'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['device']->_loop = false;
 $_from = array('tablet','mobile'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['device']->key => $_smarty_tpl->tpl_vars['device']->value) {
$_smarty_tpl->tpl_vars['device']->_loop = true;
?>
<div id="content_abt__ut2_banner_tab_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden clearfix">
<?php echo $_smarty_tpl->getSubTemplate ("addons/abt__unitheme2/views/banners/components/abt__ut2_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('enabled_fields'=>$_smarty_tpl->tpl_vars['devices_enabled_fields']->value[$_smarty_tpl->tpl_vars['device']->value]), 0);?>

<!--content_abt__ut2_banner_tab_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php } ?>
<?php }} ?>

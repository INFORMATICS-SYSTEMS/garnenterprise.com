<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:09:57
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/banners/manage_mainbox_params.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1699341467610e31c5102b11-69636429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acc3d10a6b16b8931db2fc01d16ec9d6eea5ca77' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/banners/manage_mainbox_params.post.tpl',
      1 => 1627895930,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1699341467610e31c5102b11-69636429',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e31c5106109_89343082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e31c5106109_89343082')) {function content_610e31c5106109_89343082($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.banners.manage'));
?>
<?php if ($_REQUEST['type']==(defined('ABT__UT2_BANNER_TYPE') ? constant('ABT__UT2_BANNER_TYPE') : null)) {?>
<?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable($_smarty_tpl->__("abt__ut2.banners.manage"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['page_title'] = clone $_smarty_tpl->tpl_vars['page_title'];?>
<?php }?>
<?php }} ?>

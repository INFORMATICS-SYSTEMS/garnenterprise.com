<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:09:56
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/banners/manage_banner_type.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191284605610e31c4ada404-21913953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '324403a10f8ebf15940f507b2871a5539be3e7f7' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/banners/manage_banner_type.override.tpl',
      1 => 1627895930,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '191284605610e31c4ada404-21913953',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e31c4adeed7_06249641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e31c4adeed7_06249641')) {function content_610e31c4adeed7_06249641($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('graphic_banner','text_banner','banner_type.'));
?>
<?php if ($_smarty_tpl->tpl_vars['banner']->value['type']=="G") {
echo $_smarty_tpl->__("graphic_banner");
} elseif ($_smarty_tpl->tpl_vars['banner']->value['type']=="T") {
echo $_smarty_tpl->__("text_banner");
} else {
echo $_smarty_tpl->__("banner_type.".((string)$_smarty_tpl->tpl_vars['banner']->value['type']));
}?>
<?php }} ?>

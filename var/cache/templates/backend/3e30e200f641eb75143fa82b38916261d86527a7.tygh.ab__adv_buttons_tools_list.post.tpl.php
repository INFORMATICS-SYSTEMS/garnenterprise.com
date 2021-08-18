<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:09:56
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/banners/ab__adv_buttons_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1371493651610e31c4d956e9-70891133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e30e200f641eb75143fa82b38916261d86527a7' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/banners/ab__adv_buttons_tools_list.post.tpl',
      1 => 1627895930,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1371493651610e31c4d956e9-70891133',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e31c4d98ff0_36932338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e31c4d98ff0_36932338')) {function content_610e31c4d98ff0_36932338($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add','banner_type.abt__ut2'));
?>
<li class="divider"></li>
<li><?php ob_start();
echo $_smarty_tpl->__("add");
$_tmp6=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("banner_type.abt__ut2");
$_tmp7=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp6." ".$_tmp7,'href'=>"banners.add?type=".((string)(defined('ABT__UT2_BANNER_TYPE') ? constant('ABT__UT2_BANNER_TYPE') : null))));?>
</li>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:09:57
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/banners/search_form_banner_type.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:485861013610e31c50435a0-48295685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '444cfef049bfd0caa26ff746b2227bab1f1b07a6' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/banners/search_form_banner_type.post.tpl',
      1 => 1627895930,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '485861013610e31c50435a0-48295685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e31c50474f1_53036266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e31c50474f1_53036266')) {function content_610e31c50474f1_53036266($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('banner_type.'));
?>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['type']==(defined('ABT__UT2_BANNER_TYPE') ? constant('ABT__UT2_BANNER_TYPE') : null)) {?>selected="selected"<?php }?> value=<?php echo htmlspecialchars((defined('ABT__UT2_BANNER_TYPE') ? constant('ABT__UT2_BANNER_TYPE') : null), ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("banner_type.".((string)(defined('ABT__UT2_BANNER_TYPE') ? constant('ABT__UT2_BANNER_TYPE') : null)));?>
</option><?php }} ?>

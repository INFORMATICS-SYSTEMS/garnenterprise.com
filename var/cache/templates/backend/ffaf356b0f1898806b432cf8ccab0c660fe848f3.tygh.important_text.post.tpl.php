<?php /* Smarty version Smarty-3.1.21, created on 2021-08-09 08:57:21
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/seo/hooks/languages/important_text.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10943867266110c3c19c4ff4-38326249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffaf356b0f1898806b432cf8ccab0c660fe848f3' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/seo/hooks/languages/important_text.post.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10943867266110c3c19c4ff4-38326249',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seo_single_url_enable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6110c3c19c6fe8_01536337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6110c3c19c6fe8_01536337')) {function content_6110c3c19c6fe8_01536337($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['seo_single_url_enable']->value) {?>
<p><?php echo $_smarty_tpl->__('seo.important_language_text');?>
</p>
<?php }?><?php }} ?>

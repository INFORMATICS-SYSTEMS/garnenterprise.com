<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:43:06
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/profiles/components/context_menu/notify_checkboxes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1027898356113fe1a7964c0-38296894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '424dfd992ac508d04d2a3da1db700db1ee7ce593' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/profiles/components/context_menu/notify_checkboxes.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1027898356113fe1a7964c0-38296894',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fe1a798fd9_72247100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fe1a798fd9_72247100')) {function content_6113fe1a798fd9_72247100($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('notify_user'));
?>


<?php echo $_smarty_tpl->getSubTemplate ("common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"multiple",'id'=>"select",'notify'=>true,'notify_customer_status'=>true,'notify_text'=>$_smarty_tpl->__("notify_user"),'name_prefix'=>"notify"), 0);?>
<?php }} ?>

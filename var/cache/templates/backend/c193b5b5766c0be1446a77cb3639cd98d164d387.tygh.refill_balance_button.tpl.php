<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:43:23
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20491994196113fe2b561071-11866478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c193b5b5766c0be1446a77cb3639cd98d164d387' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_button.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20491994196113fe2b561071-11866478',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fe2b564b52_32031942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fe2b564b52_32031942')) {function content_6113fe2b564b52_32031942($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_debt_payout.refill_balance'));
?>
<?php ob_start();
echo $_smarty_tpl->__("vendor_debt_payout.refill_balance");
$_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"btn btn-primary cm-new-window",'form'=>"refill_balance",'dispatch'=>"dispatch[debt.refill_balance]",'text'=>$_tmp1));?>
<?php }} ?>

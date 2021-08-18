<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:43:23
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_debt_payout/hooks/index/finance_statistic_balance.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9721003826113fe2b523023-24863934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7323a3ecf414cadbb37deb6e70217763e3beec6a' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_debt_payout/hooks/index/finance_statistic_balance.post.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9721003826113fe2b523023-24863934',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current_balance' => 0,
    'amount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fe2b5502d8_67771258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fe2b5502d8_67771258')) {function content_6113fe2b5502d8_67771258($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_debt_payout.enter_an_amount','vendor_debt_payout.refill_balance'));
?>
<?php echo smarty_function_script(array('src'=>"js/addons/vendor_debt_payout/func.js"),$_smarty_tpl);?>

<form id="refill_balance" name="refill_balance" method="post" action="<?php echo htmlspecialchars(fn_url("debt.refill_balance"), ENT_QUOTES, 'UTF-8');?>
" target="_blank">
    <?php $_smarty_tpl->tpl_vars['amount'] = new Smarty_variable('', null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['current_balance']->value<0) {?>
        <?php $_smarty_tpl->tpl_vars['amount'] = new Smarty_variable(abs($_smarty_tpl->tpl_vars['current_balance']->value), null, 0);?>
    <?php }?>
    <div id="refill_amount" class="control-group hidden cm-refill-balance-block">
        <label class="control-label cm-refill-balance-label" for="elm_refill_balance">
            <?php echo $_smarty_tpl->__("vendor_debt_payout.enter_an_amount");?>
:
        </label>
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_id'=>"elm_refill_balance",'input_name'=>"refill_amount",'view'=>"input",'class'=>"input-full cm-refill-balance-amount",'value'=>$_smarty_tpl->tpl_vars['amount']->value), 0);?>

        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <a id="on_refill_amount" class="btn btn-primary cm-combination"><?php echo $_smarty_tpl->__("vendor_debt_payout.refill_balance");?>
</a>
</form><?php }} ?>

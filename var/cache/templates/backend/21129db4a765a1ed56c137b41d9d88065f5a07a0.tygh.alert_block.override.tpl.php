<?php /* Smarty version Smarty-3.1.21, created on 2021-08-09 08:56:48
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_debt_payout/hooks/index/alert_block.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20839034996110c3a0234928-88796531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21129db4a765a1ed56c137b41d9d88065f5a07a0' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_debt_payout/hooks/index/alert_block.override.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20839034996110c3a0234928-88796531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dashboard_alert' => 0,
    'is_block_alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6110c3a02375f8_51877122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6110c3a02375f8_51877122')) {function content_6110c3a02375f8_51877122($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['dashboard_alert']->value) {?>
    <div class="alert alert-block <?php if ($_smarty_tpl->tpl_vars['is_block_alert']->value) {?>alert-error debt-notification<?php }?>">
        <div class="debt-notification__text">
            <?php echo $_smarty_tpl->tpl_vars['dashboard_alert']->value;?>

        </div>
    </div>
<?php }?><?php }} ?>

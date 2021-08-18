<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:03:07
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/storefronts/components/redirect_customer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1526968716113d89b067543-18860171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be478fc0b17b59a361d3280b39b90fa9370cf373' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/storefronts/components/redirect_customer.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1526968716113d89b067543-18860171',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'id' => 0,
    'redirect_customer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d89b06cd75_59340889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d89b06cd75_59340889')) {function content_6113d89b06cd75_59340889($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('redirect_customer_from_storefront'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[redirect_customer]" : $tmp), null, 0);?>

<div class="control-group">
    <div class="controls">
        <input type="hidden"
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
"
        />
        <label for="redirect_customer_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
               class="checkbox"
        >
            <input type="checkbox"
                   name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                   id="redirect_customer_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                   value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                   class="cm-switch-availability"
                   <?php if ($_smarty_tpl->tpl_vars['redirect_customer']->value) {?>checked<?php }?>
            /><?php echo $_smarty_tpl->__("redirect_customer_from_storefront");?>

        </label>
    </div>
</div>
<?php }} ?>

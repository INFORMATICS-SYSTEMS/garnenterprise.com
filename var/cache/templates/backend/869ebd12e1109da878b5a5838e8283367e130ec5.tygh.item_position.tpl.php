<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:49:31
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/products/components/picker/item_position.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43862067610e3b0b4d7550-97838309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '869ebd12e1109da878b5a5838e8283367e130ec5' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/products/components/picker/item_position.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '43862067610e3b0b4d7550-97838309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3b0b4d9606_72165466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3b0b4d9606_72165466')) {function content_610e3b0b4d9606_72165466($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('position'));
?>
<div class="object-picker__products-position" data-th="<?php echo $_smarty_tpl->__("position");?>
:">
    <input type="text"
        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[${data.product_id}]"
        value="${(data._index + 1) * 10}"
        size="3"
        class="input-micro"
    />
</div><?php }} ?>

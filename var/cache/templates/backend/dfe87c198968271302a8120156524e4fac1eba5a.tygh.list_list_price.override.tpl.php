<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:43:24
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/list_list_price.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8625691276113fe2cc1e3b4-08098215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfe87c198968271302a8120156524e4fac1eba5a' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/list_list_price.override.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8625691276113fe2cc1e3b4-08098215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'runtime' => 0,
    'primary_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fe2cc23ec3_51890313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fe2cc23ec3_51890313')) {function content_6113fe2cc23ec3_51890313($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['master_product_id']) {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <?php echo htmlspecialchars(fn_format_price($_smarty_tpl->tpl_vars['product']->value['list_price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'UTF-8');?>

    <?php } else { ?>
        <input type="text"
               name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][list_price]"
               size="6" value="<?php echo htmlspecialchars(fn_format_price($_smarty_tpl->tpl_vars['product']->value['list_price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'UTF-8');?>
"
               class="input-mini input-hidden"
        />
    <?php }?>
<?php }?><?php }} ?>

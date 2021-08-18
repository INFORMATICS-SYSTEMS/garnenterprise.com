<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:43:24
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/list_price.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15012422176113fe2cb57c40-32699867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4271c510bc5f43662619074e0f3c097e81d6e616' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/list_price.override.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15012422176113fe2cb57c40-32699867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'price_from' => 0,
    'primary_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fe2cb84ce0_14354870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fe2cb84ce0_14354870')) {function content_6113fe2cb84ce0_14354870($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('master_products.price_from'));
?>
<?php if (!$_smarty_tpl->tpl_vars['product']->value['company_id']) {?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['master_product_offers_count']) {?>
        <?php $_smarty_tpl->tpl_vars['price_from'] = new Smarty_variable($_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price']), 0));?>

        <a href="<?php echo htmlspecialchars(fn_url("products.manage?product_type[]=".((string)(defined('PRODUCT_TYPE_VENDOR_PRODUCT_OFFER') ? constant('PRODUCT_TYPE_VENDOR_PRODUCT_OFFER') : null))."&product_type[]=".((string)(defined('PRODUCT_TYPE_PRODUCT_OFFER_VARIATION') ? constant('PRODUCT_TYPE_PRODUCT_OFFER_VARIATION') : null))."&master_product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->__("master_products.price_from",array("[formatted_price]"=>$_smarty_tpl->tpl_vars['price_from']->value));?>

        </a>
    <?php } else { ?>
        <input type="text"
               name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][price]"
               size="6" value="<?php echo htmlspecialchars(fn_format_price($_smarty_tpl->tpl_vars['product']->value['price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'UTF-8');?>
"
               class="input-mini input-hidden"
        />
    <?php }?>
<?php }?><?php }} ?>

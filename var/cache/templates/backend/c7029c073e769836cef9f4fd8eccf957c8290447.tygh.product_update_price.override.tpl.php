<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:36:55
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/product_update_price.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8725671276113fca7162418-85492442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7029c073e769836cef9f4fd8eccf957c8290447' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/product_update_price.override.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8725671276113fca7162418-85492442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
    'no_hide_input_if_shared_product' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'price_from' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fca7170622_20098069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fca7170622_20098069')) {function content_6113fca7170622_20098069($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('price','master_products.price_from'));
?>
<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['product_data']->value&&!$_smarty_tpl->tpl_vars['product_data']->value['company_id']&&$_smarty_tpl->tpl_vars['product_data']->value['master_product_offers_count']) {?>
    <!-- Overridden by the Common Products for Vendors add-on -->
    <div class="control-group <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
        <label for="elm_price_price" class="control-label cm-required">
            <?php echo $_smarty_tpl->__("price");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
):
        </label>
        <div class="controls">
            <input type="hidden" name="product_data[price]" value="<?php echo htmlspecialchars(fn_format_price((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['price'])===null||$tmp==='' ? "0.00" : $tmp),$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'UTF-8');?>
"/>
            <p>
                <?php $_smarty_tpl->tpl_vars['price_from'] = new Smarty_variable($_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product_data']->value['price']), 0));?>

                <a href="<?php echo htmlspecialchars(fn_url("products.manage?product_type[]=".((string)(defined('PRODUCT_TYPE_VENDOR_PRODUCT_OFFER') ? constant('PRODUCT_TYPE_VENDOR_PRODUCT_OFFER') : null))."&product_type[]=".((string)(defined('PRODUCT_TYPE_PRODUCT_OFFER_VARIATION') ? constant('PRODUCT_TYPE_PRODUCT_OFFER_VARIATION') : null))."&master_product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo $_smarty_tpl->__("master_products.price_from",array("[formatted_price]"=>$_smarty_tpl->tpl_vars['price_from']->value));?>

                </a>
            </p>
        </div>
    </div>
<?php }?><?php }} ?>

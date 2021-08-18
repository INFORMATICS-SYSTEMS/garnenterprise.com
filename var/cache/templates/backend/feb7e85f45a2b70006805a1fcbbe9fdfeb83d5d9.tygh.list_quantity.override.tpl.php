<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:43:24
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/list_quantity.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13908762206113fe2ccb04a4-28203785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feb7e85f45a2b70006805a1fcbbe9fdfeb83d5d9' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/list_quantity.override.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13908762206113fe2ccb04a4-28203785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_list_quantity' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fe2ccb8649_38578779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fe2ccb8649_38578779')) {function content_6113fe2ccb8649_38578779($_smarty_tpl) {?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_list_quantity']->value)===null||$tmp==='' ? false : $tmp)) {?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['master_product_offers_count']) {?>
        <a href="<?php echo htmlspecialchars(fn_url("products.manage?product_type[]=".((string)(defined('PRODUCT_TYPE_VENDOR_PRODUCT_OFFER') ? constant('PRODUCT_TYPE_VENDOR_PRODUCT_OFFER') : null))."&product_type[]=".((string)(defined('PRODUCT_TYPE_PRODUCT_OFFER_VARIATION') ? constant('PRODUCT_TYPE_PRODUCT_OFFER_VARIATION') : null))."&master_product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product']->value['inventory_amount'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['amount'] : $tmp), ENT_QUOTES, 'UTF-8');?>

        </a>
    <?php } else { ?>
        <!-- Overridden by the Common Products for Vendors add-on -->
        <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product']->value['inventory_amount'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['amount'] : $tmp), ENT_QUOTES, 'UTF-8');?>

    <?php }?>
<?php }?><?php }} ?>

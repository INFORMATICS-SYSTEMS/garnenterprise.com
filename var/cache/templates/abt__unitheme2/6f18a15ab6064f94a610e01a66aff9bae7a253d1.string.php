<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:21
         compiled from "6f18a15ab6064f94a610e01a66aff9bae7a253d1" */ ?>
<?php /*%%SmartyHeaderCode:661626584610e2f0da89253-48457297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f18a15ab6064f94a610e01a66aff9bae7a253d1' => 
    array (
      0 => '6f18a15ab6064f94a610e01a66aff9bae7a253d1',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '661626584610e2f0da89253-48457297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f0da8e151_61086268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f0da8e151_61086268')) {function content_610e2f0da8e151_61086268($_smarty_tpl) {?>
<ul id="customer_service_links">
<li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">About your order</a></li>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']&&$_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=='A') {?>
<li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">Wishlist</a></li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']=='Y') {?>
<li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">Comparison list</a></li>
<?php }?>
</ul><?php }} ?>

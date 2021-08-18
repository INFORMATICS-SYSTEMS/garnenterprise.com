<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:52:39
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/product_variations/hooks/product_list/product_data.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1638135753610e3bc76afa71-68471304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fa297a0a48be53ba8d16dfdf56da1f2545a4cea' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/product_variations/hooks/product_list/product_data.pre.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1638135753610e3bc76afa71-68471304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3bc76b24e1_55352991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3bc76b24e1_55352991')) {function content_610e3bc76b24e1_55352991($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['variation_name']) {?>
    <input type="hidden" id="product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_alt" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['variation_name'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<?php }} ?>

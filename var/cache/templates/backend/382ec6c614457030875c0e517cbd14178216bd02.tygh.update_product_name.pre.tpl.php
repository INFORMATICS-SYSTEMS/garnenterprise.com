<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:36:54
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/update_product_name.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12191509896113fca6e82a98-14193651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '382ec6c614457030875c0e517cbd14178216bd02' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/update_product_name.pre.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12191509896113fca6e82a98-14193651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fca6ea8158_85894919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fca6ea8158_85894919')) {function content_6113fca6ea8158_85894919($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('master_products.master_product'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['master_product_id']) {?>
    <div class="control-group">
        <label for="elm_parent_product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
               class="control-label"
        ><?php echo $_smarty_tpl->__("master_products.master_product");?>
:</label>
        <div class="controls" id="elm_parent_product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <a class="shift-input"
               href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['master_product_id'])), ENT_QUOTES, 'UTF-8');?>
"
            ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product'], ENT_QUOTES, 'UTF-8');?>
</a>
        </div>
    </div>
<?php }?><?php }} ?>

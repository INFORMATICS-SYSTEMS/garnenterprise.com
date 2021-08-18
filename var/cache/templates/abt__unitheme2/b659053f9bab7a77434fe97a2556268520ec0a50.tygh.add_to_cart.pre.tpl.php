<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:45:56
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/master_products/hooks/products/add_to_cart.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171533516113fec4ce90f3-35484647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b659053f9bab7a77434fe97a2556268520ec0a50' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/master_products/hooks/products/add_to_cart.pre.tpl',
      1 => 1628699674,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '171533516113fec4ce90f3-35484647',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'product_option_id' => 0,
    'product_option' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fec4cf8ee5_83280189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fec4cf8ee5_83280189')) {function content_6113fec4cf8ee5_83280189($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['is_vendor_products_list_item']) {?>
    <div class="ty-sellers-list__options hidden">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['selected_options']) {?>
            <?php  $_smarty_tpl->tpl_vars['product_option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_option']->_loop = false;
 $_smarty_tpl->tpl_vars['product_option_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['selected_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_option']->key => $_smarty_tpl->tpl_vars['product_option']->value) {
$_smarty_tpl->tpl_vars['product_option']->_loop = true;
 $_smarty_tpl->tpl_vars['product_option_id']->value = $_smarty_tpl->tpl_vars['product_option']->key;
?>
                <input type="hidden"
                       name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_option_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_option']->value, ENT_QUOTES, 'UTF-8');?>
"
                />
            <?php } ?>
        <?php }?>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/master_products/hooks/products/add_to_cart.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/master_products/hooks/products/add_to_cart.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['is_vendor_products_list_item']) {?>
    <div class="ty-sellers-list__options hidden">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['selected_options']) {?>
            <?php  $_smarty_tpl->tpl_vars['product_option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_option']->_loop = false;
 $_smarty_tpl->tpl_vars['product_option_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['selected_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_option']->key => $_smarty_tpl->tpl_vars['product_option']->value) {
$_smarty_tpl->tpl_vars['product_option']->_loop = true;
 $_smarty_tpl->tpl_vars['product_option_id']->value = $_smarty_tpl->tpl_vars['product_option']->key;
?>
                <input type="hidden"
                       name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_option_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_option']->value, ENT_QUOTES, 'UTF-8');?>
"
                />
            <?php } ?>
        <?php }?>
    </div>
<?php }
}?><?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:20
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/ab__deal_of_the_day/components/promotion_label.tpl" */ ?>
<?php /*%%SmartyHeaderCode:688003192610e2f0c32ce62-25457190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ed0e52d8379ce92dd9306678b1bd25e8d9ea46' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/ab__deal_of_the_day/components/promotion_label.tpl',
      1 => 1627896588,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '688003192610e2f0c32ce62-25457190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f0c338b63_34478684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f0c338b63_34478684')) {function content_610e2f0c338b63_34478684($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['promotions']&&fn_ab__dotd_filter_applied_promotions(array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']),array('show_label_in_products_lists'=>true,'exclude_hidden'=>true))) {?>
    <div class="ab_dotd_product_label"><?php echo $_smarty_tpl->__('ab__dotd_product_label');?>
</div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/components/promotion_label.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/components/promotion_label.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['promotions']&&fn_ab__dotd_filter_applied_promotions(array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']),array('show_label_in_products_lists'=>true,'exclude_hidden'=>true))) {?>
    <div class="ab_dotd_product_label"><?php echo $_smarty_tpl->__('ab__dotd_product_label');?>
</div>
<?php }
}?><?php }} ?>

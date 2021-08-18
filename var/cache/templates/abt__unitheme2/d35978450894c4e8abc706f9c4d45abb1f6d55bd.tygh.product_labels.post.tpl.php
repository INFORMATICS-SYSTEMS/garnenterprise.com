<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:45:24
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/master_products/hooks/products/product_labels.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7719651076113fea4294b65-13740850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd35978450894c4e8abc706f9c4d45abb1f6d55bd' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/master_products/hooks/products/product_labels.post.tpl',
      1 => 1628699674,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7719651076113fea4294b65-13740850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'show_master_product_discount_label' => 0,
    'show_price_values' => 0,
    'label_text' => 0,
    'product_labels_mini' => 0,
    'product_labels_static' => 0,
    'product_labels_rounded' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fea42ac339_42852940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fea42ac339_42852940')) {function content_6113fea42ac339_42852940($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('master_products.save_up_to','master_products.save_up_to','master_products.save_up_to','master_products.save_up_to'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['product']->value['company_id']&&$_smarty_tpl->tpl_vars['show_master_product_discount_label']->value&&($_smarty_tpl->tpl_vars['product']->value['discount_prc']||$_smarty_tpl->tpl_vars['product']->value['list_discount_prc'])&&$_smarty_tpl->tpl_vars['show_price_values']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['discount']) {?>
        <?php ob_start();
echo $_smarty_tpl->__("master_products.save_up_to");
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['label_text'] = new Smarty_variable($_tmp1." <em>".((string)$_smarty_tpl->tpl_vars['product']->value['discount_prc'])."%</em>", null, 0);?>
    <?php } else { ?>
        <?php ob_start();
echo $_smarty_tpl->__("master_products.save_up_to");
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['label_text'] = new Smarty_variable($_tmp2." <em>".((string)$_smarty_tpl->tpl_vars['product']->value['list_discount_prc'])."%</em>", null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('label_meta'=>"ty-product-labels__item--discount",'label_text'=>$_smarty_tpl->tpl_vars['label_text']->value,'label_mini'=>$_smarty_tpl->tpl_vars['product_labels_mini']->value,'label_static'=>$_smarty_tpl->tpl_vars['product_labels_static']->value,'label_rounded'=>$_smarty_tpl->tpl_vars['product_labels_rounded']->value), 0);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/master_products/hooks/products/product_labels.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/master_products/hooks/products/product_labels.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['product']->value['company_id']&&$_smarty_tpl->tpl_vars['show_master_product_discount_label']->value&&($_smarty_tpl->tpl_vars['product']->value['discount_prc']||$_smarty_tpl->tpl_vars['product']->value['list_discount_prc'])&&$_smarty_tpl->tpl_vars['show_price_values']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['discount']) {?>
        <?php ob_start();
echo $_smarty_tpl->__("master_products.save_up_to");
$_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['label_text'] = new Smarty_variable($_tmp3." <em>".((string)$_smarty_tpl->tpl_vars['product']->value['discount_prc'])."%</em>", null, 0);?>
    <?php } else { ?>
        <?php ob_start();
echo $_smarty_tpl->__("master_products.save_up_to");
$_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['label_text'] = new Smarty_variable($_tmp4." <em>".((string)$_smarty_tpl->tpl_vars['product']->value['list_discount_prc'])."%</em>", null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('label_meta'=>"ty-product-labels__item--discount",'label_text'=>$_smarty_tpl->tpl_vars['label_text']->value,'label_mini'=>$_smarty_tpl->tpl_vars['product_labels_mini']->value,'label_static'=>$_smarty_tpl->tpl_vars['product_labels_static']->value,'label_rounded'=>$_smarty_tpl->tpl_vars['product_labels_rounded']->value), 0);?>

<?php }
}?><?php }} ?>

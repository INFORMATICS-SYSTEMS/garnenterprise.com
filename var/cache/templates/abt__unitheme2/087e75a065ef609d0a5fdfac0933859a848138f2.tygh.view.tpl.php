<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:14:25
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/views/products/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1657439434610e32d130de65-69410792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '087e75a065ef609d0a5fdfac0933859a848138f2' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/views/products/view.tpl',
      1 => 1627896562,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1657439434610e32d130de65-69410792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'settings' => 0,
    'show_add_to_cart' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e32d135bd84_22377511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e32d135bd84_22377511')) {function content_610e32d135bd84_22377511($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->_capture_stack[0][] = array("val_hide_form", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("val_capture_options_vs_qty", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("val_capture_buttons", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("val_no_ajax", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:layout_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:layout_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>




<?php echo $_smarty_tpl->getSubTemplate (fn_get_product_details_view($_smarty_tpl->tpl_vars['product']->value['product_id']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_sku'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_rating'=>true,'show_old_price'=>true,'show_price'=>true,'show_list_discount'=>true,'show_clean_price'=>true,'details_page'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'show_product_amount'=>true,'show_amount_label'=>false,'show_product_options'=>true,'hide_form'=>Smarty::$_smarty_vars['capture']['val_hide_form'],'show_qty'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_short_descr'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_short_description'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','min_qty'=>true,'show_edp'=>true,'show_add_to_cart'=>(($tmp = @$_smarty_tpl->tpl_vars['show_add_to_cart']->value)===null||$tmp==='' ? true : $tmp),'but_role'=>"action",'capture_buttons'=>Smarty::$_smarty_vars['capture']['val_capture_buttons'],'capture_options_vs_qty'=>Smarty::$_smarty_vars['capture']['val_capture_options_vs_qty'],'separate_buttons'=>Smarty::$_smarty_vars['capture']['val_separate_buttons'],'show_list_buttons'=>true,'block_width'=>true,'no_ajax'=>Smarty::$_smarty_vars['capture']['val_no_ajax'],'show_product_tabs'=>true), 0);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:layout_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->_capture_stack[0][] = array("val_hide_form", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("val_capture_options_vs_qty", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("val_capture_buttons", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("val_no_ajax", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:layout_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:layout_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>




<?php echo $_smarty_tpl->getSubTemplate (fn_get_product_details_view($_smarty_tpl->tpl_vars['product']->value['product_id']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_sku'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_rating'=>true,'show_old_price'=>true,'show_price'=>true,'show_list_discount'=>true,'show_clean_price'=>true,'details_page'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'show_product_amount'=>true,'show_amount_label'=>false,'show_product_options'=>true,'hide_form'=>Smarty::$_smarty_vars['capture']['val_hide_form'],'show_qty'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','show_short_descr'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_short_description'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y','min_qty'=>true,'show_edp'=>true,'show_add_to_cart'=>(($tmp = @$_smarty_tpl->tpl_vars['show_add_to_cart']->value)===null||$tmp==='' ? true : $tmp),'but_role'=>"action",'capture_buttons'=>Smarty::$_smarty_vars['capture']['val_capture_buttons'],'capture_options_vs_qty'=>Smarty::$_smarty_vars['capture']['val_capture_options_vs_qty'],'separate_buttons'=>Smarty::$_smarty_vars['capture']['val_separate_buttons'],'show_list_buttons'=>true,'block_width'=>true,'no_ajax'=>Smarty::$_smarty_vars['capture']['val_no_ajax'],'show_product_tabs'=>true), 0);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:layout_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>
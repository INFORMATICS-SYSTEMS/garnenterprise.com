<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:14:28
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/product_templates/components/product_brand_logo_prepare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:946835066610e32d4121fa5-52265483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76897c0944099af2dd37c6debd9faa6ff28042ee' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/product_templates/components/product_brand_logo_prepare.tpl',
      1 => 1627896562,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '946835066610e32d4121fa5-52265483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'product' => 0,
    'brand_feature' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e32d4149c29_31797091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e32d4149c29_31797091')) {function content_610e32d4149c29_31797091($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["brand_feature"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['header_features'][$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars["brand_feature"] = clone $_smarty_tpl->tpl_vars["brand_feature"];?>
<?php if (empty($_smarty_tpl->tpl_vars['brand_feature']->value)) {?>
    <?php $_smarty_tpl->tpl_vars['brand_feature'] = new Smarty_variable(fn_array_value_to_key($_smarty_tpl->tpl_vars['product']->value['header_features'],'feature_id'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["brand_feature"] = new Smarty_variable($_smarty_tpl->tpl_vars['brand_feature']->value[$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars["brand_feature"] = clone $_smarty_tpl->tpl_vars["brand_feature"];?>
<?php }?>

<?php if (empty($_smarty_tpl->tpl_vars['brand_feature']->value)) {?>
    <?php $_smarty_tpl->tpl_vars["brand_feature"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_features'][$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars["brand_feature"] = clone $_smarty_tpl->tpl_vars["brand_feature"];?>
<?php }?>

<?php if (empty($_smarty_tpl->tpl_vars['brand_feature']->value)) {?>
    <?php $_smarty_tpl->tpl_vars['brand_feature'] = new Smarty_variable(fn_array_value_to_key($_smarty_tpl->tpl_vars['product']->value['product_features'],'feature_id'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["brand_feature"] = new Smarty_variable($_smarty_tpl->tpl_vars['brand_feature']->value[$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars["brand_feature"] = clone $_smarty_tpl->tpl_vars["brand_feature"];?>
<?php }?>

<?php if (empty($_smarty_tpl->tpl_vars['brand_feature']->value)) {?>
    <?php $_smarty_tpl->tpl_vars['brand_feature'] = new Smarty_variable(fn_get_product_features(array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'variants_selected_only'=>true,'feature_id'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id'],'variants'=>true,'existent_only'=>true)), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['brand_feature']->value) {?>
        <?php $_smarty_tpl->tpl_vars["brand_feature"] = new Smarty_variable($_smarty_tpl->tpl_vars['brand_feature']->value[0][$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars["brand_feature"] = clone $_smarty_tpl->tpl_vars["brand_feature"];?>
    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_templates/components/product_brand_logo_prepare.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_templates/components/product_brand_logo_prepare.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["brand_feature"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['header_features'][$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars["brand_feature"] = clone $_smarty_tpl->tpl_vars["brand_feature"];?>
<?php if (empty($_smarty_tpl->tpl_vars['brand_feature']->value)) {?>
    <?php $_smarty_tpl->tpl_vars['brand_feature'] = new Smarty_variable(fn_array_value_to_key($_smarty_tpl->tpl_vars['product']->value['header_features'],'feature_id'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["brand_feature"] = new Smarty_variable($_smarty_tpl->tpl_vars['brand_feature']->value[$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars["brand_feature"] = clone $_smarty_tpl->tpl_vars["brand_feature"];?>
<?php }?>

<?php if (empty($_smarty_tpl->tpl_vars['brand_feature']->value)) {?>
    <?php $_smarty_tpl->tpl_vars["brand_feature"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_features'][$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars["brand_feature"] = clone $_smarty_tpl->tpl_vars["brand_feature"];?>
<?php }?>

<?php if (empty($_smarty_tpl->tpl_vars['brand_feature']->value)) {?>
    <?php $_smarty_tpl->tpl_vars['brand_feature'] = new Smarty_variable(fn_array_value_to_key($_smarty_tpl->tpl_vars['product']->value['product_features'],'feature_id'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["brand_feature"] = new Smarty_variable($_smarty_tpl->tpl_vars['brand_feature']->value[$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars["brand_feature"] = clone $_smarty_tpl->tpl_vars["brand_feature"];?>
<?php }?>

<?php if (empty($_smarty_tpl->tpl_vars['brand_feature']->value)) {?>
    <?php $_smarty_tpl->tpl_vars['brand_feature'] = new Smarty_variable(fn_get_product_features(array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'variants_selected_only'=>true,'feature_id'=>$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id'],'variants'=>true,'existent_only'=>true)), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['brand_feature']->value) {?>
        <?php $_smarty_tpl->tpl_vars["brand_feature"] = new Smarty_variable($_smarty_tpl->tpl_vars['brand_feature']->value[0][$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']], null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars["brand_feature"] = clone $_smarty_tpl->tpl_vars["brand_feature"];?>
    <?php }?>
<?php }
}?><?php }} ?>

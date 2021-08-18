<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:47:30
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/ab__category_banners/overrides/blocks/product_list_templates/products_multicolumns.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1949456276610e3a92619cb2-19881131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ed10c2e57c720afb2b2f683e2910201f09e3095' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/ab__category_banners/overrides/blocks/product_list_templates/products_multicolumns.tpl',
      1 => 1627896588,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1949456276610e3a92619cb2-19881131',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'tmpl' => 0,
    'ab__cb_banner_exists' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3a9262c804_50314323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3a9262c804_50314323')) {function content_610e3a9262c804_50314323($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("products_grid_html", null, null); ob_start(); ?>
    <?php $_smarty_tpl->tpl_vars['tmpl'] = new Smarty_variable('products_multicolumns', null, 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("blocks/product_list_templates/default_params/".((string)$_smarty_tpl->tpl_vars['tmpl']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['ab__cb_banner_exists']->value) {?>
    <?php echo htmlspecialchars(fn_ab__cb_insert_category_banner(Smarty::$_smarty_vars['capture']['products_grid_html'],'products_multicolumns'), ENT_QUOTES, 'UTF-8');?>

<?php }?>

<?php echo Smarty::$_smarty_vars['capture']['products_grid_html'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/ab__category_banners/overrides/blocks/product_list_templates/products_multicolumns.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/ab__category_banners/overrides/blocks/product_list_templates/products_multicolumns.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("products_grid_html", null, null); ob_start(); ?>
    <?php $_smarty_tpl->tpl_vars['tmpl'] = new Smarty_variable('products_multicolumns', null, 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("blocks/product_list_templates/default_params/".((string)$_smarty_tpl->tpl_vars['tmpl']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['ab__cb_banner_exists']->value) {?>
    <?php echo htmlspecialchars(fn_ab__cb_insert_category_banner(Smarty::$_smarty_vars['capture']['products_grid_html'],'products_multicolumns'), ENT_QUOTES, 'UTF-8');?>

<?php }?>

<?php echo Smarty::$_smarty_vars['capture']['products_grid_html'];
}?><?php }} ?>

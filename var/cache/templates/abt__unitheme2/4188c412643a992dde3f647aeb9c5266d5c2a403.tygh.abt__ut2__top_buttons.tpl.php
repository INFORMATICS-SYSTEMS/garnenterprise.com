<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:15
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/static_templates/abt__ut2__top_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:746550640610e2f07b93bc1-95760515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4188c412643a992dde3f647aeb9c5266d5c2a403' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/static_templates/abt__ut2__top_buttons.tpl',
      1 => 1627896562,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '746550640610e2f07b93bc1-95760515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'hide_compare_list_button' => 0,
    'product' => 0,
    'compared_products' => 0,
    'addons' => 0,
    'hide_wishlist_button' => 0,
    'wishlist_count' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f07bbf211_52507109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f07bbf211_52507109')) {function content_610e2f07bbf211_52507109($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_modifier_count')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('tmpl_abt__ut2__top_buttons.compare_list.tooltip','view_wishlist','tmpl_abt__ut2__top_buttons.compare_list.tooltip','view_wishlist'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']==smarty_modifier_enum("YesNo::YES")&&!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value||$_smarty_tpl->tpl_vars['product']->value['feature_comparison']==smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->tpl_vars["compared_products"] = new Smarty_variable(fn_get_comparison_products(''), null, 0);?>
    <div class="ut2-compared-products" id="abt__ut2_compared_products">
        <a class="<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>cm-tooltip<?php }?> ty-compare__a <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['compared_products']->value)>0) {?>active<?php }?>" href="<?php echo htmlspecialchars(fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->__("tmpl_abt__ut2__top_buttons.compare_list.tooltip");?>
"><i class="ut2-icon-baseline-equalizer"></i><?php if ($_smarty_tpl->tpl_vars['compared_products']->value) {?> <span class="count"><?php echo htmlspecialchars(smarty_modifier_count($_smarty_tpl->tpl_vars['compared_products']->value), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a>
        <!--abt__ut2_compared_products--></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=="A"&&!$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {?>
    <?php $_smarty_tpl->tpl_vars['wishlist_count'] = new Smarty_variable(call_user_func("fn_wishlist_get_count"), null, 0);?>
    <div class="ut2-wishlist-count" id="abt__ut2_wishlist_count">
        <a class="<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>cm-tooltip<?php }?> ty-wishlist__a <?php if ($_smarty_tpl->tpl_vars['wishlist_count']->value>0) {?>active<?php }?>" href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->__("view_wishlist");?>
"><i class="ut2-icon-baseline-favorite-border"></i><?php if ($_smarty_tpl->tpl_vars['wishlist_count']->value>0) {?><span class="count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist_count']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a>
        <!--abt__ut2_wishlist_count--></div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/abt__ut2__top_buttons.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/abt__ut2__top_buttons.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']==smarty_modifier_enum("YesNo::YES")&&!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value||$_smarty_tpl->tpl_vars['product']->value['feature_comparison']==smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->tpl_vars["compared_products"] = new Smarty_variable(fn_get_comparison_products(''), null, 0);?>
    <div class="ut2-compared-products" id="abt__ut2_compared_products">
        <a class="<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>cm-tooltip<?php }?> ty-compare__a <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['compared_products']->value)>0) {?>active<?php }?>" href="<?php echo htmlspecialchars(fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->__("tmpl_abt__ut2__top_buttons.compare_list.tooltip");?>
"><i class="ut2-icon-baseline-equalizer"></i><?php if ($_smarty_tpl->tpl_vars['compared_products']->value) {?> <span class="count"><?php echo htmlspecialchars(smarty_modifier_count($_smarty_tpl->tpl_vars['compared_products']->value), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a>
        <!--abt__ut2_compared_products--></div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=="A"&&!$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {?>
    <?php $_smarty_tpl->tpl_vars['wishlist_count'] = new Smarty_variable(call_user_func("fn_wishlist_get_count"), null, 0);?>
    <div class="ut2-wishlist-count" id="abt__ut2_wishlist_count">
        <a class="<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>cm-tooltip<?php }?> ty-wishlist__a <?php if ($_smarty_tpl->tpl_vars['wishlist_count']->value>0) {?>active<?php }?>" href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo $_smarty_tpl->__("view_wishlist");?>
"><i class="ut2-icon-baseline-favorite-border"></i><?php if ($_smarty_tpl->tpl_vars['wishlist_count']->value>0) {?><span class="count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist_count']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a>
        <!--abt__ut2_wishlist_count--></div>
<?php }
}?><?php }} ?>

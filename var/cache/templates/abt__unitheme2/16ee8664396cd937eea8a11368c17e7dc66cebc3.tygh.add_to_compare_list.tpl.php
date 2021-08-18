<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:45:25
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/master_products/overrides/buttons/add_to_compare_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5911978266113fea51f1db5-86004406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16ee8664396cd937eea8a11368c17e7dc66cebc3' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/master_products/overrides/buttons/add_to_compare_list.tpl',
      1 => 1628699674,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5911978266113fea51f1db5-86004406',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'show_add_to_cart' => 0,
    'details_page' => 0,
    'quick_view' => 0,
    'config' => 0,
    'hide_compare_list_button' => 0,
    'redirect_url' => 0,
    'compare_button_typ' => 0,
    'compare_but_id' => 0,
    'but_id' => 0,
    'compare_but_name' => 0,
    'but_name' => 0,
    'compare_but_title' => 0,
    'compare_but_meta' => 0,
    'compare_but_href' => 0,
    'but_meta' => 0,
    'but_title' => 0,
    'but_href' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fea52239c9_75940276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fea52239c9_75940276')) {function content_6113fea52239c9_75940276($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_to_comparison_list','compare','add_to_comparison_list','compare'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['product']->value['company_id']&&$_smarty_tpl->tpl_vars['show_add_to_cart']->value&&(!$_smarty_tpl->tpl_vars['details_page']->value||$_smarty_tpl->tpl_vars['quick_view']->value)) {?>
    
<?php } else { ?>
    <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
        <?php $_smarty_tpl->tpl_vars['ajax_class'] = new Smarty_variable("cm-ajax cm-ajax-full-render", null, 0);?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value) {?>
        <?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(rawurlencode((($tmp = @$_smarty_tpl->tpl_vars['redirect_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp)), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['compare_button_typ'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_button_typ']->value)===null||$tmp==='' ? "icon" : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_id']->value : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_name']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_name']->value : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_title'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_title']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_to_comparison_list") : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_meta']->value)===null||$tmp==='' ? "ut2-add-to-compare ".((string)$_smarty_tpl->tpl_vars['ajax_class']->value) : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_href'] = new Smarty_variable(fn_url((($tmp = @$_smarty_tpl->tpl_vars['compare_but_href']->value)===null||$tmp==='' ? "product_features.add_product?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value) : $tmp)), null, 0);?>

        <a	class="
	<?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>
    <?php if ($_smarty_tpl->tpl_vars['details_page']->value) {?> label<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_name']->value) {?> cm-submit<?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?> cm-tooltip<?php }?>"

                <?php if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
              data-ca-target-id="comparison_list,account_info*,abt__ut2_compared_products"
                <?php if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>

            <?php if ($_smarty_tpl->tpl_vars['compare_button_typ']->value=="icon") {?><i class="ut2-icon-baseline-equalizer"></i><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['details_page']->value) {
echo $_smarty_tpl->__("compare");
}?>
        </a>
    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/master_products/overrides/buttons/add_to_compare_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/master_products/overrides/buttons/add_to_compare_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['product']->value['company_id']&&$_smarty_tpl->tpl_vars['show_add_to_cart']->value&&(!$_smarty_tpl->tpl_vars['details_page']->value||$_smarty_tpl->tpl_vars['quick_view']->value)) {?>
    
<?php } else { ?>
    <?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
        <?php $_smarty_tpl->tpl_vars['ajax_class'] = new Smarty_variable("cm-ajax cm-ajax-full-render", null, 0);?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value) {?>
        <?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(rawurlencode((($tmp = @$_smarty_tpl->tpl_vars['redirect_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp)), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['compare_button_typ'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_button_typ']->value)===null||$tmp==='' ? "icon" : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_id']->value : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_name']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['but_name']->value : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_title'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_title']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_to_comparison_list") : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_meta']->value)===null||$tmp==='' ? "ut2-add-to-compare ".((string)$_smarty_tpl->tpl_vars['ajax_class']->value) : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['but_href'] = new Smarty_variable(fn_url((($tmp = @$_smarty_tpl->tpl_vars['compare_but_href']->value)===null||$tmp==='' ? "product_features.add_product?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value) : $tmp)), null, 0);?>

        <a	class="
	<?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>
    <?php if ($_smarty_tpl->tpl_vars['details_page']->value) {?> label<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_name']->value) {?> cm-submit<?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?> cm-tooltip<?php }?>"

                <?php if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
              data-ca-target-id="comparison_list,account_info*,abt__ut2_compared_products"
                <?php if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>

            <?php if ($_smarty_tpl->tpl_vars['compare_button_typ']->value=="icon") {?><i class="ut2-icon-baseline-equalizer"></i><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['details_page']->value) {
echo $_smarty_tpl->__("compare");
}?>
        </a>
    <?php }?>
<?php }
}?><?php }} ?>

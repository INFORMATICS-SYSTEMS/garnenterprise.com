<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:19
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/buttons/add_to_compare_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2004068571610e2f0be4dc49-55029852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06790dcf92a0cd38cd9543558b0284acaf7eafff' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/buttons/add_to_compare_list.tpl',
      1 => 1627896562,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2004068571610e2f0be4dc49-55029852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'hide_compare_list_button' => 0,
    'compare_button_type' => 0,
    'compare_but_meta' => 0,
    'compare_but_title' => 0,
    'compare_but_target_id' => 0,
    'compare_but_rel' => 0,
    'redirect_url' => 0,
    'selected_layout' => 0,
    'c_url' => 0,
    'compare_but_href' => 0,
    'but_meta' => 0,
    'details_page' => 0,
    'but_title' => 0,
    'but_target_id' => 0,
    'but_rel' => 0,
    'but_href' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f0be7f769_00869585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f0be7f769_00869585')) {function content_610e2f0be7f769_00869585($_smarty_tpl) {?><?php if (!is_callable('smarty_block_ab__hide_content')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.ab__hide_content.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_to_comparison_list','compare','add_to_comparison_list','compare'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('ab__hide_content', array('bot_type'=>"ALL")); $_block_repeat=true; echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->tpl_vars['ajax_class'] = new Smarty_variable("cm-ajax cm-ajax-full-render", null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('config', null, 0);
$_smarty_tpl->tpl_vars['config']->value['current_url'] = fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"layout");?>
    <?php $_smarty_tpl->tpl_vars['compare_button_type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_button_type']->value)===null||$tmp==='' ? "icon" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_meta']->value)===null||$tmp==='' ? "ut2-add-to-compare ".((string)$_smarty_tpl->tpl_vars['ajax_class']->value) : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_title'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_title']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_to_comparison_list") : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_target_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_target_id']->value)===null||$tmp==='' ? "comparison_list,account_info*" : $tmp), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['but_rel'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_rel']->value)===null||$tmp==='' ? "nofollow" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['redirect_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['selected_layout']->value) {?>
        <?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&layout=".((string)$_smarty_tpl->tpl_vars['selected_layout']->value), null, 0);?>
    <?php }?>

    <?php ob_start();
echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');
$_tmp50=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['but_href'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_href']->value)===null||$tmp==='' ? "product_features.add_product?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&redirect_url=".$_tmp50 : $tmp), null, 0);?>

    <a class="
	<?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>
    <?php if ($_smarty_tpl->tpl_vars['details_page']->value) {?> label<?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?> cm-tooltip<?php }?>"
    <?php if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
,abt__ut2_compared_products"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_rel']->value) {?> rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_rel']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>

    <?php if ($_smarty_tpl->tpl_vars['compare_button_type']->value=="icon") {?><i class="ut2-icon-baseline-equalizer"></i><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['details_page']->value) {
echo $_smarty_tpl->__("compare");
}?>
    </a>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/add_to_compare_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/add_to_compare_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('ab__hide_content', array('bot_type'=>"ALL")); $_block_repeat=true; echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->tpl_vars['ajax_class'] = new Smarty_variable("cm-ajax cm-ajax-full-render", null, 0);?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('config', null, 0);
$_smarty_tpl->tpl_vars['config']->value['current_url'] = fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"layout");?>
    <?php $_smarty_tpl->tpl_vars['compare_button_type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_button_type']->value)===null||$tmp==='' ? "icon" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_meta']->value)===null||$tmp==='' ? "ut2-add-to-compare ".((string)$_smarty_tpl->tpl_vars['ajax_class']->value) : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_title'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_title']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_to_comparison_list") : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['but_target_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_target_id']->value)===null||$tmp==='' ? "comparison_list,account_info*" : $tmp), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['but_rel'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_rel']->value)===null||$tmp==='' ? "nofollow" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['redirect_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['selected_layout']->value) {?>
        <?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&layout=".((string)$_smarty_tpl->tpl_vars['selected_layout']->value), null, 0);?>
    <?php }?>

    <?php ob_start();
echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');
$_tmp51=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['but_href'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['compare_but_href']->value)===null||$tmp==='' ? "product_features.add_product?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&redirect_url=".$_tmp51 : $tmp), null, 0);?>

    <a class="
	<?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>
    <?php if ($_smarty_tpl->tpl_vars['details_page']->value) {?> label<?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?> cm-tooltip<?php }?>"
    <?php if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
,abt__ut2_compared_products"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_rel']->value) {?> rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_rel']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>

    <?php if ($_smarty_tpl->tpl_vars['compare_button_type']->value=="icon") {?><i class="ut2-icon-baseline-equalizer"></i><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['details_page']->value) {
echo $_smarty_tpl->__("compare");
}?>
    </a>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ab__hide_content(array('bot_type'=>"ALL"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>

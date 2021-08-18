<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:47:31
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/ab__deal_of_the_day/components/applied_promotions_in_products_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1944325200610e3a930bef96-36133337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b02e4152fab20d12c36104485738856085e338f' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/ab__deal_of_the_day/components/applied_promotions_in_products_list.tpl',
      1 => 1627896292,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1944325200610e3a930bef96-36133337',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'product' => 0,
    'promotions_ids' => 0,
    'promotion_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3a930d2076_65829824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3a930d2076_65829824')) {function content_610e3a930d2076_65829824($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['amount_of_promos_in_prods_lists']&&$_smarty_tpl->tpl_vars['product']->value['promotions']) {?>
    <?php $_smarty_tpl->tpl_vars['promotions_ids'] = new Smarty_variable(fn_ab__dotd_filter_applied_promotions(array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']),array("exclude_hidden"=>true,"show_in_products_lists"=>true)), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['promotions_ids'] = new Smarty_variable(array_slice($_smarty_tpl->tpl_vars['promotions_ids']->value,0,$_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['amount_of_promos_in_prods_lists']), null, 0);?>

    <div class="ab-dotd-promos">
        <?php  $_smarty_tpl->tpl_vars['promotion_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promotion_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promotions_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promotion_id']->key => $_smarty_tpl->tpl_vars['promotion_id']->value) {
$_smarty_tpl->tpl_vars['promotion_id']->_loop = true;
?>
            <div class="ab-dotd-category-promo" data-ca-promotion-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion_id']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
        <?php } ?>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/components/applied_promotions_in_products_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/components/applied_promotions_in_products_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['amount_of_promos_in_prods_lists']&&$_smarty_tpl->tpl_vars['product']->value['promotions']) {?>
    <?php $_smarty_tpl->tpl_vars['promotions_ids'] = new Smarty_variable(fn_ab__dotd_filter_applied_promotions(array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']),array("exclude_hidden"=>true,"show_in_products_lists"=>true)), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['promotions_ids'] = new Smarty_variable(array_slice($_smarty_tpl->tpl_vars['promotions_ids']->value,0,$_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['amount_of_promos_in_prods_lists']), null, 0);?>

    <div class="ab-dotd-promos">
        <?php  $_smarty_tpl->tpl_vars['promotion_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promotion_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promotions_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promotion_id']->key => $_smarty_tpl->tpl_vars['promotion_id']->value) {
$_smarty_tpl->tpl_vars['promotion_id']->_loop = true;
?>
            <div class="ab-dotd-category-promo" data-ca-promotion-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promotion_id']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
        <?php } ?>
    </div>
<?php }
}?><?php }} ?>

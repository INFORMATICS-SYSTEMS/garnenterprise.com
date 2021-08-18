<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:14:29
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/products/components/buy_together.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1941431065610e32d5d7e513-32584875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97d3756c1fe084c3f3c7ddb2de7e1f2a216fb9ce' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/hooks/products/components/buy_together.tpl',
      1 => 1627896588,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1941431065610e32d5d7e513-32584875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'show_scroll' => 0,
    'chains' => 0,
    'config' => 0,
    'no_ajax' => 0,
    'chain' => 0,
    'is_ajax' => 0,
    'stay_in_cart' => 0,
    'obj_prefix' => 0,
    'buy_together_options_class' => 0,
    '_product' => 0,
    'key' => 0,
    'auth' => 0,
    'settings' => 0,
    'option' => 0,
    '_id' => 0,
    'obj_id' => 0,
    'language_direction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e32d5e4dff1_57840291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e32d5e4dff1_57840291')) {function content_610e32d5e4dff1_57840291($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_count')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.truncate.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('save_and_close','specify_options','specify_options','save_and_close','specify_options','specify_options','total_list_price','price_for_all','add_all_to_cart','sign_in_to_view_price','save_and_close','specify_options','specify_options','save_and_close','specify_options','specify_options','total_list_price','price_for_all','add_all_to_cart','sign_in_to_view_price'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars["show_scroll"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_scroll']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['chains']->value) {?>
    <div class="ut2__buy-together" id="ut2__buy-together"><?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']&&!$_smarty_tpl->tpl_vars['no_ajax']->value) {
$_smarty_tpl->tpl_vars["is_ajax"] = new Smarty_variable(true, null, 0);
}
$_smarty_tpl->tpl_vars["chain"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["chain"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['chains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["chain"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["chain"]->key => $_smarty_tpl->tpl_vars["chain"]->value) {
$_smarty_tpl->tpl_vars["chain"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["chain"]->key;
 $_smarty_tpl->tpl_vars["chain"]->index++;
 $_smarty_tpl->tpl_vars["chain"]->first = $_smarty_tpl->tpl_vars["chain"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["chains"]['first'] = $_smarty_tpl->tpl_vars["chain"]->first;
$_smarty_tpl->tpl_vars["obj_prefix"] = new Smarty_variable("bt_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']), null, 0);?><form class="abt__ut2_chain_form <?php if ($_smarty_tpl->tpl_vars['is_ajax']->value) {?>cm-ajax cm-ajax-full-render<?php }
if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['chains']['first']&&$_smarty_tpl->tpl_vars['show_scroll']->value) {?> hidden<?php }?>" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="chain_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data"><input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" /><input type="hidden" name="result_ids" value="cart_status*,wish_list*" /><?php if (!$_smarty_tpl->tpl_vars['stay_in_cart']->value||$_smarty_tpl->tpl_vars['is_ajax']->value) {?><input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?><input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
][chain]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" /><input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" /><?php $_smarty_tpl->tpl_vars["buy_together_options_class"] = new Smarty_variable("cm-reload-".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']), null, 0);
if ($_smarty_tpl->tpl_vars['chain']->value['products']) {
$_smarty_tpl->tpl_vars["_product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["_product"]->_loop = false;
 $_smarty_tpl->tpl_vars["_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['chain']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["_product"]->key => $_smarty_tpl->tpl_vars["_product"]->value) {
$_smarty_tpl->tpl_vars["_product"]->_loop = true;
 $_smarty_tpl->tpl_vars["_id"]->value = $_smarty_tpl->tpl_vars["_product"]->key;
$_smarty_tpl->tpl_vars["buy_together_options_class"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['buy_together_options_class']->value)." cm-reload-".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['_product']->value['product_id']), null, 0);
}
}?><div class="ut2-bt <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['chain']->value['products'])>3) {?>scroll<?php }?> clearfix"><div class="subheader"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div><?php if ($_smarty_tpl->tpl_vars['chain']->value['description']) {?><div class="ut2-bt__description"><?php echo $_smarty_tpl->tpl_vars['chain']->value['description'];?>
</div><?php }?><div class="ut2-bt__box"><div class="ut2-bt__products ty-scroll-x"><?php if ($_smarty_tpl->tpl_vars['chain']->value['products']) {?><div class="ut2-bt__product"><div class="ut2-bt__product-image cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" id="bt_product_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_main"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"150",'image_height'=>"150",'obj_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id']),'images'=>$_smarty_tpl->tpl_vars['chain']->value['main_pair'],'class'=>"ut2-bt__product-image"), 0);?>
</a><!--bt_product_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_main--></div><div class="ut2-bt__product-name"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['chain']->value['product_name'],66,"...",true), ENT_QUOTES, 'UTF-8');?>
</a></div><?php if ($_smarty_tpl->tpl_vars['chain']->value['product_options']) {
$_smarty_tpl->_capture_stack[0][] = array("buy_together_product_options", null, null); ob_start(); ?><div id="buy_together_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_main" class="ut2-bt-box"><div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['buy_together_options_class']->value, ENT_QUOTES, 'UTF-8');?>
" id="buy_together_options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_main"><input type="hidden" name="appearance[show_product_options]" value="1" /><input type="hidden" name="appearance[bt_chain]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" /><input type="hidden" name="appearance[bt_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" /><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['chain']->value,'id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']),'product_options'=>$_smarty_tpl->tpl_vars['chain']->value['product_options'],'name'=>"product_data",'no_script'=>true,'extra_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_main"), 0);?>
<!--buy_together_options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_main--></div><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"add_item_close",'but_name'=>'','but_text'=>$_smarty_tpl->__("save_and_close"),'but_role'=>"action",'but_meta'=>"cm-dialog-closer"), 0);?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><div class="ut2-bt__product-options"><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"buy_together_options_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_main",'link_meta'=>"ty-btn ty-btn__tertiary",'text'=>$_smarty_tpl->__("specify_options"),'content'=>Smarty::$_smarty_vars['capture']['buy_together_product_options'],'link_text'=>$_smarty_tpl->__("specify_options"),'act'=>"general"), 0);?>
</div><?php }?><div class="ut2-bt__product-price cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" id="bt_product_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_main"><?php if ($_smarty_tpl->tpl_vars['chain']->value['min_qty']>1) {?><span class="count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['min_qty'], ENT_QUOTES, 'UTF-8');?>
x</span><?php }
if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="hide_price_and_add_to_cart")) {?><span class="price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['discounted_price']), 0);?>
</span><?php if ($_smarty_tpl->tpl_vars['chain']->value['price']!=$_smarty_tpl->tpl_vars['chain']->value['discounted_price']) {?><span class="ty-strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['price']), 0);?>
</span><?php }
}?><!--bt_product_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_main--></div></div><?php }
$_smarty_tpl->tpl_vars["_product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["_product"]->_loop = false;
 $_smarty_tpl->tpl_vars["_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['chain']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["_product"]->key => $_smarty_tpl->tpl_vars["_product"]->value) {
$_smarty_tpl->tpl_vars["_product"]->_loop = true;
 $_smarty_tpl->tpl_vars["_id"]->value = $_smarty_tpl->tpl_vars["_product"]->key;
?><div class="ut2-bt__plus chain-plus">+</div><div class="ut2-bt__product"><input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" /><div class="ut2-bt__product-image cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" id="bt_product_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"150",'image_height'=>"150",'obj_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id']),'images'=>$_smarty_tpl->tpl_vars['_product']->value['main_pair'],'class'=>"ut2-bt__product-image"), 0);?>
</a><!--bt_product_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div><div class="ut2-bt__product-name"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['_product']->value['product_name'],66,"...",true), ENT_QUOTES, 'UTF-8');?>
</a></div><?php if ($_smarty_tpl->tpl_vars['_product']->value['product_options']) {
$_smarty_tpl->tpl_vars["option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_product']->value['product_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["option"]->key => $_smarty_tpl->tpl_vars["option"]->value) {
$_smarty_tpl->tpl_vars["option"]->_loop = true;
?><div class="ut2-bt-option"><span class="ut2-bt-option__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_name'], ENT_QUOTES, 'UTF-8');?>
</span>: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['variant_name'], ENT_QUOTES, 'UTF-8');?>
</div><?php }
} elseif ($_smarty_tpl->tpl_vars['_product']->value['aoc']) {
$_smarty_tpl->_capture_stack[0][] = array("buy_together_product_options", null, null); ob_start(); ?><div id="buy_together_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="ut2-bt-box"><div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['buy_together_options_class']->value, ENT_QUOTES, 'UTF-8');?>
" id="buy_together_options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="appearance[show_product_options]" value="1" /><input type="hidden" name="appearance[bt_chain]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" /><input type="hidden" name="appearance[bt_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8');?>
" /><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['_product']->value,'id'=>$_smarty_tpl->tpl_vars['_product']->value['product_id'],'product_options'=>$_smarty_tpl->tpl_vars['_product']->value['options'],'name'=>"product_data",'no_script'=>true,'extra_id'=>((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])), 0);?>
<!--buy_together_options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"add_item_close",'but_name'=>'','but_text'=>$_smarty_tpl->__("save_and_close"),'but_role'=>"action",'but_meta'=>"ty-btn__primary cm-dialog-closer"), 0);?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><div class="ut2-bt__product-options"><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"buy_together_options_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id']),'link_meta'=>"ty-btn ty-btn__tertiary",'text'=>$_smarty_tpl->__("specify_options"),'content'=>Smarty::$_smarty_vars['capture']['buy_together_product_options'],'link_text'=>$_smarty_tpl->__("specify_options"),'act'=>"general"), 0);?>
</div><?php }?><div class="ut2-bt__product-price cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" id="bt_product_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['_product']->value['amount']>1) {?><span class="count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
x</span><?php }
if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="hide_price_and_add_to_cart")) {?><span class="price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['_product']->value['discounted_price']), 0);?>
</span><?php if ($_smarty_tpl->tpl_vars['_product']->value['price']!=$_smarty_tpl->tpl_vars['_product']->value['discounted_price']) {?><span class="ty-strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['_product']->value['price']), 0);?>
</span><?php }
}?><!--bt_product_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div></div><?php } ?></div><div class="ut2-bt__price-block"><div class="ut2-bt__plus chain-equally"><span>=</span></div><div class="ut2-bt__price-wrap"><?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="hide_price_and_add_to_cart")) {?><div class="ut2-bt-price <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['buy_together_options_class']->value, ENT_QUOTES, 'UTF-8');?>
" id="bt_total_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
"><div class="ut2-bt-price__old"><span class="ut2-bt-price__title"><?php echo $_smarty_tpl->__("total_list_price");?>
</span><span class="chain-old-line ty-strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['total_price']), 0);?>
</span></div><div class="ut2-bt-price__new"><span class="ut2-bt-price__title"><?php echo $_smarty_tpl->__("price_for_all");?>
</span><span class="price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['chain_price']), 0);?>
</span></div><!--bt_total_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="hide_add_to_cart_button")) {?><div class="cm-ut2-bt-submit" id="wrap_chain_button_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("add_all_to_cart"),'but_id'=>"chain_button_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']),'but_meta'=>"ty-btn__primary",'but_name'=>"dispatch[checkout.add]",'but_role'=>"action",'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value), 0);?>
</div><?php }
} else { ?><p><?php echo $_smarty_tpl->__("sign_in_to_view_price");?>
</p><?php }?></div></div></div></div></form><?php } ?></div><?php if ($_smarty_tpl->tpl_vars['show_scroll']->value) {
echo smarty_function_script(array('src'=>"js/lib/owlcarousel/owl.carousel.min.js"),$_smarty_tpl);?>
<?php echo '<script'; ?>
>(function(_, $) {$.ceEvent('on', 'ce.commoninit', function(context) {var elm = context.find('#ut2__buy-together');var desktop = [1230, 1],desktopSmall = [1024, 1],tablet = [768, 1],mobile = [479, 1];if (elm.length) {elm.owlCarousel({direction: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',items: 1,itemsDesktop: desktop,itemsDesktopSmall: desktopSmall,itemsTablet: tablet,itemsMobile: mobile,scrollPerPage: true,autoPlay: true,lazyLoad: true,stopOnHover: true,pagination: true,paginationNumbers: false,navigation: true,navigationText: ['<i class="ty-icon-left-open-thin"></i>', '<i class="ty-icon-right-open-thin"></i>'],afterInit: function(item) {$('.abt__ut2_chain_form.hidden').removeClass('hidden');}});}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
><?php }?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/products/components/buy_together.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/hooks/products/components/buy_together.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->tpl_vars["show_scroll"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_scroll']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['chains']->value) {?>
    <div class="ut2__buy-together" id="ut2__buy-together"><?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']&&!$_smarty_tpl->tpl_vars['no_ajax']->value) {
$_smarty_tpl->tpl_vars["is_ajax"] = new Smarty_variable(true, null, 0);
}
$_smarty_tpl->tpl_vars["chain"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["chain"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['chains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["chain"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["chain"]->key => $_smarty_tpl->tpl_vars["chain"]->value) {
$_smarty_tpl->tpl_vars["chain"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["chain"]->key;
 $_smarty_tpl->tpl_vars["chain"]->index++;
 $_smarty_tpl->tpl_vars["chain"]->first = $_smarty_tpl->tpl_vars["chain"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["chains"]['first'] = $_smarty_tpl->tpl_vars["chain"]->first;
$_smarty_tpl->tpl_vars["obj_prefix"] = new Smarty_variable("bt_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']), null, 0);?><form class="abt__ut2_chain_form <?php if ($_smarty_tpl->tpl_vars['is_ajax']->value) {?>cm-ajax cm-ajax-full-render<?php }
if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['chains']['first']&&$_smarty_tpl->tpl_vars['show_scroll']->value) {?> hidden<?php }?>" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="chain_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data"><input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" /><input type="hidden" name="result_ids" value="cart_status*,wish_list*" /><?php if (!$_smarty_tpl->tpl_vars['stay_in_cart']->value||$_smarty_tpl->tpl_vars['is_ajax']->value) {?><input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" /><?php }?><input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
][chain]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" /><input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" /><?php $_smarty_tpl->tpl_vars["buy_together_options_class"] = new Smarty_variable("cm-reload-".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']), null, 0);
if ($_smarty_tpl->tpl_vars['chain']->value['products']) {
$_smarty_tpl->tpl_vars["_product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["_product"]->_loop = false;
 $_smarty_tpl->tpl_vars["_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['chain']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["_product"]->key => $_smarty_tpl->tpl_vars["_product"]->value) {
$_smarty_tpl->tpl_vars["_product"]->_loop = true;
 $_smarty_tpl->tpl_vars["_id"]->value = $_smarty_tpl->tpl_vars["_product"]->key;
$_smarty_tpl->tpl_vars["buy_together_options_class"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['buy_together_options_class']->value)." cm-reload-".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['_product']->value['product_id']), null, 0);
}
}?><div class="ut2-bt <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['chain']->value['products'])>3) {?>scroll<?php }?> clearfix"><div class="subheader"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div><?php if ($_smarty_tpl->tpl_vars['chain']->value['description']) {?><div class="ut2-bt__description"><?php echo $_smarty_tpl->tpl_vars['chain']->value['description'];?>
</div><?php }?><div class="ut2-bt__box"><div class="ut2-bt__products ty-scroll-x"><?php if ($_smarty_tpl->tpl_vars['chain']->value['products']) {?><div class="ut2-bt__product"><div class="ut2-bt__product-image cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" id="bt_product_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_main"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"150",'image_height'=>"150",'obj_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id']),'images'=>$_smarty_tpl->tpl_vars['chain']->value['main_pair'],'class'=>"ut2-bt__product-image"), 0);?>
</a><!--bt_product_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_main--></div><div class="ut2-bt__product-name"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['chain']->value['product_name'],66,"...",true), ENT_QUOTES, 'UTF-8');?>
</a></div><?php if ($_smarty_tpl->tpl_vars['chain']->value['product_options']) {
$_smarty_tpl->_capture_stack[0][] = array("buy_together_product_options", null, null); ob_start(); ?><div id="buy_together_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_main" class="ut2-bt-box"><div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['buy_together_options_class']->value, ENT_QUOTES, 'UTF-8');?>
" id="buy_together_options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_main"><input type="hidden" name="appearance[show_product_options]" value="1" /><input type="hidden" name="appearance[bt_chain]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" /><input type="hidden" name="appearance[bt_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" /><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['chain']->value,'id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']),'product_options'=>$_smarty_tpl->tpl_vars['chain']->value['product_options'],'name'=>"product_data",'no_script'=>true,'extra_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_main"), 0);?>
<!--buy_together_options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_main--></div><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"add_item_close",'but_name'=>'','but_text'=>$_smarty_tpl->__("save_and_close"),'but_role'=>"action",'but_meta'=>"cm-dialog-closer"), 0);?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><div class="ut2-bt__product-options"><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"buy_together_options_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['product_id'])."_main",'link_meta'=>"ty-btn ty-btn__tertiary",'text'=>$_smarty_tpl->__("specify_options"),'content'=>Smarty::$_smarty_vars['capture']['buy_together_product_options'],'link_text'=>$_smarty_tpl->__("specify_options"),'act'=>"general"), 0);?>
</div><?php }?><div class="ut2-bt__product-price cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" id="bt_product_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_main"><?php if ($_smarty_tpl->tpl_vars['chain']->value['min_qty']>1) {?><span class="count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['min_qty'], ENT_QUOTES, 'UTF-8');?>
x</span><?php }
if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="hide_price_and_add_to_cart")) {?><span class="price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['discounted_price']), 0);?>
</span><?php if ($_smarty_tpl->tpl_vars['chain']->value['price']!=$_smarty_tpl->tpl_vars['chain']->value['discounted_price']) {?><span class="ty-strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['price']), 0);?>
</span><?php }
}?><!--bt_product_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_main--></div></div><?php }
$_smarty_tpl->tpl_vars["_product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["_product"]->_loop = false;
 $_smarty_tpl->tpl_vars["_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['chain']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["_product"]->key => $_smarty_tpl->tpl_vars["_product"]->value) {
$_smarty_tpl->tpl_vars["_product"]->_loop = true;
 $_smarty_tpl->tpl_vars["_id"]->value = $_smarty_tpl->tpl_vars["_product"]->key;
?><div class="ut2-bt__plus chain-plus">+</div><div class="ut2-bt__product"><input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" /><div class="ut2-bt__product-image cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" id="bt_product_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"150",'image_height'=>"150",'obj_id'=>((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id']),'images'=>$_smarty_tpl->tpl_vars['_product']->value['main_pair'],'class'=>"ut2-bt__product-image"), 0);?>
</a><!--bt_product_image_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div><div class="ut2-bt__product-name"><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['_product']->value['product_name'],66,"...",true), ENT_QUOTES, 'UTF-8');?>
</a></div><?php if ($_smarty_tpl->tpl_vars['_product']->value['product_options']) {
$_smarty_tpl->tpl_vars["option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_product']->value['product_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["option"]->key => $_smarty_tpl->tpl_vars["option"]->value) {
$_smarty_tpl->tpl_vars["option"]->_loop = true;
?><div class="ut2-bt-option"><span class="ut2-bt-option__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['option_name'], ENT_QUOTES, 'UTF-8');?>
</span>: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['variant_name'], ENT_QUOTES, 'UTF-8');?>
</div><?php }
} elseif ($_smarty_tpl->tpl_vars['_product']->value['aoc']) {
$_smarty_tpl->_capture_stack[0][] = array("buy_together_product_options", null, null); ob_start(); ?><div id="buy_together_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="ut2-bt-box"><div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['buy_together_options_class']->value, ENT_QUOTES, 'UTF-8');?>
" id="buy_together_options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="appearance[show_product_options]" value="1" /><input type="hidden" name="appearance[bt_chain]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
" /><input type="hidden" name="appearance[bt_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8');?>
" /><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['_product']->value,'id'=>$_smarty_tpl->tpl_vars['_product']->value['product_id'],'product_options'=>$_smarty_tpl->tpl_vars['_product']->value['options'],'name'=>"product_data",'no_script'=>true,'extra_id'=>((string)$_smarty_tpl->tpl_vars['_product']->value['product_id'])."_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])), 0);?>
<!--buy_together_options_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"add_item_close",'but_name'=>'','but_text'=>$_smarty_tpl->__("save_and_close"),'but_role'=>"action",'but_meta'=>"ty-btn__primary cm-dialog-closer"), 0);?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><div class="ut2-bt__product-options"><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"buy_together_options_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id'])."_".((string)$_smarty_tpl->tpl_vars['_product']->value['product_id']),'link_meta'=>"ty-btn ty-btn__tertiary",'text'=>$_smarty_tpl->__("specify_options"),'content'=>Smarty::$_smarty_vars['capture']['buy_together_product_options'],'link_text'=>$_smarty_tpl->__("specify_options"),'act'=>"general"), 0);?>
</div><?php }?><div class="ut2-bt__product-price cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" id="bt_product_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['_product']->value['amount']>1) {?><span class="count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
x</span><?php }
if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="hide_price_and_add_to_cart")) {?><span class="price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['_product']->value['discounted_price']), 0);?>
</span><?php if ($_smarty_tpl->tpl_vars['_product']->value['price']!=$_smarty_tpl->tpl_vars['_product']->value['discounted_price']) {?><span class="ty-strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['_product']->value['price']), 0);?>
</span><?php }
}?><!--bt_product_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
--></div></div><?php } ?></div><div class="ut2-bt__price-block"><div class="ut2-bt__plus chain-equally"><span>=</span></div><div class="ut2-bt__price-wrap"><?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="hide_price_and_add_to_cart")) {?><div class="ut2-bt-price <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['buy_together_options_class']->value, ENT_QUOTES, 'UTF-8');?>
" id="bt_total_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
"><div class="ut2-bt-price__old"><span class="ut2-bt-price__title"><?php echo $_smarty_tpl->__("total_list_price");?>
</span><span class="chain-old-line ty-strike"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['total_price']), 0);?>
</span></div><div class="ut2-bt-price__new"><span class="ut2-bt-price__title"><?php echo $_smarty_tpl->__("price_for_all");?>
</span><span class="price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['chain']->value['chain_price']), 0);?>
</span></div><!--bt_total_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php if (!(!$_smarty_tpl->tpl_vars['auth']->value['user_id']&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="hide_add_to_cart_button")) {?><div class="cm-ut2-bt-submit" id="wrap_chain_button_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chain']->value['chain_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("add_all_to_cart"),'but_id'=>"chain_button_".((string)$_smarty_tpl->tpl_vars['chain']->value['chain_id']),'but_meta'=>"ty-btn__primary",'but_name'=>"dispatch[checkout.add]",'but_role'=>"action",'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value), 0);?>
</div><?php }
} else { ?><p><?php echo $_smarty_tpl->__("sign_in_to_view_price");?>
</p><?php }?></div></div></div></div></form><?php } ?></div><?php if ($_smarty_tpl->tpl_vars['show_scroll']->value) {
echo smarty_function_script(array('src'=>"js/lib/owlcarousel/owl.carousel.min.js"),$_smarty_tpl);?>
<?php echo '<script'; ?>
>(function(_, $) {$.ceEvent('on', 'ce.commoninit', function(context) {var elm = context.find('#ut2__buy-together');var desktop = [1230, 1],desktopSmall = [1024, 1],tablet = [768, 1],mobile = [479, 1];if (elm.length) {elm.owlCarousel({direction: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',items: 1,itemsDesktop: desktop,itemsDesktopSmall: desktopSmall,itemsTablet: tablet,itemsMobile: mobile,scrollPerPage: true,autoPlay: true,lazyLoad: true,stopOnHover: true,pagination: true,paginationNumbers: false,navigation: true,navigationText: ['<i class="ty-icon-left-open-thin"></i>', '<i class="ty-icon-right-open-thin"></i>'],afterInit: function(item) {$('.abt__ut2_chain_form.hidden').removeClass('hidden');}});}});}(Tygh, Tygh.$));<?php echo '</script'; ?>
><?php }?>
<?php }?>
<?php }?><?php }} ?>

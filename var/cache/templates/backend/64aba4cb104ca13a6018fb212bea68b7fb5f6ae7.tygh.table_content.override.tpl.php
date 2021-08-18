<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:52:39
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/product_list/table_content.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:523085041610e3bc7600e70-16017348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64aba4cb104ca13a6018fb212bea68b7fb5f6ae7' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/product_list/table_content.override.tpl',
      1 => 1627895930,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '523085041610e3bc7600e70-16017348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'time' => 0,
    'product' => 0,
    'hide_amount' => 0,
    'show_radio' => 0,
    'checkbox_name' => 0,
    'show_aoc' => 0,
    'additional_class' => 0,
    'show_price' => 0,
    'is_order_management' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3bc7627713_49526733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3bc7627713_49526733')) {function content_610e3bc7627713_49526733($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_block_inline_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_name','price','add_product'));
?>
<?php if (strpos($_REQUEST['data_id'],'abt__ut2_bt')!==false) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_list:table_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_list:table_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->tpl_vars["time"] = new Smarty_variable(time(), null, 0);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function(_, $) {
var row = $('#checkbox_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['time']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
').closest('tr#picker_product_row_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
');
if (row.length) {
row.attr('id', 'picker_product_row_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['time']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
');
}
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ($_smarty_tpl->tpl_vars['hide_amount']->value) {?>
<td class="center" width="1%" data-th=""><input type="<?php if ($_smarty_tpl->tpl_vars['show_radio']->value) {?>radio<?php } else { ?>checkbox<?php }?>" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkbox_name']->value, ENT_QUOTES, 'UTF-8');?>
[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item mrg-check" id="checkbox_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['time']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" /></td>
<?php }?>
<td data-th="<?php echo $_smarty_tpl->__("product_name");?>
">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_list:product_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_list:product_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<input type="hidden" id="product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
" />
<?php if ($_smarty_tpl->tpl_vars['hide_amount']->value) {?>
<label for="checkbox_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['time']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</label>
<?php } else { ?>
<span><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</span>
<?php }?>
<?php if (strpos($_REQUEST['data_id'],'abt__ut2_bt_base_products_')===false) {?>
<?php echo $_smarty_tpl->getSubTemplate ("views/products/components/select_product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'name'=>"product_data",'show_aoc'=>$_smarty_tpl->tpl_vars['show_aoc']->value,'additional_class'=>$_smarty_tpl->tpl_vars['additional_class']->value), 0);?>

<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_list:product_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</td>
<?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
<td class="cm-picker-product-options right" data-th="<?php echo $_smarty_tpl->__("price");?>
"><?php if (!floatval($_smarty_tpl->tpl_vars['product']->value['price'])&&$_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="A") {?><input class="input-medium" id="product_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" type="text" size="3" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][price]" value="" /><?php } else {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price']), 0);
}?></td>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['is_order_management']->value) {?>
<?php if (!$_smarty_tpl->tpl_vars['hide_amount']->value) {?>
<td class="center nowrap cm-value-changer" width="5%">
<div class="input-prepend input-append">
<a class="btn no-underline strong increase-font cm-decrease"><i class="icon-minus"></i></a>
<input id="product_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" type="text" value="0" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" size="3" class="input-micro cm-amount"<?php if ($_smarty_tpl->tpl_vars['product']->value['qty_step']>1) {?> data-ca-step="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['qty_step'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> />
<a class="btn no-underline strong increase-font cm-increase"><i class="icon-plus"></i></a>
</div>
</td>
<?php }?>
<?php } else { ?>
<?php if (!$_smarty_tpl->tpl_vars['hide_amount']->value) {?>
<td class="center nowrap cm-value-changer" width="5%">
<div class="input-prepend input-append">
<a class="btn no-underline strong increase-font cm-decrease"><i class="icon-minus"></i></a>
<input id="product_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" type="text" value="1" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" size="3" class="input-micro cm-amount"<?php if ($_smarty_tpl->tpl_vars['product']->value['qty_step']>1) {?> data-ca-step="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['qty_step'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> />
<a class="btn no-underline strong increase-font cm-increase"><i class="icon-plus"></i></a>
</div>
</td>
<?php }?>
<td class="center nowrap" width="5%">
<div>
<a class="btn cm-process-items cm-submit cm-ajax cm-add-product" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("add_product");?>
" data-ca-dispatch="dispatch[order_management.add]" data-ca-check-filter="#picker_product_row_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-form="add_products"><i class="icon-arrow-right" data-ca-check-filter="#picker_product_row_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"></i></a>
</div>
</td>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_list:table_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:36:55
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/categories_section.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8149179646113fca7003438-48482918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56c4e5a5847c7b17d79ef72e3bf061cfead2a6db' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/categories_section.override.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8149179646113fca7003438-48482918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'product_type' => 0,
    'request_category_id' => 0,
    'c_id' => 0,
    'multiple_categories' => 0,
    'category_data' => 0,
    'path_id' => 0,
    'path_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fca701a7d8_81254108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fca701a7d8_81254108')) {function content_6113fca701a7d8_81254108($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('categories'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_id']&&$_smarty_tpl->tpl_vars['product_data']->value['master_product_id']&&!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("categories")) {?>
    <?php $_smarty_tpl->tpl_vars['multiple_categories'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['product_data']->value['category_ids'])>1, null, 0);?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("vendor_product_categories", null, null); ob_start(); ?>
        <?php  $_smarty_tpl->tpl_vars["c_id"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["c_id"]->_loop = false;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['category_ids'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['request_category_id']->value : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["c_id"]->key => $_smarty_tpl->tpl_vars["c_id"]->value) {
$_smarty_tpl->tpl_vars["c_id"]->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars["category_data"] = new Smarty_variable(fn_get_category_data($_smarty_tpl->tpl_vars['c_id']->value,(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'',false,true,false,true), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['multiple_categories']->value) {?>
                <p class="cm-js-item">
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars["path_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["path_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["path_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['category_data']->value['path_names']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["path_name"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["path_name"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["path_name"]->key => $_smarty_tpl->tpl_vars["path_name"]->value) {
$_smarty_tpl->tpl_vars["path_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["path_id"]->value = $_smarty_tpl->tpl_vars["path_name"]->key;
 $_smarty_tpl->tpl_vars["path_name"]->iteration++;
 $_smarty_tpl->tpl_vars["path_name"]->last = $_smarty_tpl->tpl_vars["path_name"]->iteration === $_smarty_tpl->tpl_vars["path_name"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["path_names"]['last'] = $_smarty_tpl->tpl_vars["path_name"]->last;
?>
                <a target="_blank" class="<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['path_names']['last']) {?>ty-breadcrumbs__a<?php } else { ?>ty-breadcrumbs__current<?php }?>" href="<?php echo htmlspecialchars(fn_url("categories.update&category_id=".((string)$_smarty_tpl->tpl_vars['path_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path_name']->value, ENT_QUOTES, 'UTF-8');?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['path_names']['last']) {?> / <?php }?>
            <?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['multiple_categories']->value) {?>
                </p>
            <?php }?>
        <?php } ?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("categories");?>
</label>
        <div class="controls">
            <p>
                <?php echo Smarty::$_smarty_vars['capture']['vendor_product_categories'];?>

            </p>
        </div>
    </div>
<?php }?>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2021-08-12 12:28:32
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/ab__deal_of_the_day/views/promotions/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9364632166114e9c01565f8-05847873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '619f17b0f092ab673dbbdb7d5b123f305964988a' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/ab__deal_of_the_day/views/promotions/view.tpl',
      1 => 1627896292,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9364632166114e9c01565f8-05847873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'promotion' => 0,
    'categories' => 0,
    'config' => 0,
    'ajax_div_ids' => 0,
    'filter_base_url' => 0,
    'selected_category_id' => 0,
    'category_id' => 0,
    'category_name' => 0,
    'products' => 0,
    'block' => 0,
    'selected_layout' => 0,
    'layouts' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6114e9c017f3e9_35252559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6114e9c017f3e9_35252559')) {function content_6114e9c017f3e9_35252559($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['promotion']->value['hide_products_block']!='Y') {?>
    <?php if ($_smarty_tpl->tpl_vars['categories']->value&&$_smarty_tpl->tpl_vars['promotion']->value['filter']=='Y') {?>
        <?php $_smarty_tpl->tpl_vars['ajax_div_ids'] = new Smarty_variable("promotion_filter,promotion_products", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['filter_base_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"result_ids","full_render","ab_category_id"), null, 0);?>
        <div class="ab__dotd_promotions-filter" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-base-url="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['filter_base_url']->value), ENT_QUOTES, 'UTF-8');?>
" id="promotion_filter">
            <div class="ab__dotd_promotions-filter_item<?php if (!$_smarty_tpl->tpl_vars['selected_category_id']->value) {?> active<?php }?>"><?php echo $_smarty_tpl->__('ab__dotd.clear_filter');?>
</div>
            <?php  $_smarty_tpl->tpl_vars['category_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category_name']->_loop = false;
 $_smarty_tpl->tpl_vars['category_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category_name']->key => $_smarty_tpl->tpl_vars['category_name']->value) {
$_smarty_tpl->tpl_vars['category_name']->_loop = true;
 $_smarty_tpl->tpl_vars['category_id']->value = $_smarty_tpl->tpl_vars['category_name']->key;
?>
                <div class="ab__dotd_promotions-filter_item<?php if ($_smarty_tpl->tpl_vars['selected_category_id']->value==$_smarty_tpl->tpl_vars['category_id']->value) {?> active<?php }?>" data-ca-category-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
</div>
            <?php } ?>
        <!--promotion_filter--></div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
    <div id="category_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
        <div class="ab__dotd_promotions-products" id="promotion_products">
            <?php $_smarty_tpl->tpl_vars["layouts"] = new Smarty_variable(fn_get_products_views('',false,0), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('columns'=>$_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']), 0);?>

            <?php }?>
        <!--promotion_products--></div>
    <!--category_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/views/promotions/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/views/promotions/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['promotion']->value['hide_products_block']!='Y') {?>
    <?php if ($_smarty_tpl->tpl_vars['categories']->value&&$_smarty_tpl->tpl_vars['promotion']->value['filter']=='Y') {?>
        <?php $_smarty_tpl->tpl_vars['ajax_div_ids'] = new Smarty_variable("promotion_filter,promotion_products", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['filter_base_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"result_ids","full_render","ab_category_id"), null, 0);?>
        <div class="ab__dotd_promotions-filter" data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_div_ids']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-base-url="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['filter_base_url']->value), ENT_QUOTES, 'UTF-8');?>
" id="promotion_filter">
            <div class="ab__dotd_promotions-filter_item<?php if (!$_smarty_tpl->tpl_vars['selected_category_id']->value) {?> active<?php }?>"><?php echo $_smarty_tpl->__('ab__dotd.clear_filter');?>
</div>
            <?php  $_smarty_tpl->tpl_vars['category_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category_name']->_loop = false;
 $_smarty_tpl->tpl_vars['category_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category_name']->key => $_smarty_tpl->tpl_vars['category_name']->value) {
$_smarty_tpl->tpl_vars['category_name']->_loop = true;
 $_smarty_tpl->tpl_vars['category_id']->value = $_smarty_tpl->tpl_vars['category_name']->key;
?>
                <div class="ab__dotd_promotions-filter_item<?php if ($_smarty_tpl->tpl_vars['selected_category_id']->value==$_smarty_tpl->tpl_vars['category_id']->value) {?> active<?php }?>" data-ca-category-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
</div>
            <?php } ?>
        <!--promotion_filter--></div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
    <div id="category_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
        <div class="ab__dotd_promotions-products" id="promotion_products">
            <?php $_smarty_tpl->tpl_vars["layouts"] = new Smarty_variable(fn_get_products_views('',false,0), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('columns'=>$_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']), 0);?>

            <?php }?>
        <!--promotion_products--></div>
    <!--category_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>
<?php }
}?><?php }} ?>

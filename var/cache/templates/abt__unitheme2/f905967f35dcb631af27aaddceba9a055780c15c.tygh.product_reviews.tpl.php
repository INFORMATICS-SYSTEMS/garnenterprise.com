<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:14:30
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/product_reviews/blocks/product_tabs/product_reviews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1691523059610e32d6816544-32900752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f905967f35dcb631af27aaddceba9a055780c15c' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/product_reviews/blocks/product_tabs/product_reviews.tpl',
      1 => 1627581750,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1691523059610e32d6816544-32900752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e32d6822360_71413139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e32d6822360_71413139')) {function content_610e32d6822360_71413139($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.title','product_reviews.title'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>


<?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_reviews'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews'],'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'title'=>$_smarty_tpl->__("product_reviews.title"),'quicklink'=>"product_review_link",'container_id'=>"content_product_reviews_block",'locate_to_product_review_tab'=>true), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/blocks/product_tabs/product_reviews.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/blocks/product_tabs/product_reviews.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>


<?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_reviews'=>$_smarty_tpl->tpl_vars['product']->value['product_reviews'],'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'title'=>$_smarty_tpl->__("product_reviews.title"),'quicklink'=>"product_review_link",'container_id'=>"content_product_reviews_block",'locate_to_product_review_tab'=>true), 0);?>

<?php }?><?php }} ?>

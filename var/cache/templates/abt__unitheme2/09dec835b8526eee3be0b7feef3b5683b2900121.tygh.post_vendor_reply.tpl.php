<?php /* Smarty version Smarty-3.1.21, created on 2021-08-12 12:13:57
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6936949286114e655af1aa9-19700513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09dec835b8526eee3be0b7feef3b5683b2900121' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl',
      1 => 1627581750,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6936949286114e655af1aa9-19700513',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_review' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6114e655b01ca2_81676396',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6114e655b01ca2_81676396')) {function content_6114e655b01ca2_81676396($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.company_reply','product_reviews.admin_reply','product_reviews.company_reply','product_reviews.admin_reply'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['product_review']->value['reply']) {?>
    <blockquote class="ty-product-review-post-vendor-reply ty-blockquote">
        <dl class="ty-product-review-post-vendor-reply__content ty-dl">
            <dt class="ty-product-review-post-vendor-reply__title ty-dt ty-strong">
                <?php if ($_smarty_tpl->tpl_vars['product_review']->value['reply']['reply_company']) {?>
                    <?php echo $_smarty_tpl->__("product_reviews.company_reply",array('[company_name]'=>$_smarty_tpl->tpl_vars['product_review']->value['reply']['reply_company']));?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->__("product_reviews.admin_reply");?>

                <?php }?>
            </dt>
            <dd class="ty-product-review-post-vendor-reply__body ty-dd ty-dialog-caret">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review']->value['reply']['reply'], ENT_QUOTES, 'UTF-8');?>

            </dd>
        </dl>
    </blockquote>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/post_vendor_reply.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['product_review']->value['reply']) {?>
    <blockquote class="ty-product-review-post-vendor-reply ty-blockquote">
        <dl class="ty-product-review-post-vendor-reply__content ty-dl">
            <dt class="ty-product-review-post-vendor-reply__title ty-dt ty-strong">
                <?php if ($_smarty_tpl->tpl_vars['product_review']->value['reply']['reply_company']) {?>
                    <?php echo $_smarty_tpl->__("product_reviews.company_reply",array('[company_name]'=>$_smarty_tpl->tpl_vars['product_review']->value['reply']['reply_company']));?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->__("product_reviews.admin_reply");?>

                <?php }?>
            </dt>
            <dd class="ty-product-review-post-vendor-reply__body ty-dd ty-dialog-caret">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review']->value['reply']['reply'], ENT_QUOTES, 'UTF-8');?>

            </dd>
        </dl>
    </blockquote>
<?php }?>
<?php }?><?php }} ?>

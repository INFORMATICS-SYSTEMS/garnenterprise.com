<?php /* Smarty version Smarty-3.1.21, created on 2021-08-12 12:13:57
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/post_message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6759728246114e655a50c11-80383802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fcb6bdde2b75e520fd716171a584d20d8358e34' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/post_message.tpl',
      1 => 1627581750,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6759728246114e655a50c11-80383802',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_review' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6114e655a63691_01126933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6114e655a63691_01126933')) {function content_6114e655a63691_01126933($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.advantages','product_reviews.disadvantages','comment','product_reviews.advantages','product_reviews.disadvantages','comment'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<blockquote class="ty-product-review-post-message ty-blockquote" id="post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review']->value['product_review_id'], ENT_QUOTES, 'UTF-8');?>
">

    <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_fields']==="advanced") {?>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post_message_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('message_title'=>$_smarty_tpl->__("product_reviews.advantages"),'message_body'=>$_smarty_tpl->tpl_vars['product_review']->value['message']['advantages']), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post_message_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('message_title'=>$_smarty_tpl->__("product_reviews.disadvantages"),'message_body'=>$_smarty_tpl->tpl_vars['product_review']->value['message']['disadvantages']), 0);?>


    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post_message_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('message_title'=>$_smarty_tpl->__("comment"),'message_body'=>$_smarty_tpl->tpl_vars['product_review']->value['message']['comment']), 0);?>


</blockquote>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_message.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/post_message.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<blockquote class="ty-product-review-post-message ty-blockquote" id="post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review']->value['product_review_id'], ENT_QUOTES, 'UTF-8');?>
">

    <?php if ($_smarty_tpl->tpl_vars['addons']->value['product_reviews']['review_fields']==="advanced") {?>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post_message_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('message_title'=>$_smarty_tpl->__("product_reviews.advantages"),'message_body'=>$_smarty_tpl->tpl_vars['product_review']->value['message']['advantages']), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post_message_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('message_title'=>$_smarty_tpl->__("product_reviews.disadvantages"),'message_body'=>$_smarty_tpl->tpl_vars['product_review']->value['message']['disadvantages']), 0);?>


    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/post_message_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('message_title'=>$_smarty_tpl->__("comment"),'message_body'=>$_smarty_tpl->tpl_vars['product_review']->value['message']['comment']), 0);?>


</blockquote>
<?php }?><?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:05:23
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_data_premoderation/hooks/products/manage_body.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12966573556113d923bd0934-23711317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a05cce76e7cd38b0d92bda43b8bac62639415a2b' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_data_premoderation/hooks/products/manage_body.post.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12966573556113d923bd0934-23711317',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d923bd39b0_35710710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d923bd39b0_35710710')) {function content_6113d923bd39b0_35710710($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.disapprove_product'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_data_premoderation/components/disapproval_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'title'=>$_smarty_tpl->__("vendor_data_premoderation.disapprove_product",array("[product]"=>$_smarty_tpl->tpl_vars['product']->value['product']))), 0);?>

<?php }} ?>

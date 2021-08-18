<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:03:07
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/storefronts/components/companies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21123714756113d89b08baf1-10939404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '290f0801f41aa8995636f4d115108680bab237fd' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/storefronts/components/companies.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21123714756113d89b08baf1-10939404',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'selected_companies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d89b08f637_26029977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d89b08f637_26029977')) {function content_6113d89b08f637_26029977($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('all_companies'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[company_ids]" : $tmp), null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("pickers/companies/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_add_button'=>true,'multiple'=>true,'item_ids'=>$_smarty_tpl->tpl_vars['selected_companies']->value,'view_mode'=>"list",'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'checkbox_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'no_item_text'=>$_smarty_tpl->__("all_companies")), 0);?>


<?php }} ?>

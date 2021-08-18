<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:49:31
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/products/components/picker/block_manager_picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1057483894610e3b0b347e19-63823090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be4905b2483237f6e74d45006d8d1213dcb150b4' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/products/components/picker/block_manager_picker.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1057483894610e3b0b347e19-63823090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_ids' => 0,
    'multiple' => 0,
    'view_mode' => 0,
    'show_positions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3b0b36b670_01849937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3b0b36b670_01849937')) {function content_610e3b0b36b670_01849937($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_ids'=>explode(",",$_smarty_tpl->tpl_vars['item_ids']->value),'multiple'=>$_smarty_tpl->tpl_vars['multiple']->value,'view_mode'=>$_smarty_tpl->tpl_vars['view_mode']->value,'show_positions'=>$_smarty_tpl->tpl_vars['show_positions']->value,'allow_clear'=>false,'for_current_storefront'=>true), 0);?>

<?php }} ?>

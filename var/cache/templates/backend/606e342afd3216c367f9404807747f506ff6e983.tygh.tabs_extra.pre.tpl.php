<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:36:56
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/tabs_extra.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21464374176113fca8cf0907-23587848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '606e342afd3216c367f9404807747f506ff6e983' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/tabs_extra.pre.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21464374176113fca8cf0907-23587848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fca8cf5f20_67017808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fca8cf5f20_67017808')) {function content_6113fca8cf5f20_67017808($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('view','view'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!$_smarty_tpl->tpl_vars['product_data']->value['company_id']) {?>
    <?php $_smarty_tpl->tpl_vars['hide_for_vendor'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['hide_for_vendor'] = clone $_smarty_tpl->tpl_vars['hide_for_vendor'];?>
    <?php $_smarty_tpl->tpl_vars['hide_inputs'] = new Smarty_variable("cm-hide-inputs", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['hide_inputs'] = clone $_smarty_tpl->tpl_vars['hide_inputs'];?>
    <?php $_smarty_tpl->tpl_vars['edit_link_text'] = new Smarty_variable($_smarty_tpl->__("view"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['edit_link_text'] = clone $_smarty_tpl->tpl_vars['edit_link_text'];?>
    <?php $_smarty_tpl->tpl_vars['link_text'] = new Smarty_variable($_smarty_tpl->__("view"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['link_text'] = clone $_smarty_tpl->tpl_vars['link_text'];?>
    <?php $_smarty_tpl->tpl_vars['skip_delete'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['skip_delete'] = clone $_smarty_tpl->tpl_vars['skip_delete'];?>
<?php }?><?php }} ?>

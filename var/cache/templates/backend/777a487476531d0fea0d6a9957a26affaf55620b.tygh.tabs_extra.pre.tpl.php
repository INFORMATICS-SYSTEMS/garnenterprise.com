<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:05:32
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/product_variations/hooks/products/tabs_extra.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8974413386113d92c55fa89-70483414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '777a487476531d0fea0d6a9957a26affaf55620b' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/product_variations/hooks/products/tabs_extra.pre.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8974413386113d92c55fa89-70483414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_form_readonly' => 0,
    'selected_section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d92c5623e0_59157297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d92c5623e0_59157297')) {function content_6113d92c5623e0_59157297($_smarty_tpl) {?><div class="cm-hide-save-button <?php if ($_smarty_tpl->tpl_vars['is_form_readonly']->value) {?>cm-hide-inputs<?php }?> <?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="variations") {?>hidden<?php }?>" id="content_variations"></div><?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:05
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/companies/components/picker/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1042882647610e2efde4b6d8-91798759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd85e208e82066137ea020d9ee978bbfbeaccb286' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/companies/components/picker/item.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1042882647610e2efde4b6d8-91798759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title_pre' => 0,
    'title_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2efde4d181_36739451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2efde4d181_36739451')) {function content_610e2efde4d181_36739451($_smarty_tpl) {?><div class="object-picker__companies-main">
    <div class="object-picker__companies-name">
        <div class="object-picker__companies-name-content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 <span>${data.name}</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
</div><?php }} ?>

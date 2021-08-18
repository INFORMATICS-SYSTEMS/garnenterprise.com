<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:05:39
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/tabs/manage_in_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9139968746113d9338b76f5-23707195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89299da42ab7bf889c76cea997e2ce41731a6c49' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/tabs/manage_in_tab.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9139968746113d9338b76f5-23707195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d9338d67f4_33790772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d9338d67f4_33790772')) {function content_6113d9338d67f4_33790772($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="product_tabs") {?>hidden<?php }?>" id="content_product_tabs">
    <?php echo $_smarty_tpl->getSubTemplate ("views/tabs/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--content_product_tabs--></div>
<?php }} ?>

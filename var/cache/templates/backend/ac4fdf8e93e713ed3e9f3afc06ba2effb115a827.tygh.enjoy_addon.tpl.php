<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:36:33
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/addons/components/detailed_page/sidebar/enjoy_addon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3261046636113fc917f6ac5-04857471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac4fdf8e93e713ed3e9f3afc06ba2effb115a827' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/addons/components/detailed_page/sidebar/enjoy_addon.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3261046636113fc917f6ac5-04857471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon' => 0,
    'personal_review' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fc917f9c27_85405207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fc917f9c27_85405207')) {function content_6113fc917f9c27_85405207($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['addon']->value['is_core_addon']&&$_smarty_tpl->tpl_vars['addon']->value['identified']&&!$_smarty_tpl->tpl_vars['personal_review']->value) {?>
    <div class="sidebar-row marketplace">
        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/enjoying_addon_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"addons_write_review_sidebar"), 0);?>

    </div>
<?php }?>
<?php }} ?>

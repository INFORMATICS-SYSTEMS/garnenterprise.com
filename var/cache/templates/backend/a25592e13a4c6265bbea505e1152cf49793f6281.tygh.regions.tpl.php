<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:03:07
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/storefronts/components/regions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12442160496113d89b070ec4-47434245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a25592e13a4c6265bbea505e1152cf49793f6281' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/storefronts/components/regions.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12442160496113d89b070ec4-47434245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'selected_countries' => 0,
    'all_countries' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d89b074ce0_43217362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d89b074ce0_43217362')) {function content_6113d89b074ce0_43217362($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('countries'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[country_codes]" : $tmp), null, 0);?>

<input type="hidden"
       name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
       value=""
/>

<?php echo $_smarty_tpl->getSubTemplate ("common/double_selectboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("countries"),'first_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'first_data'=>$_smarty_tpl->tpl_vars['selected_countries']->value,'second_name'=>"all_countries",'second_data'=>$_smarty_tpl->tpl_vars['all_countries']->value), 0);?>

<?php }} ?>

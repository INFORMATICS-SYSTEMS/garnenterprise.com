<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:03:07
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/storefronts/components/is_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20970825736113d89b019b95-76082569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8791aa622326cd3ae89860a8cba4770aabea1ac7' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/storefronts/components/is_default.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20970825736113d89b019b95-76082569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'is_default' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d89b01d858_48096629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d89b01d858_48096629')) {function content_6113d89b01d858_48096629($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('is_default_storefront'));
?>

<div class="control-group">
    <label for="is_default_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("is_default_storefront");?>

    </label>
    <div class="controls" id="is_default_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden"
               name="storefront_data[is_default]"
               value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
"
        />
        <input type="checkbox"
               name="storefront_data[is_default]"
               value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
               <?php if ($_smarty_tpl->tpl_vars['is_default']->value) {?>checked<?php }?>
        />
    </div>
</div>
<?php }} ?>

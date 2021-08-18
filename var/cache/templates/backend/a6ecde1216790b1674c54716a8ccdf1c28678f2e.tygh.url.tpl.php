<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:03:07
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/storefronts/components/url.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15196457836113d89b00e706-01616949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6ecde1216790b1674c54716a8ccdf1c28678f2e' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/storefronts/components/url.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15196457836113d89b00e706-01616949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'id' => 0,
    'readonly' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d89b0157d7_36695270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d89b0157d7_36695270')) {function content_6113d89b0157d7_36695270($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_puny_decode')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.puny_decode.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('storefront_url'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[url]" : $tmp), null, 0);?>

<div class="control-group">
    <label for="url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label cm-required"
    ><?php echo $_smarty_tpl->__("storefront_url");?>
</label>
    <div class="controls">
        <?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>
            <?php echo htmlspecialchars(smarty_modifier_puny_decode($_smarty_tpl->tpl_vars['url']->value), ENT_QUOTES, 'UTF-8');?>

        <?php } else { ?>
            <input type="text"
                   id="url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                   name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                   class="input-large"
                   value="<?php echo htmlspecialchars(smarty_modifier_puny_decode($_smarty_tpl->tpl_vars['url']->value), ENT_QUOTES, 'UTF-8');?>
"
            />
        <?php }?>
    </div>
</div>
<?php }} ?>

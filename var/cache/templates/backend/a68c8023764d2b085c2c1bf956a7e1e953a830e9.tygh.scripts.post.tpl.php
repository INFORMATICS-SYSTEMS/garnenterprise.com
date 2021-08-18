<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:06
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__category_banners/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1692665517610e2efe2d0a89-91034148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a68c8023764d2b085c2c1bf956a7e1e953a830e9' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__category_banners/hooks/index/scripts.post.tpl',
      1 => 1627896009,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1692665517610e2efe2d0a89-91034148',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2efe2d3a88_60077537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2efe2d3a88_60077537')) {function content_610e2efe2d3a88_60077537($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__cb.validator.wrong_time_format'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function (_, $) {
_.tr({
ab__cb_wrong_time_format: '<?php echo strtr($_smarty_tpl->__("ab__cb.validator.wrong_time_format"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
});
$(document).ready(function () {

$.ceFormValidator('registerValidator', {
class_name: 'cm-ab-cb-time',
message: _.tr('ab__cb_wrong_time_format'),
func: function (elm_id, elm) {
re = /^(\d{1,2}):(\d{2})?$/;
let elmVal = elm.val();
if (elmVal === '') {
return true;
}
if (regs = elmVal.match(re)) {
return regs[1] <= 23 && regs[2] <= 59;
}
return false;
}
});
});

}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>

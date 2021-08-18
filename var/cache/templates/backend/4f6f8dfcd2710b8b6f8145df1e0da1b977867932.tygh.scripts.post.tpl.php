<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:06
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1653567309610e2efe2d7947-71101527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f6f8dfcd2710b8b6f8145df1e0da1b977867932' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__deal_of_the_day/hooks/index/scripts.post.tpl',
      1 => 1627896292,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1653567309610e2efe2d7947-71101527',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2efe2db299_88052086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2efe2db299_88052086')) {function content_610e2efe2db299_88052086($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__dotd.error.use_schedule_is_on'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function (_, $) {
Tygh.tr({
'ab__dotd.error.use_schedule_is_on' : '<?php echo strtr($_smarty_tpl->__("ab__dotd.error.use_schedule_is_on"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
'ab__dotd.schedule.table_header': '<?php echo strtr($_smarty_tpl->__('ab__dotd.schedule.table_header'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
});
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>

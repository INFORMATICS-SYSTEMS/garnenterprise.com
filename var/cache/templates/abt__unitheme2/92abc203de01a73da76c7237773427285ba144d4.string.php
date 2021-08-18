<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:24:02
         compiled from "92abc203de01a73da76c7237773427285ba144d4" */ ?>
<?php /*%%SmartyHeaderCode:1060888397610e351220b7e7-15864345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92abc203de01a73da76c7237773427285ba144d4' => 
    array (
      0 => '92abc203de01a73da76c7237773427285ba144d4',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1060888397610e351220b7e7-15864345',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3512210042_64394836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3512210042_64394836')) {function content_610e3512210042_64394836($_smarty_tpl) {?><div class="ut2-pn">
	<div class="ut2-pn__items">
		<a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
</a>
		<a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone_2'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone_2'], ENT_QUOTES, 'UTF-8');?>
</a>
	</div>
	<div class="ut2-pn__link">
		<?php if ($_smarty_tpl->tpl_vars['addons']->value['call_requests']['status']=="A") {
echo $_smarty_tpl->getSubTemplate ("addons/call_requests/blocks/abt__ut2_call_request.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}?>
	</div>
</div><?php }} ?>

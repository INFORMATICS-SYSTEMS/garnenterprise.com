<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:21
         compiled from "685dd0d419f6092be950aedbbb499c1035e56879" */ ?>
<?php /*%%SmartyHeaderCode:2101260219610e2f0da92878-97320907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '685dd0d419f6092be950aedbbb499c1035e56879' => 
    array (
      0 => '685dd0d419f6092be950aedbbb499c1035e56879',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2101260219610e2f0da92878-97320907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f0da99ef4_12726600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f0da99ef4_12726600')) {function content_610e2f0da99ef4_12726600($_smarty_tpl) {?><ul>
<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_city'], ENT_QUOTES, 'UTF-8');?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_address'], ENT_QUOTES, 'UTF-8');?>
</li>
<li><a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
 (the call is free)</a></li>
<li><a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone_2'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone_2'], ENT_QUOTES, 'UTF-8');?>
</a></li>
<li><?php echo $_smarty_tpl->__('weekday_abr_1');?>
-<?php echo $_smarty_tpl->__('weekday_abr_0');?>
 9.00 - 18.00</li>
<li><a class="ty-exception__links-a greeny" href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_users_department'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_users_department'], ENT_QUOTES, 'UTF-8');?>
</a></li>
<li><a href="<?php echo htmlspecialchars(fn_url('pages.view&page_id=20'), ENT_QUOTES, 'UTF-8');?>
" class="ty-exception__links-a"><?php echo $_smarty_tpl->__('view_on_map');?>
</a></li>
</ul><?php }} ?>

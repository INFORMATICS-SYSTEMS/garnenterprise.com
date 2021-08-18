<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:14:28
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/hooks/products/ab__motivation_block.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1824950075610e32d477b091-90046181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d3e353e542d53cef0b058471b594eb7ba45ecde' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/abt__unitheme2_mv/hooks/products/ab__motivation_block.pre.tpl',
      1 => 1627896588,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1824950075610e32d477b091-90046181',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'company_name' => 0,
    'company_id' => 0,
    'settings' => 0,
    'company_data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e32d47b0888_74804340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e32d47b0888_74804340')) {function content_610e32d47b0888_74804340($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.truncate.php';
if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor','vendor'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (fn_allowed_for("MULTIVENDOR")&&($_smarty_tpl->tpl_vars['company_name']->value||$_smarty_tpl->tpl_vars['company_id']->value)&&$_smarty_tpl->tpl_vars['settings']->value['Vendors']['display_vendor']=="Y") {?>
    <div class="ut2-vendor-block">
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['show_logo'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=="Y") {?>
        	<div class="ut2-vendor-block__logo"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['company_data']->value['logos']['theme']['image'],'image_width'=>"80",'image_height'=>"80"), 0);?>
</div>
        <?php }?>
        <div class="ut2-vendor-block__content">
			<div class="ut2-vendor-block__name">
				<label><?php echo $_smarty_tpl->__("vendor");?>
:</label>
				<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['show_name_as_link'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=="Y") {?><a href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->tpl_vars['company_name']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['show_name_as_link'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=="Y") {?></a><?php }?>
			</div>
			
			<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['truncate_short_description'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]!="0") {?>
	        	<div class="ut2-vendor-block__info"><?php echo htmlspecialchars(smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['company_data']->value['company_description']),$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['truncate_short_description'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']],"...",true), ENT_QUOTES, 'UTF-8');?>
</div>
	        <?php }?>

	        <div class="ut2-vendor-block__contacts">
				<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['show_phone'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=="Y"&&$_smarty_tpl->tpl_vars['company_data']->value['phone']) {?><div class="ut2-vendor-block__phone"><i class="ut2-icon-outline-headset_mic"></i> <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']=="mobile") {?><a href="tel:<?php echo $_smarty_tpl->tpl_vars['company_data']->value['phone'];?>
"><?php }
echo $_smarty_tpl->tpl_vars['company_data']->value['phone'];
if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']=="mobile") {?></a><?php }?></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['show_ask_question_link'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=="Y") {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:product_company_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:product_company_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:product_company_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?>
			</div>
        </div>
    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2_mv/hooks/products/ab__motivation_block.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2_mv/hooks/products/ab__motivation_block.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (fn_allowed_for("MULTIVENDOR")&&($_smarty_tpl->tpl_vars['company_name']->value||$_smarty_tpl->tpl_vars['company_id']->value)&&$_smarty_tpl->tpl_vars['settings']->value['Vendors']['display_vendor']=="Y") {?>
    <div class="ut2-vendor-block">
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['show_logo'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=="Y") {?>
        	<div class="ut2-vendor-block__logo"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['company_data']->value['logos']['theme']['image'],'image_width'=>"80",'image_height'=>"80"), 0);?>
</div>
        <?php }?>
        <div class="ut2-vendor-block__content">
			<div class="ut2-vendor-block__name">
				<label><?php echo $_smarty_tpl->__("vendor");?>
:</label>
				<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['show_name_as_link'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=="Y") {?><a href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->tpl_vars['company_name']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['show_name_as_link'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=="Y") {?></a><?php }?>
			</div>
			
			<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['truncate_short_description'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]!="0") {?>
	        	<div class="ut2-vendor-block__info"><?php echo htmlspecialchars(smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['company_data']->value['company_description']),$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['truncate_short_description'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']],"...",true), ENT_QUOTES, 'UTF-8');?>
</div>
	        <?php }?>

	        <div class="ut2-vendor-block__contacts">
				<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['show_phone'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=="Y"&&$_smarty_tpl->tpl_vars['company_data']->value['phone']) {?><div class="ut2-vendor-block__phone"><i class="ut2-icon-outline-headset_mic"></i> <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']=="mobile") {?><a href="tel:<?php echo $_smarty_tpl->tpl_vars['company_data']->value['phone'];?>
"><?php }
echo $_smarty_tpl->tpl_vars['company_data']->value['phone'];
if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']=="mobile") {?></a><?php }?></div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['vendor']['show_ask_question_link'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=="Y") {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:product_company_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:product_company_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:product_company_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?>
			</div>
        </div>
    </div>
<?php }?>
<?php }?><?php }} ?>

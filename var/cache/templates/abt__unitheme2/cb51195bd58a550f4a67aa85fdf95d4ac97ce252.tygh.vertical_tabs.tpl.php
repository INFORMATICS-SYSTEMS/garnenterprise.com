<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:14:28
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/ab__motivation_block/blocks/components/vertical_tabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1506055400610e32d4c184e6-99854075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb51195bd58a550f4a67aa85fdf95d4ac97ce252' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/ab__motivation_block/blocks/components/vertical_tabs.tpl',
      1 => 1627896034,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1506055400610e32d4c184e6-99854075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'ab__motivation_items' => 0,
    'id' => 0,
    'ab__mb_item' => 0,
    'key' => 0,
    'capture_name' => 0,
    'product' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e32d4c57040_29611315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e32d4c57040_29611315')) {function content_610e32d4c57040_29611315($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_live_edit')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.live_edit.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['ab__mb_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ab__mb_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__motivation_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ab__mb_item']->key => $_smarty_tpl->tpl_vars['ab__mb_item']->value) {
$_smarty_tpl->tpl_vars['ab__mb_item']->_loop = true;
$_smarty_tpl->tpl_vars['key'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['ab__mb_item']->value['motivation_item_id']), null, 0);
$_smarty_tpl->tpl_vars['capture_name'] = new Smarty_variable("mb__content_".((string)$_smarty_tpl->tpl_vars['key']->value), null, 0);
$_smarty_tpl->_capture_stack[0][] = array($_smarty_tpl->tpl_vars['capture_name']->value, null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__mb:vertical_tab_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__mb:vertical_tab_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__mb:templates_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__mb:templates_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['ab__mb_item']->value['template_path']=='addons/ab__motivation_block/blocks/components/item_templates/geo_maps.tpl') {
$_smarty_tpl->tpl_vars['product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);
}
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__mb:templates_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['ab__mb_item']->value['template_path'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__mb:vertical_tab_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(strip_tags(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['capture_name']->value],'<img>'))) {?><div class="ab__mb_item" style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['bg_color'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['bg_color']!="#ffffff") {?>;border-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['bg_color'], ENT_QUOTES, 'UTF-8');
}?>"><div id="sw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ab__mb_item-title cm-combination<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['save_element_state']==smarty_modifier_enum("YesNo::YES")) {?> ab-mb-save-state<?php }
if (($_smarty_tpl->tpl_vars['ab__mb_item']->value['expanded']==smarty_modifier_enum("YesNo::YES")&&$_COOKIE[$_smarty_tpl->tpl_vars['key']->value]!=smarty_modifier_enum("YesNo::NO"))||$_COOKIE[$_smarty_tpl->tpl_vars['key']->value]==smarty_modifier_enum("YesNo::YES")) {?> open<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__mb:vertical_tab_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__mb:vertical_tab_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['ab__mb_item']->value['icon_type']=='img'&&$_smarty_tpl->tpl_vars['ab__mb_item']->value['main_pair']) {
echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['ab__mb_item']->value['main_pair']), 0);
} elseif ($_smarty_tpl->tpl_vars['ab__mb_item']->value['icon_type']=='icon'&&$_smarty_tpl->tpl_vars['ab__mb_item']->value['icon_class']) {?><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab__mb_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');?>
 ab__mb_item-icon" style="color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab__mb_item']->value['icon_color'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }?><div class="ab__mb_item-name" <?php echo smarty_function_live_edit(array('name'=>"ab__motivation_block:name:".((string)$_smarty_tpl->tpl_vars['ab__mb_item']->value['motivation_item_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab__mb_item']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__mb:vertical_tab_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div><div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ab__mb_item-description"<?php if (($_smarty_tpl->tpl_vars['ab__mb_item']->value['expanded']!=smarty_modifier_enum("YesNo::YES")||$_COOKIE[$_smarty_tpl->tpl_vars['key']->value]==smarty_modifier_enum("YesNo::NO"))&&$_COOKIE[$_smarty_tpl->tpl_vars['key']->value]!=smarty_modifier_enum("YesNo::YES")) {?> style="display: none;"<?php }?>><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['capture_name']->value];?>
</div></div><?php }
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__motivation_block/blocks/components/vertical_tabs.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__motivation_block/blocks/components/vertical_tabs.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['ab__mb_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ab__mb_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab__motivation_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ab__mb_item']->key => $_smarty_tpl->tpl_vars['ab__mb_item']->value) {
$_smarty_tpl->tpl_vars['ab__mb_item']->_loop = true;
$_smarty_tpl->tpl_vars['key'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['ab__mb_item']->value['motivation_item_id']), null, 0);
$_smarty_tpl->tpl_vars['capture_name'] = new Smarty_variable("mb__content_".((string)$_smarty_tpl->tpl_vars['key']->value), null, 0);
$_smarty_tpl->_capture_stack[0][] = array($_smarty_tpl->tpl_vars['capture_name']->value, null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__mb:vertical_tab_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__mb:vertical_tab_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__mb:templates_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__mb:templates_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['ab__mb_item']->value['template_path']=='addons/ab__motivation_block/blocks/components/item_templates/geo_maps.tpl') {
$_smarty_tpl->tpl_vars['product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);
}
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__mb:templates_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['ab__mb_item']->value['template_path'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__mb:vertical_tab_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(strip_tags(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['capture_name']->value],'<img>'))) {?><div class="ab__mb_item" style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['bg_color'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['bg_color']!="#ffffff") {?>;border-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['bg_color'], ENT_QUOTES, 'UTF-8');
}?>"><div id="sw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ab__mb_item-title cm-combination<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['save_element_state']==smarty_modifier_enum("YesNo::YES")) {?> ab-mb-save-state<?php }
if (($_smarty_tpl->tpl_vars['ab__mb_item']->value['expanded']==smarty_modifier_enum("YesNo::YES")&&$_COOKIE[$_smarty_tpl->tpl_vars['key']->value]!=smarty_modifier_enum("YesNo::NO"))||$_COOKIE[$_smarty_tpl->tpl_vars['key']->value]==smarty_modifier_enum("YesNo::YES")) {?> open<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__mb:vertical_tab_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__mb:vertical_tab_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['ab__mb_item']->value['icon_type']=='img'&&$_smarty_tpl->tpl_vars['ab__mb_item']->value['main_pair']) {
echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['ab__mb_item']->value['main_pair']), 0);
} elseif ($_smarty_tpl->tpl_vars['ab__mb_item']->value['icon_type']=='icon'&&$_smarty_tpl->tpl_vars['ab__mb_item']->value['icon_class']) {?><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab__mb_item']->value['icon_class'], ENT_QUOTES, 'UTF-8');?>
 ab__mb_item-icon" style="color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab__mb_item']->value['icon_color'], ENT_QUOTES, 'UTF-8');?>
"></i><?php }?><div class="ab__mb_item-name" <?php echo smarty_function_live_edit(array('name'=>"ab__motivation_block:name:".((string)$_smarty_tpl->tpl_vars['ab__mb_item']->value['motivation_item_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab__mb_item']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__mb:vertical_tab_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div><div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="ab__mb_item-description"<?php if (($_smarty_tpl->tpl_vars['ab__mb_item']->value['expanded']!=smarty_modifier_enum("YesNo::YES")||$_COOKIE[$_smarty_tpl->tpl_vars['key']->value]==smarty_modifier_enum("YesNo::NO"))&&$_COOKIE[$_smarty_tpl->tpl_vars['key']->value]!=smarty_modifier_enum("YesNo::YES")) {?> style="display: none;"<?php }?>><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['capture_name']->value];?>
</div></div><?php }
}
}?><?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:40:31
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/ab__fast_navigation/blocks/ab__fast_navigation/components/ab__fn_common_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:554538914610e38ef611284-38339516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87a81691fd9204122f767b89e932ab3894a500c3' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/ab__fast_navigation/blocks/ab__fast_navigation/components/ab__fn_common_block.tpl',
      1 => 1627896058,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '554538914610e38ef611284-38339516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    'block' => 0,
    'properties' => 0,
    'second_level' => 0,
    'template_name' => 0,
    'ab__fn_forced_one_level_view' => 0,
    'first_level_scroller' => 0,
    'second_level_scroller' => 0,
    'item' => 0,
    'first_level_item_tag' => 0,
    'first_level_content_tags' => 0,
    'first_level_icon_width' => 0,
    'object_type' => 0,
    'object_name_filed' => 0,
    'elem_id' => 0,
    'is_first' => 0,
    'addons' => 0,
    'content' => 0,
    'config' => 0,
    'suffix' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e38ef6b3912_62674910',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e38ef6b3912_62674910')) {function content_610e38ef6b3912_62674910($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_live_edit')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.live_edit.php';
if (!is_callable('smarty_modifier_count')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_function_script')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('no_image','no_image'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['properties'] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['properties'], null, 0);
$_smarty_tpl->tpl_vars['content'] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['content'], null, 0);
$_smarty_tpl->tpl_vars['first_level_icon_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['properties']->value['ab__fn_icon_width'], null, 0);
$_smarty_tpl->tpl_vars['second_level'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['second_level']->value)===null||$tmp==='' ? false : $tmp), null, 0);
$_smarty_tpl->tpl_vars['template_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['template_name']->value)===null||$tmp==='' ? 'one_level' : $tmp), null, 0);
if ($_smarty_tpl->tpl_vars['ab__fn_forced_one_level_view']->value) {
$_smarty_tpl->tpl_vars['second_level'] = new Smarty_variable(false, null, 0);
$_smarty_tpl->tpl_vars['template_name'] = new Smarty_variable('one_level', null, 0);
}
$_smarty_tpl->tpl_vars['first_level_scroller'] = new Smarty_variable($_smarty_tpl->tpl_vars['properties']->value['ab__fn_display_type']=='ab__fn_scroller'||$_smarty_tpl->tpl_vars['second_level']->value, null, 0);
$_smarty_tpl->tpl_vars['second_level_scroller'] = new Smarty_variable($_smarty_tpl->tpl_vars['properties']->value['ab__fn_init_second_level_scroll']=='Y', null, 0);
$_smarty_tpl->tpl_vars['first_level_item_tag'] = new Smarty_variable('a', null, 0);
$_smarty_tpl->tpl_vars['first_level_content_tags'] = new Smarty_variable('div', null, 0);
if ($_smarty_tpl->tpl_vars['second_level']->value) {
$_smarty_tpl->tpl_vars['first_level_item_tag'] = new Smarty_variable('span', null, 0);
$_smarty_tpl->tpl_vars['first_level_content_tags'] = new Smarty_variable('span', null, 0);
}
$_smarty_tpl->tpl_vars['image_path'] = new Smarty_variable('http_image_path', null, 0);
if ((defined('HTTPS') ? constant('HTTPS') : null)===true) {
$_smarty_tpl->tpl_vars['image_path'] = new Smarty_variable('https_image_path', null, 0);
}
$_smarty_tpl->tpl_vars['object_type'] = new Smarty_variable('static_data', null, 0);
$_smarty_tpl->tpl_vars['object_name_filed'] = new Smarty_variable('descr', null, 0);
if ($_smarty_tpl->tpl_vars['block']->value['type']=='ab__fast_navigation_categories') {
$_smarty_tpl->tpl_vars['object_type'] = new Smarty_variable('category', null, 0);
$_smarty_tpl->tpl_vars['object_name_filed'] = new Smarty_variable('category', null, 0);
}?><?php echo '<script'; ?>
>(function ( _, $ ) {_.ab__fn.blocks['<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
'] = {block_type: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['type'], ENT_QUOTES, 'UTF-8');?>
",columns: {number_of_columns_desktop: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_desktop'], ENT_QUOTES, 'UTF-8');?>
,number_of_columns_desktop_small: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_desktop_small'], ENT_QUOTES, 'UTF-8');?>
,number_of_columns_tablet: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_tablet'], ENT_QUOTES, 'UTF-8');?>
,number_of_columns_tablet_small: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_tablet_small'], ENT_QUOTES, 'UTF-8');?>
,number_of_columns_mobile: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_mobile'], ENT_QUOTES, 'UTF-8');?>
},<?php if ($_smarty_tpl->tpl_vars['first_level_scroller']->value) {?>first_level_scroller: {init_scrollbar: Boolean(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['properties']->value['ab__fn_init_scrollbar']==='Y', ENT_QUOTES, 'UTF-8');?>
),inited: false,},<?php }
if ($_smarty_tpl->tpl_vars['second_level_scroller']->value) {?>second_level_scroller: { }<?php }?>};})(Tygh, Tygh.$);<?php echo '</script'; ?>
><div class="ab-fn-parent ab-fn-block-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
 clearfix"><div id="ab__fn-first-level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab-fn-first-level ab-fn-clipped <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['properties']->value['ab__fn_display_type'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_name']->value, ENT_QUOTES, 'UTF-8');?>
 active"><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__fast_navigation:first_level_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div data-item-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->key, ENT_QUOTES, 'UTF-8');?>
" data-item-index="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->index, ENT_QUOTES, 'UTF-8');?>
" class="ab-fn-first-level-item<?php if ($_smarty_tpl->tpl_vars['first_level_scroller']->value) {?> scroller-item<?php }?> ty-column<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_desktop'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['class'], ENT_QUOTES, 'UTF-8');?>
 ab-fn-dont-allow-link<?php echo htmlspecialchars(!$_smarty_tpl->tpl_vars['second_level']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->first) {?> active<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__fast_navigation:first_level_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_item_tag']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['second_level']->value) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['item']->value['href']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ab-fn-fl-content"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__fast_navigation:first_level_item_image")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item_image"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_content_tags']->value, ENT_QUOTES, 'UTF-8');?>
 class="ab-fn-image-wrap<?php if (!$_smarty_tpl->tpl_vars['item']->value['image']||!$_smarty_tpl->tpl_vars['item']->value['image']['icon']) {?> ab-fn-no-image-wrapper<?php }?>" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_icon_width']->value, ENT_QUOTES, 'UTF-8');?>
px;"><?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {
if ($_smarty_tpl->tpl_vars['item']->value['ab__fn_use_origin_image']=='Y') {
echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ab__loading_spinner'=>true,'images'=>$_smarty_tpl->tpl_vars['item']->value['image']), 0);
} else {
echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ab__loading_spinner'=>true,'image_height'=>$_smarty_tpl->tpl_vars['first_level_icon_width']->value,'image_width'=>$_smarty_tpl->tpl_vars['first_level_icon_width']->value,'images'=>$_smarty_tpl->tpl_vars['item']->value['image']), 0);
}
} else { ?><span class="ab-fn-no-image" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_icon_width']->value, ENT_QUOTES, 'UTF-8');?>
px"><i class="ty-no-image__icon ty-icon-image" title="<?php echo $_smarty_tpl->__("no_image");?>
"></i></span><?php }?></<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_content_tags']->value, ENT_QUOTES, 'UTF-8');?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item_image"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<span class="ab-fn-item-header"><span <?php echo smarty_function_live_edit(array('name'=>((string)$_smarty_tpl->tpl_vars['object_type']->value).":".((string)$_smarty_tpl->tpl_vars['object_name_filed']->value).":".((string)$_smarty_tpl->tpl_vars['item']->key)),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['item'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['item']->value['ab__fn_label_text']&&$_smarty_tpl->tpl_vars['item']->value['ab__fn_label_show']=='Y') {?><span class="ab-fn-label" style="background: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['ab__fn_label_background'], ENT_QUOTES, 'UTF-8');?>
;"><span style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['ab__fn_label_color'], ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_function_live_edit(array('name'=>((string)$_smarty_tpl->tpl_vars['object_type']->value).":ab__fn_label_text:".((string)$_smarty_tpl->tpl_vars['item']->key)),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['ab__fn_label_text'], ENT_QUOTES, 'UTF-8');?>
</span></span><?php }?></span></<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_item_tag']->value, ENT_QUOTES, 'UTF-8');?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} ?></div><?php if ($_smarty_tpl->tpl_vars['first_level_scroller']->value&&$_smarty_tpl->tpl_vars['properties']->value['ab__fn_init_scrollbar']=='Y') {?><div id="ab__fn-scrollbar-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab-fn-scrollbar"><div class="ab-fn-scrollbar-plate"></div></div><?php }
if ($_smarty_tpl->tpl_vars['second_level']->value) {
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
$_smarty_tpl->tpl_vars['elem_id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['grid_id'])."_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['item']->key), null, 0);
$_smarty_tpl->tpl_vars['is_first'] = new Smarty_variable(false, null, 0);
if ($_smarty_tpl->tpl_vars['item']->first) {
$_smarty_tpl->tpl_vars['is_first'] = new Smarty_variable(true, null, 0);
}?><div id="ab__fn-second-level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
" class="ab-fn-second-level<?php if ($_smarty_tpl->tpl_vars['is_first']->value) {?> active first<?php }
if ($_smarty_tpl->tpl_vars['second_level_scroller']->value) {?> ab-fn-second-level-scroller<?php }?>" data-childs-count="<?php echo htmlspecialchars(smarty_modifier_count($_smarty_tpl->tpl_vars['item']->value['subitems']), ENT_QUOTES, 'UTF-8');?>
" data-add-delimeter="<?php if ($_smarty_tpl->tpl_vars['second_level_scroller']->value) {?>false<?php } else { ?>true<?php }?>"><?php if ($_smarty_tpl->tpl_vars['is_first']->value) {
echo $_smarty_tpl->getSubTemplate ("addons/ab__fast_navigation/blocks/ab__fast_navigation/components/second_level_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['item']->value,'scroller'=>$_smarty_tpl->tpl_vars['second_level_scroller']->value), 0);
} else {
$_smarty_tpl->_capture_stack[0][] = array("children", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("addons/ab__fast_navigation/blocks/ab__fast_navigation/components/second_level_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['item']->value), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if ($_smarty_tpl->tpl_vars['addons']->value['ab__fast_navigation']['load_by_ajax']=='Y') {
echo htmlspecialchars(fn_ab__fn_ajax_save(Smarty::$_smarty_vars['capture']['children'],"ab__fn-second-level-".((string)$_smarty_tpl->tpl_vars['elem_id']->value),$_smarty_tpl->tpl_vars['block']->value['type']), ENT_QUOTES, 'UTF-8');
} else {
echo Smarty::$_smarty_vars['capture']['children'];
}
}?></div><?php }
}
if ($_smarty_tpl->tpl_vars['content']->value['ab__fn_show_common_btn']=='Y') {?><div class="ab-fn-common-link"><?php if ($_smarty_tpl->tpl_vars['content']->value['ab__fn_common_btn_type']=='ab__fn_cbt_btn') {?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['content']->value['ab__fn_show_common_btn_link']), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn ty-btn__primary ty-btn__big <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value['ab__fn_common_btn_class'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['content']->value['ab__fn_common_btn_text'])===null||$tmp==='' ? $_smarty_tpl->__('ab__fn.front.button.defult_text') : $tmp), ENT_QUOTES, 'UTF-8');?>
</span></a><?php } else { ?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['content']->value['ab__fn_show_common_btn_link']), ENT_QUOTES, 'UTF-8');?>
" class="ab-fn-common-text-link <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value['ab__fn_common_btn_class'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['content']->value['ab__fn_common_btn_text'])===null||$tmp==='' ? $_smarty_tpl->__('ab__fn.front.button.defult_text') : $tmp), ENT_QUOTES, 'UTF-8');?>
</span><i class="ty-product-switcher__icon ty-icon-right-circle"></i></a><?php }?></div><?php }?></div><?php }
$_smarty_tpl->tpl_vars['suffix'] = new Smarty_variable('', null, 0);
if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['dev_js']) {
$_smarty_tpl->tpl_vars['suffix'] = new Smarty_variable('.min', null, 0);
}
echo smarty_function_script(array('src'=>"js/addons/ab__fast_navigation/ab__fn_customer".((string)$_smarty_tpl->tpl_vars['suffix']->value).".js"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__fast_navigation/blocks/ab__fast_navigation/components/ab__fn_common_block.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__fast_navigation/blocks/ab__fast_navigation/components/ab__fn_common_block.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['properties'] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['properties'], null, 0);
$_smarty_tpl->tpl_vars['content'] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['content'], null, 0);
$_smarty_tpl->tpl_vars['first_level_icon_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['properties']->value['ab__fn_icon_width'], null, 0);
$_smarty_tpl->tpl_vars['second_level'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['second_level']->value)===null||$tmp==='' ? false : $tmp), null, 0);
$_smarty_tpl->tpl_vars['template_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['template_name']->value)===null||$tmp==='' ? 'one_level' : $tmp), null, 0);
if ($_smarty_tpl->tpl_vars['ab__fn_forced_one_level_view']->value) {
$_smarty_tpl->tpl_vars['second_level'] = new Smarty_variable(false, null, 0);
$_smarty_tpl->tpl_vars['template_name'] = new Smarty_variable('one_level', null, 0);
}
$_smarty_tpl->tpl_vars['first_level_scroller'] = new Smarty_variable($_smarty_tpl->tpl_vars['properties']->value['ab__fn_display_type']=='ab__fn_scroller'||$_smarty_tpl->tpl_vars['second_level']->value, null, 0);
$_smarty_tpl->tpl_vars['second_level_scroller'] = new Smarty_variable($_smarty_tpl->tpl_vars['properties']->value['ab__fn_init_second_level_scroll']=='Y', null, 0);
$_smarty_tpl->tpl_vars['first_level_item_tag'] = new Smarty_variable('a', null, 0);
$_smarty_tpl->tpl_vars['first_level_content_tags'] = new Smarty_variable('div', null, 0);
if ($_smarty_tpl->tpl_vars['second_level']->value) {
$_smarty_tpl->tpl_vars['first_level_item_tag'] = new Smarty_variable('span', null, 0);
$_smarty_tpl->tpl_vars['first_level_content_tags'] = new Smarty_variable('span', null, 0);
}
$_smarty_tpl->tpl_vars['image_path'] = new Smarty_variable('http_image_path', null, 0);
if ((defined('HTTPS') ? constant('HTTPS') : null)===true) {
$_smarty_tpl->tpl_vars['image_path'] = new Smarty_variable('https_image_path', null, 0);
}
$_smarty_tpl->tpl_vars['object_type'] = new Smarty_variable('static_data', null, 0);
$_smarty_tpl->tpl_vars['object_name_filed'] = new Smarty_variable('descr', null, 0);
if ($_smarty_tpl->tpl_vars['block']->value['type']=='ab__fast_navigation_categories') {
$_smarty_tpl->tpl_vars['object_type'] = new Smarty_variable('category', null, 0);
$_smarty_tpl->tpl_vars['object_name_filed'] = new Smarty_variable('category', null, 0);
}?><?php echo '<script'; ?>
>(function ( _, $ ) {_.ab__fn.blocks['<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
'] = {block_type: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['type'], ENT_QUOTES, 'UTF-8');?>
",columns: {number_of_columns_desktop: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_desktop'], ENT_QUOTES, 'UTF-8');?>
,number_of_columns_desktop_small: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_desktop_small'], ENT_QUOTES, 'UTF-8');?>
,number_of_columns_tablet: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_tablet'], ENT_QUOTES, 'UTF-8');?>
,number_of_columns_tablet_small: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_tablet_small'], ENT_QUOTES, 'UTF-8');?>
,number_of_columns_mobile: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_mobile'], ENT_QUOTES, 'UTF-8');?>
},<?php if ($_smarty_tpl->tpl_vars['first_level_scroller']->value) {?>first_level_scroller: {init_scrollbar: Boolean(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['properties']->value['ab__fn_init_scrollbar']==='Y', ENT_QUOTES, 'UTF-8');?>
),inited: false,},<?php }
if ($_smarty_tpl->tpl_vars['second_level_scroller']->value) {?>second_level_scroller: { }<?php }?>};})(Tygh, Tygh.$);<?php echo '</script'; ?>
><div class="ab-fn-parent ab-fn-block-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
 clearfix"><div id="ab__fn-first-level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab-fn-first-level ab-fn-clipped <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['properties']->value['ab__fn_display_type'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_name']->value, ENT_QUOTES, 'UTF-8');?>
 active"><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__fast_navigation:first_level_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div data-item-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->key, ENT_QUOTES, 'UTF-8');?>
" data-item-index="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->index, ENT_QUOTES, 'UTF-8');?>
" class="ab-fn-first-level-item<?php if ($_smarty_tpl->tpl_vars['first_level_scroller']->value) {?> scroller-item<?php }?> ty-column<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['properties']->value['ab__fn_number_of_columns_desktop'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['class'], ENT_QUOTES, 'UTF-8');?>
 ab-fn-dont-allow-link<?php echo htmlspecialchars(!$_smarty_tpl->tpl_vars['second_level']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->first) {?> active<?php }?>"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__fast_navigation:first_level_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_item_tag']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['second_level']->value) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['item']->value['href']), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ab-fn-fl-content"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__fast_navigation:first_level_item_image")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item_image"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_content_tags']->value, ENT_QUOTES, 'UTF-8');?>
 class="ab-fn-image-wrap<?php if (!$_smarty_tpl->tpl_vars['item']->value['image']||!$_smarty_tpl->tpl_vars['item']->value['image']['icon']) {?> ab-fn-no-image-wrapper<?php }?>" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_icon_width']->value, ENT_QUOTES, 'UTF-8');?>
px;"><?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {
if ($_smarty_tpl->tpl_vars['item']->value['ab__fn_use_origin_image']=='Y') {
echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ab__loading_spinner'=>true,'images'=>$_smarty_tpl->tpl_vars['item']->value['image']), 0);
} else {
echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ab__loading_spinner'=>true,'image_height'=>$_smarty_tpl->tpl_vars['first_level_icon_width']->value,'image_width'=>$_smarty_tpl->tpl_vars['first_level_icon_width']->value,'images'=>$_smarty_tpl->tpl_vars['item']->value['image']), 0);
}
} else { ?><span class="ab-fn-no-image" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_icon_width']->value, ENT_QUOTES, 'UTF-8');?>
px"><i class="ty-no-image__icon ty-icon-image" title="<?php echo $_smarty_tpl->__("no_image");?>
"></i></span><?php }?></<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_content_tags']->value, ENT_QUOTES, 'UTF-8');?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item_image"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<span class="ab-fn-item-header"><span <?php echo smarty_function_live_edit(array('name'=>((string)$_smarty_tpl->tpl_vars['object_type']->value).":".((string)$_smarty_tpl->tpl_vars['object_name_filed']->value).":".((string)$_smarty_tpl->tpl_vars['item']->key)),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['item'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['item']->value['ab__fn_label_text']&&$_smarty_tpl->tpl_vars['item']->value['ab__fn_label_show']=='Y') {?><span class="ab-fn-label" style="background: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['ab__fn_label_background'], ENT_QUOTES, 'UTF-8');?>
;"><span style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['ab__fn_label_color'], ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_function_live_edit(array('name'=>((string)$_smarty_tpl->tpl_vars['object_type']->value).":ab__fn_label_text:".((string)$_smarty_tpl->tpl_vars['item']->key)),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['ab__fn_label_text'], ENT_QUOTES, 'UTF-8');?>
</span></span><?php }?></span></<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_level_item_tag']->value, ENT_QUOTES, 'UTF-8');?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__fast_navigation:first_level_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} ?></div><?php if ($_smarty_tpl->tpl_vars['first_level_scroller']->value&&$_smarty_tpl->tpl_vars['properties']->value['ab__fn_init_scrollbar']=='Y') {?><div id="ab__fn-scrollbar-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="ab-fn-scrollbar"><div class="ab-fn-scrollbar-plate"></div></div><?php }
if ($_smarty_tpl->tpl_vars['second_level']->value) {
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
$_smarty_tpl->tpl_vars['elem_id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['grid_id'])."_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['item']->key), null, 0);
$_smarty_tpl->tpl_vars['is_first'] = new Smarty_variable(false, null, 0);
if ($_smarty_tpl->tpl_vars['item']->first) {
$_smarty_tpl->tpl_vars['is_first'] = new Smarty_variable(true, null, 0);
}?><div id="ab__fn-second-level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elem_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
" class="ab-fn-second-level<?php if ($_smarty_tpl->tpl_vars['is_first']->value) {?> active first<?php }
if ($_smarty_tpl->tpl_vars['second_level_scroller']->value) {?> ab-fn-second-level-scroller<?php }?>" data-childs-count="<?php echo htmlspecialchars(smarty_modifier_count($_smarty_tpl->tpl_vars['item']->value['subitems']), ENT_QUOTES, 'UTF-8');?>
" data-add-delimeter="<?php if ($_smarty_tpl->tpl_vars['second_level_scroller']->value) {?>false<?php } else { ?>true<?php }?>"><?php if ($_smarty_tpl->tpl_vars['is_first']->value) {
echo $_smarty_tpl->getSubTemplate ("addons/ab__fast_navigation/blocks/ab__fast_navigation/components/second_level_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['item']->value,'scroller'=>$_smarty_tpl->tpl_vars['second_level_scroller']->value), 0);
} else {
$_smarty_tpl->_capture_stack[0][] = array("children", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("addons/ab__fast_navigation/blocks/ab__fast_navigation/components/second_level_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['item']->value), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if ($_smarty_tpl->tpl_vars['addons']->value['ab__fast_navigation']['load_by_ajax']=='Y') {
echo htmlspecialchars(fn_ab__fn_ajax_save(Smarty::$_smarty_vars['capture']['children'],"ab__fn-second-level-".((string)$_smarty_tpl->tpl_vars['elem_id']->value),$_smarty_tpl->tpl_vars['block']->value['type']), ENT_QUOTES, 'UTF-8');
} else {
echo Smarty::$_smarty_vars['capture']['children'];
}
}?></div><?php }
}
if ($_smarty_tpl->tpl_vars['content']->value['ab__fn_show_common_btn']=='Y') {?><div class="ab-fn-common-link"><?php if ($_smarty_tpl->tpl_vars['content']->value['ab__fn_common_btn_type']=='ab__fn_cbt_btn') {?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['content']->value['ab__fn_show_common_btn_link']), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn ty-btn__primary ty-btn__big <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value['ab__fn_common_btn_class'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['content']->value['ab__fn_common_btn_text'])===null||$tmp==='' ? $_smarty_tpl->__('ab__fn.front.button.defult_text') : $tmp), ENT_QUOTES, 'UTF-8');?>
</span></a><?php } else { ?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['content']->value['ab__fn_show_common_btn_link']), ENT_QUOTES, 'UTF-8');?>
" class="ab-fn-common-text-link <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value['ab__fn_common_btn_class'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['content']->value['ab__fn_common_btn_text'])===null||$tmp==='' ? $_smarty_tpl->__('ab__fn.front.button.defult_text') : $tmp), ENT_QUOTES, 'UTF-8');?>
</span><i class="ty-product-switcher__icon ty-icon-right-circle"></i></a><?php }?></div><?php }?></div><?php }
$_smarty_tpl->tpl_vars['suffix'] = new Smarty_variable('', null, 0);
if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['dev_js']) {
$_smarty_tpl->tpl_vars['suffix'] = new Smarty_variable('.min', null, 0);
}
echo smarty_function_script(array('src'=>"js/addons/ab__fast_navigation/ab__fn_customer".((string)$_smarty_tpl->tpl_vars['suffix']->value).".js"),$_smarty_tpl);
}?><?php }} ?>

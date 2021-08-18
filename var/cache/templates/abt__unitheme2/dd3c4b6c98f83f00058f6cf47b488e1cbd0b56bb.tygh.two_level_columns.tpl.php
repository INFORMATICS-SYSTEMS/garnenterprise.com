<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:15
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/menu/components/vertical/two_level_columns.tpl" */ ?>
<?php /*%%SmartyHeaderCode:618239567610e2f07353774-34238101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd3c4b6c98f83f00058f6cf47b488e1cbd0b56bb' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/menu/components/vertical/two_level_columns.tpl',
      1 => 1627896562,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '618239567610e2f07353774-34238101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'childs' => 0,
    'item1' => 0,
    'item2' => 0,
    'block' => 0,
    'settings' => 0,
    'col_width' => 0,
    'item_url2' => 0,
    'name' => 0,
    'item1_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f073898b5_08265075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f073898b5_08265075')) {function content_610e2f073898b5_08265075($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_topmenu_more','text_topmenu_more'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["item2"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item2"]->key => $_smarty_tpl->tpl_vars["item2"]->value) {
$_smarty_tpl->tpl_vars["item2"]->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars["item_url2"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
    <div class="ty-menu__submenu-item<?php if ($_smarty_tpl->tpl_vars['item2']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-active<?php }?>" <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?>style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col_width']->value, ENT_QUOTES, 'UTF-8');?>
%"<?php }?>>
        <a class="ty-menu__submenu-link<?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon']) {?> item-icon<?php }
if ($_smarty_tpl->tpl_vars['item2']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['class'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item_url2']->value)===null||$tmp==='' ? "javascript:void(0)" : $tmp), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__status']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon']&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!='mobile') {
echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'no_ids'=>true), 0);
}?>
            <bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__status']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
; <?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background']=='#ffffff') {?>border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></bdi>
        </a>
    </div>
<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']==smarty_modifier_enum("YesNo::YES")&&trim($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'])&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?>
    <div class="ut2-mwi-html <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');?>
 hidden-phone"><?php echo $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'];?>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more']&&$_smarty_tpl->tpl_vars['item1_url']->value) {?>
    <div class="ty-menu__submenu-alt-link"><a class="ty-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
" title=""><?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value]));?>
</a></div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/menu/components/vertical/two_level_columns.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/menu/components/vertical/two_level_columns.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["item2"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item2"]->key => $_smarty_tpl->tpl_vars["item2"]->value) {
$_smarty_tpl->tpl_vars["item2"]->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars["item_url2"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?>
    <div class="ty-menu__submenu-item<?php if ($_smarty_tpl->tpl_vars['item2']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-active<?php }?>" <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?>style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col_width']->value, ENT_QUOTES, 'UTF-8');?>
%"<?php }?>>
        <a class="ty-menu__submenu-link<?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon']) {?> item-icon<?php }
if ($_smarty_tpl->tpl_vars['item2']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['class'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item_url2']->value)===null||$tmp==='' ? "javascript:void(0)" : $tmp), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__status']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon']&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!='mobile') {
echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'],'class'=>"ut2-mwi-icon",'no_ids'=>true), 0);
}?>
            <bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__status']==smarty_modifier_enum("YesNo::YES")&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
; <?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background']=='#ffffff') {?>border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');
} else { ?>border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></bdi>
        </a>
    </div>
<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']==smarty_modifier_enum("YesNo::YES")&&trim($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'])&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?>
    <div class="ut2-mwi-html <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');?>
 hidden-phone"><?php echo $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'];?>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more']&&$_smarty_tpl->tpl_vars['item1_url']->value) {?>
    <div class="ty-menu__submenu-alt-link"><a class="ty-btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
" title=""><?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value]));?>
</a></div>
<?php }
}?><?php }} ?>

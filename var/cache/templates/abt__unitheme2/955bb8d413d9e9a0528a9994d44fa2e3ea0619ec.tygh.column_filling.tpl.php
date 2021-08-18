<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:14
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/menu/components/vertical/column_filling.tpl" */ ?>
<?php /*%%SmartyHeaderCode:864704498610e2f06b8f7d7-87143728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '955bb8d413d9e9a0528a9994d44fa2e3ea0619ec' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/blocks/menu/components/vertical/column_filling.tpl',
      1 => 1627896562,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '864704498610e2f06b8f7d7-87143728',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'childs' => 0,
    'item1' => 0,
    'settings_cols' => 0,
    'settings' => 0,
    'block' => 0,
    'dropdown_class' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f06bbc001_91372599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f06bbc001_91372599')) {function content_610e2f06bbc001_91372599($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php if (!fn_check_second_level_child_array($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value],$_smarty_tpl->tpl_vars['childs']->value)) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_2levels_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="ty-menu__submenu-items ty-menu__submenu-items-simple cm-responsive-menu-submenu<?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position']!="bottom") {?> with-pic<?php }?>" data-cols-count="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings_cols']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?>style="min-height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_menu_min_height'], ENT_QUOTES, 'UTF-8');?>
px"<?php }?>>
            <?php echo $_smarty_tpl->getSubTemplate ("blocks/menu/components/vertical/two_level_columns.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_cols")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="ty-menu__submenu-items cm-responsive-menu-submenu<?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']==smarty_modifier_enum("YesNo::YES")) {?> tree-level-dropdown<?php } else { ?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_class']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position']!="bottom") {?> with-pic<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_icon_items']==smarty_modifier_enum("YesNo::YES")) {?> with-icon-items<?php }?> clearfix" <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?>style="min-height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_menu_min_height'], ENT_QUOTES, 'UTF-8');?>
px"<?php }?>>
            <div<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?> style="min-height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_menu_min_height'], ENT_QUOTES, 'UTF-8');?>
px"<?php }?>>
                <?php echo $_smarty_tpl->getSubTemplate ("blocks/menu/components/vertical/three_level_columns.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/menu/components/vertical/column_filling.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/menu/components/vertical/column_filling.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php if (!fn_check_second_level_child_array($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value],$_smarty_tpl->tpl_vars['childs']->value)) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_2levels_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="ty-menu__submenu-items ty-menu__submenu-items-simple cm-responsive-menu-submenu<?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position']!="bottom") {?> with-pic<?php }?>" data-cols-count="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings_cols']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?>style="min-height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_menu_min_height'], ENT_QUOTES, 'UTF-8');?>
px"<?php }?>>
            <?php echo $_smarty_tpl->getSubTemplate ("blocks/menu/components/vertical/two_level_columns.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_cols")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="ty-menu__submenu-items cm-responsive-menu-submenu<?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']==smarty_modifier_enum("YesNo::YES")) {?> tree-level-dropdown<?php } else { ?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_class']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position']!="bottom") {?> with-pic<?php }
if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_icon_items']==smarty_modifier_enum("YesNo::YES")) {?> with-icon-items<?php }?> clearfix" <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?>style="min-height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_menu_min_height'], ENT_QUOTES, 'UTF-8');?>
px"<?php }?>>
            <div<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?> style="min-height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_menu_min_height'], ENT_QUOTES, 'UTF-8');?>
px"<?php }?>>
                <?php echo $_smarty_tpl->getSubTemplate ("blocks/menu/components/vertical/three_level_columns.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }
}?><?php }} ?>

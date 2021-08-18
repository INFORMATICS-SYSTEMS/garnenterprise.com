<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:14:28
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/ab__motivation_block/blocks/ab__motivation_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:641780211610e32d4a0ff03-18972468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90afe4cb2670cc94b6eed9f5e00f6fa35ecd69c7' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/ab__motivation_block/blocks/ab__motivation_block.tpl',
      1 => 1627896034,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '641780211610e32d4a0ff03-18972468',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'ab__motivation_items' => 0,
    'ab__mb_id' => 0,
    'block' => 0,
    'product' => 0,
    'addons' => 0,
    'id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e32d4a2d857_78982039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e32d4a2d857_78982039')) {function content_610e32d4a2d857_78982039($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['ab__motivation_items']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__motivation_block:block")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__motivation_block:block"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['ab__mb_id']->value)===null||$tmp==='' ? "ab__mb_id_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']) : $tmp), null, 0);?>
    <div class="ab__motivation_block ab__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['template_variant'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['ab__motivation_items']->value) {?> loaded<?php }?>" data-ca-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="ab__mb_items <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['appearance_type_styles'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['bg_color']!="#ffffff") {?> colored<?php }
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?> ab-mb-live-editor<?php }?>"<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['bg_color']!="#ffffff") {?> style="border-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['bg_color'], ENT_QUOTES, 'UTF-8');?>
;"<?php }?>>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__motivation_block/blocks/components/".((string)$_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['template_variant']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__motivation_block:block"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__motivation_block/blocks/ab__motivation_block.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__motivation_block/blocks/ab__motivation_block.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['ab__motivation_items']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__motivation_block:block")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__motivation_block:block"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['ab__mb_id']->value)===null||$tmp==='' ? "ab__mb_id_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']) : $tmp), null, 0);?>
    <div class="ab__motivation_block ab__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['template_variant'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['ab__motivation_items']->value) {?> loaded<?php }?>" data-ca-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="ab__mb_items <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['appearance_type_styles'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['bg_color']!="#ffffff") {?> colored<?php }
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?> ab-mb-live-editor<?php }?>"<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['bg_color']!="#ffffff") {?> style="border-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['bg_color'], ENT_QUOTES, 'UTF-8');?>
;"<?php }?>>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/ab__motivation_block/blocks/components/".((string)$_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['template_variant']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    </div>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__motivation_block:block"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }
}?><?php }} ?>

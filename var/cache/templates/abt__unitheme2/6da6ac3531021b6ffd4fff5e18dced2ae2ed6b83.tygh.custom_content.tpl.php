<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:14:29
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/ab__motivation_block/blocks/components/item_templates/custom_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:276268741610e32d50f0231-77339088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6da6ac3531021b6ffd4fff5e18dced2ae2ed6b83' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/ab__motivation_block/blocks/components/item_templates/custom_content.tpl',
      1 => 1627896034,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '276268741610e32d50f0231-77339088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'ab__mb_item' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e32d51005d0_88848524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e32d51005d0_88848524')) {function content_610e32d51005d0_88848524($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_eval_string')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.eval_string.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-wysiwyg-content<?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp7=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['use_style_presets']==$_tmp7) {?> ab-mb-style-presets<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['description_type']=='smarty') {?>
        <?php echo smarty_function_eval_string(array('var'=>$_smarty_tpl->tpl_vars['ab__mb_item']->value['description']),$_smarty_tpl);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['ab__mb_item']->value['description'];?>

    <?php }?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__motivation_block/blocks/components/item_templates/custom_content.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__motivation_block/blocks/components/item_templates/custom_content.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-wysiwyg-content<?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp8=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['use_style_presets']==$_tmp8) {?> ab-mb-style-presets<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['description_type']=='smarty') {?>
        <?php echo smarty_function_eval_string(array('var'=>$_smarty_tpl->tpl_vars['ab__mb_item']->value['description']),$_smarty_tpl);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['ab__mb_item']->value['description'];?>

    <?php }?>
</div><?php }?><?php }} ?>

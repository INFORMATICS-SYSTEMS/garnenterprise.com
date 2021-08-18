<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:11:03
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/block_manager/settings.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1161146592610e32074db064-50239869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b86a0ef59968f81e07b1797943bd9036d8401122' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/abt__unitheme2/hooks/block_manager/settings.pre.tpl',
      1 => 1627895930,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1161146592610e32074db064-50239869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'elm_id' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e32074e0f29_91594109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e32074e0f29_91594109')) {function content_610e32074e0f29_91594109($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('block_manager.availability.show_on','block_manager.availability.phone','block_manager.availability.tablet','block_manager.availability.desktop'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name']=='abt__unitheme2') {?>
<div id="abt__ut2_block_settings_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<div class="abt-ut2-doc"><?php ob_start();
echo $_smarty_tpl->__("block_manager.availability.show_on");
$_tmp1=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("block_manager.availability.phone");
$_tmp2=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("block_manager.availability.tablet");
$_tmp3=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("block_manager.availability.desktop");
$_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->__('abt__ut2.block.availability.show_on',array('[show_on]'=>$_tmp1.": ".$_tmp2."/".$_tmp3."/".$_tmp4));?>
</div>
<input type="hidden" name="block_data[properties][abt__ut2_demo_block_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_demo_block_id'], ENT_QUOTES, 'UTF-8');?>
" />
</div>
<?php }?><?php }} ?>

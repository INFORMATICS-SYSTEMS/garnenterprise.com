<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:31:16
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/addons/components/manage/manage_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10905091126113fb546604e5-19290542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a28142a7f1963daca4ac62e4a07af7e910eb9b4' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/addons/components/manage/manage_buttons.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10905091126113fb546604e5-19290542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fb5466d5f6_63778140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fb5466d5f6_63778140')) {function content_6113fb5466d5f6_63778140($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('upload_addon','upload_addon','manual_installation','tools_addons_disable_all','tools_addons_disable_third_party'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons:action_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons:action_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!defined("RESTRICTED_ADMIN")) {?>
            <li>
                <?php ob_start();?><?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/upload_addon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php $_tmp20=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"upload_addon",'text'=>$_smarty_tpl->__("upload_addon"),'title'=>$_smarty_tpl->__("upload_addon"),'content'=>($_tmp20),'act'=>"edit",'link_class'=>"cm-dialog-auto-size",'link_text'=>$_smarty_tpl->__("manual_installation")), 0);?>

            </li>
        <?php }?>
        <li>
            <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'method'=>"POST",'text'=>$_smarty_tpl->__("tools_addons_disable_all"),'href'=>"addons.tools?init_addons=none"));?>

        </li>
        <li>
            <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'method'=>"POST",'text'=>$_smarty_tpl->__("tools_addons_disable_third_party"),'href'=>"addons.tools?init_addons=core"));?>

        </li>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons:action_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2021-08-13 22:08:55
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/store_locator/addons/geo_maps/hooks/store_locator/select_coordinates.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16434602466116c3474563c4-15020844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd53a860bc6142a71859abc45b7a42e15675b5d20' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/store_locator/addons/geo_maps/hooks/store_locator/select_coordinates.post.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16434602466116c3474563c4-15020844',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6116c347458ae6_31478665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6116c347458ae6_31478665')) {function content_6116c347458ae6_31478665($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('select'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("select"),'but_target_id'=>"map_picker",'but_role'=>"action",'but_meta'=>"btn-primary cm-dialog-opener cm-hide-with-inputs",'but_id'=>"store_locator_picker_opener"), 0);?>
<?php }} ?>

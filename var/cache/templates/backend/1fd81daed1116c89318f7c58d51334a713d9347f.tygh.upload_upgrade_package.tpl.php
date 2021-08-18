<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:49:34
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/upgrade_center/components/upload_upgrade_package.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14048168286113ff9e854704-93593627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fd81daed1116c89318f7c58d51334a713d9347f' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/upgrade_center/components/upload_upgrade_package.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14048168286113ff9e854704-93593627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images_dir' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113ff9e859927_36181692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113ff9e859927_36181692')) {function content_6113ff9e859927_36181692($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('install_upgrade_package_text','upload'));
?>
<div id="upload_upgrade_package_container" class="install-addon">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="upgrade_package_upload_form" class="form-horizontal" enctype="multipart/form-data">
        <div class="install-addon-wrapper">
            <img class="install-addon-banner" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addon_box.png" width="151px" height="141px" />
            
            <p class="install-addon-text"><?php echo $_smarty_tpl->__("install_upgrade_package_text",array('[exts]'=>implode(',',$_smarty_tpl->tpl_vars['config']->value['allowed_pack_exts'])));?>
</p>
            <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"upgrade_pack[0]"), 0);?>

        </div>

        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[upgrade_center.upload]",'cancel_action'=>"close",'but_text'=>$_smarty_tpl->__("upload")), 0);?>

        </div>
    </form>
<!--upload_upgrade_package_container--></div>
<?php }} ?>

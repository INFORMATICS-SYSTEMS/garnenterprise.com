<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:22
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/ab__image_previewers/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1108866594610e2f0e480451-87852635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ef48bde05b357f6bd8aa50f0f81f96a8ec99814' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/ab__image_previewers/hooks/index/scripts.post.tpl',
      1 => 1627896335,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1108866594610e2f0e480451-87852635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f0e491584_86152686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f0e491584_86152686')) {function content_610e2f0e491584_86152686($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo '<script'; ?>
>
(function(_, $) {
    $.extend(_, {
        ab__ip_ps_settings: {
            display_zoom: <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__image_previewers']['ps_display_zoom']=="Y") {?> true <?php } else { ?> false <?php }?>,
            display_fullscreen: <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__image_previewers']['ps_display_fullscreen']=="Y") {?> true <?php } else { ?> false <?php }?>,
            close_with_gesture: <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__image_previewers']['ps_close_with_gesture']=="Y") {?> true <?php } else { ?> false <?php }?>
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__image_previewers/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__image_previewers/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><?php echo '<script'; ?>
>
(function(_, $) {
    $.extend(_, {
        ab__ip_ps_settings: {
            display_zoom: <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__image_previewers']['ps_display_zoom']=="Y") {?> true <?php } else { ?> false <?php }?>,
            display_fullscreen: <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__image_previewers']['ps_display_fullscreen']=="Y") {?> true <?php } else { ?> false <?php }?>,
            close_with_gesture: <?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__image_previewers']['ps_close_with_gesture']=="Y") {?> true <?php } else { ?> false <?php }?>
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php }?><?php }} ?>

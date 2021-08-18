<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:36:56
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/buttons/clone_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15580868736113fca88cf434-76853756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f385087d175c0e23723f4597623626416998dcca' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/buttons/clone_delete.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15580868736113fca88cf434-76853756',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href_clone' => 0,
    'href_delete' => 0,
    'id' => 0,
    'no_confirm' => 0,
    'microformats' => 0,
    'delete_target_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fca88dbf54_59927867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fca88dbf54_59927867')) {function content_6113fca88dbf54_59927867($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('remove','remove','remove'));
?>
<?php if ($_smarty_tpl->tpl_vars['href_clone']->value) {?>
    <a class="btn clone-item"
       title="<?php echo $_smarty_tpl->__("remove");?>
"
       href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href_clone']->value), ENT_QUOTES, 'UTF-8');?>
"
    >
        <i class="icon-trash"></i>
    </a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['href_delete']->value) {?>
    <a <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="rm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
       class="btn delete-item <?php if (!$_smarty_tpl->tpl_vars['no_confirm']->value) {?>cm-confirm<?php }
if ($_smarty_tpl->tpl_vars['microformats']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['microformats']->value, ENT_QUOTES, 'UTF-8');
}?>"
       title="<?php echo $_smarty_tpl->__("remove");?>
"
       <?php if ($_smarty_tpl->tpl_vars['href_delete']->value) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href_delete']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
       <?php if ($_smarty_tpl->tpl_vars['delete_target_id']->value) {?>data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delete_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    >
        <i class="icon-trash"></i>
    </a>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['href_delete']->value&&!$_smarty_tpl->tpl_vars['href_clone']->value) {?>
    <button type="button"
            class="btn delete-item <?php if (!$_smarty_tpl->tpl_vars['no_confirm']->value) {?>cm-confirm<?php }
if ($_smarty_tpl->tpl_vars['microformats']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['microformats']->value, ENT_QUOTES, 'UTF-8');
}?>"
            title="<?php echo $_smarty_tpl->__("remove");?>
"
            <?php if ($_smarty_tpl->tpl_vars['delete_target_id']->value) {?>data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delete_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    >
        <i class="icon-trash"></i>
    </button>
<?php }?>
<?php }} ?>

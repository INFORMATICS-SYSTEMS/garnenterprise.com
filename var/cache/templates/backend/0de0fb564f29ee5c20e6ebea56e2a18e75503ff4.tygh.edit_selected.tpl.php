<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:05:24
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/products/components/context_menu/edit_selected.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9782684726113d92427a422-16583473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0de0fb564f29ee5c20e6ebea56e2a18e75503ff4' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/products/components/context_menu/edit_selected.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9782684726113d92427a422-16583473',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d92427d2f3_64391741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d92427d2f3_64391741')) {function content_6113d92427d2f3_64391741($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit_selected'));
?>


<li class="btn bulk-edit__btn bulk-edit__btn--edit-products mobile-hide">
    <span class="bulk-edit__btn-content">
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'class'=>"cm-process-items",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>$_smarty_tpl->tpl_vars['params']->value['form']));?>

    </span>
</li>
<?php }} ?>

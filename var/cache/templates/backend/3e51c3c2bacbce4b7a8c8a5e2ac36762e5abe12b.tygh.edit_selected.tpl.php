<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:43:14
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/categories/components/context_menu/edit_selected.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1506012137610e3992df9c06-75424712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e51c3c2bacbce4b7a8c8a5e2ac36762e5abe12b' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/categories/components/context_menu/edit_selected.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1506012137610e3992df9c06-75424712',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3992dfc6a9_49187659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3992dfc6a9_49187659')) {function content_610e3992dfc6a9_49187659($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit_selected'));
?>


<li class="btn bulk-edit__btn bulk-edit__btn--edit-categories mobile-hide">
    <span class="bulk-edit__btn-content">
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'class'=>"cm-process-items",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>"category_tree_form"));?>

    </span>
</li>
<?php }} ?>

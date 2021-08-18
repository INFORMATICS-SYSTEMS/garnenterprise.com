<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:06:09
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_terms/hooks/companies/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20109427266113d9518751d1-07150428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dfa83dbf779d3f6cd98c771c75a7dadcebac54f' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/vendor_terms/hooks/companies/tabs_content.post.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20109427266113d9518751d1-07150428',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d951878875_43354676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d951878875_43354676')) {function content_6113d951878875_43354676($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_terms.terms_and_conditions','vendor_terms.terms_and_conditions_tooltip'));
?>

<?php if (fn_allowed_for("MULTIVENDOR")) {?>
<div id="content_terms_and_conditions" class="hidden">
    <div class="control-group">
        <label class="control-label" for="elm_company_terms"><?php echo $_smarty_tpl->__("vendor_terms.terms_and_conditions");?>
:</label>
        <div class="controls">
            <textarea id="elm_company_terms" name="company_data[terms]" cols="55" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['terms'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            <p class="muted description"><?php echo $_smarty_tpl->__("vendor_terms.terms_and_conditions_tooltip");?>
</p>
        </div>
    </div>
</div>
<?php }?>
<?php }} ?>

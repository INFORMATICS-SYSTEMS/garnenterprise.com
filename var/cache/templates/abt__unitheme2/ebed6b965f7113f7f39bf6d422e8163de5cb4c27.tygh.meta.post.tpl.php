<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:11
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/seo/hooks/index/meta.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:842854558610e2f038bb0e0-86937849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebed6b965f7113f7f39bf6d422e8163de5cb4c27' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/seo/hooks/index/meta.post.tpl',
      1 => 1627896589,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '842854558610e2f038bb0e0-86937849',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'seo_canonical' => 0,
    'seo_alt_hreflangs_list' => 0,
    'seo_alt_lang' => 0,
    'seo_alt_lang_code' => 0,
    'schema_org_markup_items' => 0,
    'markup_item' => 0,
    'pretty_print' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f038dc4c0_69238112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f038dc4c0_69238112')) {function content_610e2f038dc4c0_69238112($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:ab__so_noindex")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:ab__so_noindex"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if (!fn_seo_is_indexed_page($_REQUEST)) {?>
    <meta name="robots" content="noindex" />
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['current']) {?>
        <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['current'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['prev']) {?>
        <link rel="prev" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['prev'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['next']) {?>
        <link rel="next" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['next'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:ab__so_noindex"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php  $_smarty_tpl->tpl_vars['seo_alt_lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['seo_alt_lang']->_loop = false;
 $_smarty_tpl->tpl_vars['seo_alt_lang_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['seo_alt_hreflangs_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['seo_alt_lang']->key => $_smarty_tpl->tpl_vars['seo_alt_lang']->value) {
$_smarty_tpl->tpl_vars['seo_alt_lang']->_loop = true;
 $_smarty_tpl->tpl_vars['seo_alt_lang_code']->value = $_smarty_tpl->tpl_vars['seo_alt_lang']->key;
?>
    <link title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['name'], ENT_QUOTES, 'UTF-8');?>
" dir="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['direction'], ENT_QUOTES, 'UTF-8');?>
" type="text/html" rel="alternate" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang_code']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['href'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['markup_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['markup_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['schema_org_markup_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['markup_item']->key => $_smarty_tpl->tpl_vars['markup_item']->value) {
$_smarty_tpl->tpl_vars['markup_item']->_loop = true;
?>
    <?php echo '<script'; ?>
 type="application/ld+json">
        <?php $_smarty_tpl->tpl_vars['pretty_print'] = new Smarty_variable(0, null, 0);?>
        <?php if (defined("DEVELOPMENT")&&(defined('DEVELOPMENT') ? constant('DEVELOPMENT') : null)) {?>
            <?php $_smarty_tpl->tpl_vars['pretty_print'] = new Smarty_variable(constant("JSON_PRETTY_PRINT"), null, 0);?>
        <?php }?>
        <?php echo json_encode($_smarty_tpl->tpl_vars['markup_item']->value,$_smarty_tpl->tpl_vars['pretty_print']->value);?>

    <?php echo '</script'; ?>
>
    <?php $_smarty_tpl->tpl_vars['is_json_schema_org_markup_displayed'] = new Smarty_variable(true, null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['is_json_schema_org_markup_displayed'] = clone $_smarty_tpl->tpl_vars['is_json_schema_org_markup_displayed']; $_ptr = $_ptr->parent; }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/seo/hooks/index/meta.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/seo/hooks/index/meta.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:ab__so_noindex")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:ab__so_noindex"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if (!fn_seo_is_indexed_page($_REQUEST)) {?>
    <meta name="robots" content="noindex" />
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['current']) {?>
        <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['current'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['prev']) {?>
        <link rel="prev" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['prev'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['seo_canonical']->value['next']) {?>
        <link rel="next" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_canonical']->value['next'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:ab__so_noindex"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php  $_smarty_tpl->tpl_vars['seo_alt_lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['seo_alt_lang']->_loop = false;
 $_smarty_tpl->tpl_vars['seo_alt_lang_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['seo_alt_hreflangs_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['seo_alt_lang']->key => $_smarty_tpl->tpl_vars['seo_alt_lang']->value) {
$_smarty_tpl->tpl_vars['seo_alt_lang']->_loop = true;
 $_smarty_tpl->tpl_vars['seo_alt_lang_code']->value = $_smarty_tpl->tpl_vars['seo_alt_lang']->key;
?>
    <link title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['name'], ENT_QUOTES, 'UTF-8');?>
" dir="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['direction'], ENT_QUOTES, 'UTF-8');?>
" type="text/html" rel="alternate" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang_code']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_alt_lang']->value['href'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['markup_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['markup_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['schema_org_markup_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['markup_item']->key => $_smarty_tpl->tpl_vars['markup_item']->value) {
$_smarty_tpl->tpl_vars['markup_item']->_loop = true;
?>
    <?php echo '<script'; ?>
 type="application/ld+json">
        <?php $_smarty_tpl->tpl_vars['pretty_print'] = new Smarty_variable(0, null, 0);?>
        <?php if (defined("DEVELOPMENT")&&(defined('DEVELOPMENT') ? constant('DEVELOPMENT') : null)) {?>
            <?php $_smarty_tpl->tpl_vars['pretty_print'] = new Smarty_variable(constant("JSON_PRETTY_PRINT"), null, 0);?>
        <?php }?>
        <?php echo json_encode($_smarty_tpl->tpl_vars['markup_item']->value,$_smarty_tpl->tpl_vars['pretty_print']->value);?>

    <?php echo '</script'; ?>
>
    <?php $_smarty_tpl->tpl_vars['is_json_schema_org_markup_displayed'] = new Smarty_variable(true, null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['is_json_schema_org_markup_displayed'] = clone $_smarty_tpl->tpl_vars['is_json_schema_org_markup_displayed']; $_ptr = $_ptr->parent; }?>
<?php }
}?><?php }} ?>

<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:47:31
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/ab__category_banners/components/category_banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:710783820610e3a930e8da4-70083279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2396cb6cecd9891e81b61801edce7abe102958a0' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/ab__category_banners/components/category_banner.tpl',
      1 => 1627896588,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '710783820610e3a930e8da4-70083279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'category_banner' => 0,
    'item_class' => 0,
    'layout' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3a93106217_70951605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3a93106217_70951605')) {function content_610e3a93106217_70951605($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['category_banner']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__category_banner:banner")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__category_banner:banner"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__category_banner:banner"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_class']->value, ENT_QUOTES, 'UTF-8');?>
 category-banner"<?php if ($_smarty_tpl->tpl_vars['layout']->value!='products_without_options') {?> style="height: <?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['abt__ut2_gl_item_height']-1, ENT_QUOTES, 'UTF-8');?>
px"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['category_banner']->value['url']) {?>
        <a<?php if ($_smarty_tpl->tpl_vars['category_banner']->value['target_blank']==="Y") {?> target="_blank"<?php }?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['category_banner']->value['url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['category_banner']->value['nofollow']==="Y") {?> rel="nofollow"<?php }?>>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['layout']->value=='products_multicolumns') {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['category_banner']->value['main_pair']), 0);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['layout']->value=='products_without_options') {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['category_banner']->value['list_pair']), 0);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['layout']->value=='short_list') {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['category_banner']->value['short_list_pair']), 0);?>

            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['category_banner']->value['url']) {?>
        </a>
        <?php }?>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__category_banners/components/category_banner.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__category_banners/components/category_banner.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['category_banner']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__category_banner:banner")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__category_banner:banner"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__category_banner:banner"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_class']->value, ENT_QUOTES, 'UTF-8');?>
 category-banner"<?php if ($_smarty_tpl->tpl_vars['layout']->value!='products_without_options') {?> style="height: <?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['abt__ut2_gl_item_height']-1, ENT_QUOTES, 'UTF-8');?>
px"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['category_banner']->value['url']) {?>
        <a<?php if ($_smarty_tpl->tpl_vars['category_banner']->value['target_blank']==="Y") {?> target="_blank"<?php }?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['category_banner']->value['url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['category_banner']->value['nofollow']==="Y") {?> rel="nofollow"<?php }?>>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['layout']->value=='products_multicolumns') {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['category_banner']->value['main_pair']), 0);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['layout']->value=='products_without_options') {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['category_banner']->value['list_pair']), 0);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['layout']->value=='short_list') {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['category_banner']->value['short_list_pair']), 0);?>

            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['category_banner']->value['url']) {?>
        </a>
        <?php }?>
    </div>
<?php }
}?><?php }} ?>

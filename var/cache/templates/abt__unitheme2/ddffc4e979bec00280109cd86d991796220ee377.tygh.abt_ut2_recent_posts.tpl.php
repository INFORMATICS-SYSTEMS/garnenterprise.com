<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:21
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/blog/blocks/abt_ut2_recent_posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1558544873610e2f0d496825-90700916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddffc4e979bec00280109cd86d991796220ee377' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/blog/blocks/abt_ut2_recent_posts.tpl',
      1 => 1627896588,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1558544873610e2f0d496825-90700916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'items' => 0,
    'page' => 0,
    'settings' => 0,
    'image_data' => 0,
    'data_backgroud_url' => 0,
    'background_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f0d4cc0b2_73143569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f0d4cc0b2_73143569')) {function content_610e2f0d4cc0b2_73143569($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.truncate.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.settings.general.blog_page_id.button','abt__ut2.settings.general.blog_page_id.button'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars["parent_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['content']['items']['parent_page_id'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
<?php $_smarty_tpl->tpl_vars["obj_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000", null, 0);?>

<div class="ut2-blog__recent-posts">
    <?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["page"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
 $_smarty_tpl->tpl_vars["page"]->index++;
 $_smarty_tpl->tpl_vars["page"]->first = $_smarty_tpl->tpl_vars["page"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["fp"]['first'] = $_smarty_tpl->tpl_vars["page"]->first;
?>
        <div class="ut2-blog__recent-posts--item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['fp']['first']) {?>first<?php }?>">
        	<a href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
" >

                    
                    <?php if ($_smarty_tpl->tpl_vars['page']->value['main_pair']) {?>

                        
                        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['fp']['first']) {?>
                            <?php $_smarty_tpl->tpl_vars['image_data'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['page']->value['main_pair'],550,366), null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['image_data'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['page']->value['main_pair'],268,179), null, 0);?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['lazy_load']===smarty_modifier_enum("YesNo::YES")) {?>
                            <?php $_smarty_tpl->tpl_vars['data_backgroud_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value['image_path'], null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['background_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value['image_path'], null, 0);?>
                        <?php }?>
                    <?php }?>

                <div class="ut2-blog__recent-posts--img cover <?php if (!$_smarty_tpl->tpl_vars['page']->value['main_pair']) {?>no-image<?php }?>"<?php if ($_smarty_tpl->tpl_vars['data_backgroud_url']->value) {?> data-background-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['background_url']->value) {?> style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['background_url']->value, ENT_QUOTES, 'UTF-8');?>
')"<?php }?>>
                    <div class="ut2-blog__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</div>
                </div>
                <div class="ut2-blog__recent-posts--title"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['page']->value['page'],70,"...",true), ENT_QUOTES, 'UTF-8');?>
</div>
            </a>
        </div>
    <?php } ?>
</div>
<?php if (intval($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['blog_page_id'])>0) {?>
	<div class="ty-left">
	    <?php ob_start();
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['blog_page_id']), ENT_QUOTES, 'UTF-8');
$_tmp52=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url("pages.view?page_id=".$_tmp52),'but_text'=>$_smarty_tpl->__("abt__ut2.settings.general.blog_page_id.button"),'but_icon'=>"ut2-icon-right",'but_meta'=>"ty-btn__primary ut2-blog__button"), 0);?>

	</div>
<?php }?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/blog/blocks/abt_ut2_recent_posts.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/blog/blocks/abt_ut2_recent_posts.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->tpl_vars["parent_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['content']['items']['parent_page_id'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
<?php $_smarty_tpl->tpl_vars["obj_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000", null, 0);?>

<div class="ut2-blog__recent-posts">
    <?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["page"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
 $_smarty_tpl->tpl_vars["page"]->index++;
 $_smarty_tpl->tpl_vars["page"]->first = $_smarty_tpl->tpl_vars["page"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["fp"]['first'] = $_smarty_tpl->tpl_vars["page"]->first;
?>
        <div class="ut2-blog__recent-posts--item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['fp']['first']) {?>first<?php }?>">
        	<a href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
" >

                    
                    <?php if ($_smarty_tpl->tpl_vars['page']->value['main_pair']) {?>

                        
                        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['fp']['first']) {?>
                            <?php $_smarty_tpl->tpl_vars['image_data'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['page']->value['main_pair'],550,366), null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['image_data'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['page']->value['main_pair'],268,179), null, 0);?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['lazy_load']===smarty_modifier_enum("YesNo::YES")) {?>
                            <?php $_smarty_tpl->tpl_vars['data_backgroud_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value['image_path'], null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['background_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value['image_path'], null, 0);?>
                        <?php }?>
                    <?php }?>

                <div class="ut2-blog__recent-posts--img cover <?php if (!$_smarty_tpl->tpl_vars['page']->value['main_pair']) {?>no-image<?php }?>"<?php if ($_smarty_tpl->tpl_vars['data_backgroud_url']->value) {?> data-background-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['background_url']->value) {?> style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['background_url']->value, ENT_QUOTES, 'UTF-8');?>
')"<?php }?>>
                    <div class="ut2-blog__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['page']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</div>
                </div>
                <div class="ut2-blog__recent-posts--title"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['page']->value['page'],70,"...",true), ENT_QUOTES, 'UTF-8');?>
</div>
            </a>
        </div>
    <?php } ?>
</div>
<?php if (intval($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['blog_page_id'])>0) {?>
	<div class="ty-left">
	    <?php ob_start();
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['blog_page_id']), ENT_QUOTES, 'UTF-8');
$_tmp53=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url("pages.view?page_id=".$_tmp53),'but_text'=>$_smarty_tpl->__("abt__ut2.settings.general.blog_page_id.button"),'but_icon'=>"ut2-icon-right",'but_meta'=>"ty-btn__primary ut2-blog__button"), 0);?>

	</div>
<?php }?>

<?php }
}?><?php }} ?>

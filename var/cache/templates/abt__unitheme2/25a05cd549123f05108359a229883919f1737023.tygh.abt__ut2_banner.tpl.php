<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 09:58:16
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1572914805610e2f08f14f81-25577304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25a05cd549123f05108359a229883919f1737023' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/abt__unitheme2/templates/addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl',
      1 => 1627896588,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1572914805610e2f08f14f81-25577304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'b' => 0,
    'settings' => 0,
    'background_url' => 0,
    'block' => 0,
    'data_backgroud_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e2f09059c31_32274003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e2f09059c31_32274003')) {function content_610e2f09059c31_32274003($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ut2-banner ut2-settings-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_device_settings'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_class'], ENT_QUOTES, 'UTF-8');?>
">

    
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['lazy_load']===smarty_modifier_enum("YesNo::YES")) {?>
        <?php $_smarty_tpl->tpl_vars['data_backgroud_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['image_path'], null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['background_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['image_path'], null, 0);?>
    <?php }?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"abt__ut2_banner:banner")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"abt__ut2_banner:banner"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"abt__ut2_banner:banner"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use']=='N'&&trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url'])) {?>
    <a <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object']=='video'&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id']) {?>data-content="video"<?php }?>
       href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_how_to_open']=='in_new_window') {?> target="_blank"<?php }?>>
        <?php }?>
        <div class="ut2-a__bg-banner<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color']=='#ffffff'&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color_use']==smarty_modifier_enum("YesNo::YES")) {?> white-bg<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_color_scheme'], ENT_QUOTES, 'UTF-8');?>
"
             style="<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color_use']=='Y') {?> background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image_size']) {?> background-size:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image_size'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['background_url']->value) {?> background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['background_url']->value, ENT_QUOTES, 'UTF-8');?>
');<?php }?>margin:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['margin'], ENT_QUOTES, 'UTF-8');?>
;height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['height'], ENT_QUOTES, 'UTF-8');?>
;"<?php if ($_smarty_tpl->tpl_vars['data_backgroud_url']->value) {?> data-background-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_backgroud_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>

            <div <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg']!="none"&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg']!="colored"&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_position']=="whole_banner") {?>style="background-color: <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg']=="colored") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_color'], ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg']=="transparent") {?>rgba(<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_color_scheme']=="dark") {?>0,0,0<?php } else { ?>255,255,255<?php }?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_opacity'], ENT_QUOTES, 'UTF-8');?>
%)<?php }?>"<?php }?> data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['banner_id'], ENT_QUOTES, 'UTF-8');?>
">
                <div class="ut2-a__content valign-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'], ENT_QUOTES, 'UTF-8');?>
 align-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_align'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['image_path']) {?> internal-image<?php }?>" style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['height'], ENT_QUOTES, 'UTF-8');?>
">
                    <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object']=='image'&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['image_path']) {?>
                        <div class="ut2-a__img width<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_full_width']==smarty_modifier_enum("YesNo::YES")) {?>-full<?php } else { ?>-half<?php }?>" style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['height'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']), 0);?>

                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object']=='video'&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id']) {?>
                        <div class="ut2-a__img ut2-a__video width<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_full_width']==smarty_modifier_enum("YesNo::YES")) {?>-full<?php } else { ?>-half<?php }?>" style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['height'], ENT_QUOTES, 'UTF-8');?>
;" data-banner-youtube-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id'], ENT_QUOTES, 'UTF-8');?>
" data-banner-youtube-params="<?php echo htmlspecialchars(fn_abt__ut2_build_youtube_link($_smarty_tpl->tpl_vars['b']->value,true), ENT_QUOTES, 'UTF-8');?>
&enablejsapi=1&version=3">
	                        <img data-type="youtube-img" <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['lazy_load']===smarty_modifier_enum("YesNo::YES")) {?>src="<?php echo htmlspecialchars((defined('ABT__UT2_LAZY_IMAGE') ? constant('ABT__UT2_LAZY_IMAGE') : null), ENT_QUOTES, 'UTF-8');?>
" data-<?php }?>src="https://img.youtube.com/vi/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id'], ENT_QUOTES, 'UTF-8');?>
/hqdefault.jpg" alt="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title']), ENT_QUOTES, 'UTF-8');?>
">
                        </div>
                    <?php }?>

                    <div class="ut2-a__description width<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_full_width']==smarty_modifier_enum("YesNo::YES")) {?>-full<?php } else { ?>-half<?php }?>">
                        <div class="box" style="<?php if (!empty($_smarty_tpl->tpl_vars['b']->value['abt__ut2_padding'])) {?>padding:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_padding'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg']!="none"&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_position']=="only_under_content"||$_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg']!="none"&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg']=="colored") {?>; background-color: <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg']=="colored") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_color'], ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg']=="transparent") {?>rgba(<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_color_scheme']=="dark") {?>0,0,0<?php } else { ?>255,255,255<?php }?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_opacity'], ENT_QUOTES, 'UTF-8');?>
%)<?php }
}?>">
                            <<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_tag'], ENT_QUOTES, 'UTF-8');?>
 class="ut2-a__title <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_shadow']==smarty_modifier_enum("YesNo::YES")) {?>shadow<?php }?>
                            weight-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_font_weight'], ENT_QUOTES, 'UTF-8');?>
" style="font-size: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_font_size'], ENT_QUOTES, 'UTF-8');?>

                            ;<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_color_use']=='Y') {?>color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>
                            "><?php echo $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title'];?>
</<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_tag'], ENT_QUOTES, 'UTF-8');?>
>
                        <div class="ut2-a__descr" style="
	                        <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_color_use']=='Y') {?>color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>
		                    <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color_use']=='Y') {?>background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color'], ENT_QUOTES, 'UTF-8');?>
;
			                <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color']) {?>position: relative;left: 5px;display: inline;padding: 3px 0 3px;box-shadow: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color'], ENT_QUOTES, 'UTF-8');?>
 -5px 0 0 0, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color'], ENT_QUOTES, 'UTF-8');?>
 5px 0 0 0;<?php }
}?>
					        <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_font_size']) {?>font-size: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_font_size'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>">
						    <?php echo $_smarty_tpl->tpl_vars['b']->value['abt__ut2_description'];?>

						</div>

						<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use']=='Y'&&trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url'])) {?>
			                <div class="ut2-a__button">
			                    <a class="ty-btn ty-btn__primary" style="<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color_use']=='Y') {?>color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color_use']=='Y') {?>background: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_how_to_open']=='in_new_window') {?> target="_blank"<?php }?>><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text'])===null||$tmp==='' ? "button" : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
			                </div>
		                <?php }?>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use']=='N'&&trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url'])) {?>
    </a>
<?php }?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ut2-banner ut2-settings-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_device_settings'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_class'], ENT_QUOTES, 'UTF-8');?>
">

    
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['lazy_load']===smarty_modifier_enum("YesNo::YES")) {?>
        <?php $_smarty_tpl->tpl_vars['data_backgroud_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['image_path'], null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['background_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['image_path'], null, 0);?>
    <?php }?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"abt__ut2_banner:banner")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"abt__ut2_banner:banner"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"abt__ut2_banner:banner"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use']=='N'&&trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url'])) {?>
    <a <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object']=='video'&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id']) {?>data-content="video"<?php }?>
       href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_how_to_open']=='in_new_window') {?> target="_blank"<?php }?>>
        <?php }?>
        <div class="ut2-a__bg-banner<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color']=='#ffffff'&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color_use']==smarty_modifier_enum("YesNo::YES")) {?> white-bg<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_color_scheme'], ENT_QUOTES, 'UTF-8');?>
"
             style="<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color_use']=='Y') {?> background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image_size']) {?> background-size:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image_size'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['background_url']->value) {?> background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['background_url']->value, ENT_QUOTES, 'UTF-8');?>
');<?php }?>margin:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['margin'], ENT_QUOTES, 'UTF-8');?>
;height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['height'], ENT_QUOTES, 'UTF-8');?>
;"<?php if ($_smarty_tpl->tpl_vars['data_backgroud_url']->value) {?> data-background-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_backgroud_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>

            <div <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg']!="none"&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg']!="colored"&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_position']=="whole_banner") {?>style="background-color: <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg']=="colored") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_color'], ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg']=="transparent") {?>rgba(<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_color_scheme']=="dark") {?>0,0,0<?php } else { ?>255,255,255<?php }?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_opacity'], ENT_QUOTES, 'UTF-8');?>
%)<?php }?>"<?php }?> data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['banner_id'], ENT_QUOTES, 'UTF-8');?>
">
                <div class="ut2-a__content valign-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'], ENT_QUOTES, 'UTF-8');?>
 align-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_align'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['image_path']) {?> internal-image<?php }?>" style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['height'], ENT_QUOTES, 'UTF-8');?>
">
                    <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object']=='image'&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['image_path']) {?>
                        <div class="ut2-a__img width<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_full_width']==smarty_modifier_enum("YesNo::YES")) {?>-full<?php } else { ?>-half<?php }?>" style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['height'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']), 0);?>

                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object']=='video'&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id']) {?>
                        <div class="ut2-a__img ut2-a__video width<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_full_width']==smarty_modifier_enum("YesNo::YES")) {?>-full<?php } else { ?>-half<?php }?>" style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['height'], ENT_QUOTES, 'UTF-8');?>
;" data-banner-youtube-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id'], ENT_QUOTES, 'UTF-8');?>
" data-banner-youtube-params="<?php echo htmlspecialchars(fn_abt__ut2_build_youtube_link($_smarty_tpl->tpl_vars['b']->value,true), ENT_QUOTES, 'UTF-8');?>
&enablejsapi=1&version=3">
	                        <img data-type="youtube-img" <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['lazy_load']===smarty_modifier_enum("YesNo::YES")) {?>src="<?php echo htmlspecialchars((defined('ABT__UT2_LAZY_IMAGE') ? constant('ABT__UT2_LAZY_IMAGE') : null), ENT_QUOTES, 'UTF-8');?>
" data-<?php }?>src="https://img.youtube.com/vi/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id'], ENT_QUOTES, 'UTF-8');?>
/hqdefault.jpg" alt="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title']), ENT_QUOTES, 'UTF-8');?>
">
                        </div>
                    <?php }?>

                    <div class="ut2-a__description width<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_full_width']==smarty_modifier_enum("YesNo::YES")) {?>-full<?php } else { ?>-half<?php }?>">
                        <div class="box" style="<?php if (!empty($_smarty_tpl->tpl_vars['b']->value['abt__ut2_padding'])) {?>padding:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_padding'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg']!="none"&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_position']=="only_under_content"||$_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg']!="none"&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg']=="colored") {?>; background-color: <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg']=="colored") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_color'], ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg']=="transparent") {?>rgba(<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_color_scheme']=="dark") {?>0,0,0<?php } else { ?>255,255,255<?php }?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg_opacity'], ENT_QUOTES, 'UTF-8');?>
%)<?php }
}?>">
                            <<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_tag'], ENT_QUOTES, 'UTF-8');?>
 class="ut2-a__title <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_shadow']==smarty_modifier_enum("YesNo::YES")) {?>shadow<?php }?>
                            weight-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_font_weight'], ENT_QUOTES, 'UTF-8');?>
" style="font-size: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_font_size'], ENT_QUOTES, 'UTF-8');?>

                            ;<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_color_use']=='Y') {?>color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>
                            "><?php echo $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title'];?>
</<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_tag'], ENT_QUOTES, 'UTF-8');?>
>
                        <div class="ut2-a__descr" style="
	                        <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_color_use']=='Y') {?>color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>
		                    <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color_use']=='Y') {?>background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color'], ENT_QUOTES, 'UTF-8');?>
;
			                <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color']) {?>position: relative;left: 5px;display: inline;padding: 3px 0 3px;box-shadow: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color'], ENT_QUOTES, 'UTF-8');?>
 -5px 0 0 0, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color'], ENT_QUOTES, 'UTF-8');?>
 5px 0 0 0;<?php }
}?>
					        <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_font_size']) {?>font-size: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_font_size'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>">
						    <?php echo $_smarty_tpl->tpl_vars['b']->value['abt__ut2_description'];?>

						</div>

						<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use']=='Y'&&trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url'])) {?>
			                <div class="ut2-a__button">
			                    <a class="ty-btn ty-btn__primary" style="<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color_use']=='Y') {?>color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color_use']=='Y') {?>background: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_how_to_open']=='in_new_window') {?> target="_blank"<?php }?>><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text'])===null||$tmp==='' ? "button" : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
			                </div>
		                <?php }?>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use']=='N'&&trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url'])) {?>
    </a>
<?php }?>
</div><?php }?><?php }} ?>

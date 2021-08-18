<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:05:32
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__video_gallery/hooks/products/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12954867776113d92c1b0225-22582141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d375fa2c7fd356514d56002e0ab0681669c082e' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/ab__video_gallery/hooks/products/tabs_content.post.tpl',
      1 => 1627896122,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12954867776113d92c1b0225-22582141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'no_hide_input_if_shared_product' => 0,
    '_key' => 0,
    'video' => 0,
    'new_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d92c1f07b1_79613325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d92c1f07b1_79613325')) {function content_6113d92c1f07b1_79613325($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_math')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/lib/vendor/smarty/smarty/libs/plugins/function.cycle.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__vg.added_by_addon','ab__vg.form.product_settings','ab__vg.form.replace_image','ab__vg.form.product_videos','expand_collapse_list','expand_collapse_list','ab__vg.form.pos','ab__vg.form.title','ab__vg.form.status','expand_collapse_list','expand_collapse_list','ab__vg.form.youtube_id','ab__vg.form.youtube_id.tooltip','ab__vg.form.icon_type','ab__vg.form.icon_type.snapshot','ab__vg.form.icon_type.icon','ab__vg.form.icon','ab__vg.form.description','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','ab__vg.form.youtube_id','ab__vg.form.youtube_id.tooltip','ab__vg.form.icon_type','ab__vg.form.icon_type.snapshot','ab__vg.form.icon_type.icon','ab__vg.form.icon','ab__vg.form.description'));
?>
<?php if (fn_check_view_permissions('ab__video_gallery.view')) {?>
<?php $_smarty_tpl->createLocalArrayVariable('product_data', null, 0);
$_smarty_tpl->tpl_vars['product_data']->value['ab__vg_videos'] = fn_ab__vg_get_videos($_smarty_tpl->tpl_vars['product_data']->value['product_id'],(defined('DESCR_SL') ? constant('DESCR_SL') : null));?>
<?php $_smarty_tpl->createLocalArrayVariable('product_data', null, 0);
$_smarty_tpl->tpl_vars['product_data']->value['settings'] = fn_ab__vg_get_setting($_smarty_tpl->tpl_vars['product_data']->value['product_id']);?>
<div class="hidden<?php if (!fn_check_view_permissions('ab__video_gallery.manage')) {?> cm-hide-inputs<?php }?>" id="content_ab__video_gallery">
<p class="muted"><?php echo $_smarty_tpl->__("ab__vg.added_by_addon");?>
</p>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("ab__vg.form.product_settings"),'target'=>"#ab__vg-product_settings"), 0);?>

<div id="ab__vg-product_settings" class="in collapse <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
<div class="control-group">
<label class="control-label" for="ab__vg__replace_image"><?php echo $_smarty_tpl->__("ab__vg.form.replace_image");?>
</label>
<div class="controls">
<input type="hidden" name="product_data[ab__vg_settings][replace_image]" value="N" />
<input type="checkbox" name="product_data[ab__vg_settings][replace_image]" id="ab__vg__replace_image" value="Y"<?php if ($_smarty_tpl->tpl_vars['product_data']->value['settings']['replace_image']=="Y") {?>checked="checked"<?php }?> />
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("ab__vg.form.product_videos"),'target'=>"#ab__vg-product_videos"), 0);?>

<div id="ab__vg-product_videos" class="in collapse">
<table class="table table-middle" width="100%">
<thead class="cm-first-sibling">
<tr>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__video_gallery:videos_list_head")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__video_gallery:videos_list_head"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<th width="2%">
<span id="on_video_extra" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combinations-video_extra hidden"><span class="exicon-expand"></span></span>
<span id="off_video_extra" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combinations-video_extra"><span class="exicon-collapse"></span></span>
</th>
<th width="5%"><?php echo $_smarty_tpl->__("ab__vg.form.pos");?>
</th>
<th width="50%"><?php echo $_smarty_tpl->__("ab__vg.form.title");?>
</th>
<th width="25%"><?php echo $_smarty_tpl->__("ab__vg.form.status");?>
</th>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__video_gallery:videos_list_head"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<th width="15%">&nbsp;</th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars["video"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["video"]->_loop = false;
 $_smarty_tpl->tpl_vars["_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_data']->value['ab__vg_videos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["video"]->key => $_smarty_tpl->tpl_vars["video"]->value) {
$_smarty_tpl->tpl_vars["video"]->_loop = true;
 $_smarty_tpl->tpl_vars["_key"]->value = $_smarty_tpl->tpl_vars["video"]->key;
?>
<tbody class="cm-row-item">
<tr>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__video_gallery:videos_list_body")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__video_gallery:videos_list_body"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<td width="2%">
<span id="on_ab__vg_video_extra_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand hidden cm-combination-video_extra"><span class="exicon-expand"></span></span>
<span id="off_ab__vg_video_extra_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combination-video_extra"><span class="exicon-collapse"></span></span>
</td>
<td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
][video_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_id'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="text" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
][pos]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['pos'], ENT_QUOTES, 'UTF-8');?>
" class="input-micro" />
</td>
<td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="text" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
][title]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['title'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
</td>
<td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('popup_additional_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['video']->value['video_id'],'status'=>$_smarty_tpl->tpl_vars['video']->value['status'],'hidden'=>false,'object_id_name'=>"video_id",'table'=>"ab__video_gallery"), 0);?>

</td>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__video_gallery:videos_list_body"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<td class="nowrap <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
 right">
<?php echo $_smarty_tpl->getSubTemplate ("buttons/clone_delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('microformats'=>"cm-delete-row",'no_confirm'=>true), 0);?>

</td>
</tr>
<tr class="cr-table-detail <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
" id="ab__vg_video_extra_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
">
<td colspan="6">
<div class="control-group">
<label class="control-label" for="ab__vg__youtube_id__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("ab__vg.form.youtube_id");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ab__vg.form.youtube_id.tooltip")), 0);?>
</label>
<div class="controls">
<input type="text" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
][youtube_id]" id="ab__vg__youtube_id__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['youtube_id'], ENT_QUOTES, 'UTF-8');?>
" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__vg__icon_type__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("ab__vg.form.icon_type");?>
</label>
<div class="controls">
<label class="radio inline" for="ab__vg__icon_type__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
__snapshot"><input type="radio" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
][icon_type]" id="ab__vg__icon_type__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
__snapshot" <?php if ($_smarty_tpl->tpl_vars['video']->value['icon_type']=='snapshot') {?>checked="checked"<?php }?> value="snapshot" /><?php echo $_smarty_tpl->__("ab__vg.form.icon_type.snapshot");?>
</label>
<label class="radio inline" for="ab__vg__icon_type__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
__icon"><input type="radio" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
][icon_type]" id="ab__vg__icon_type__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
__icon" <?php if ($_smarty_tpl->tpl_vars['video']->value['icon_type']=='icon') {?>checked="checked"<?php }?> value="icon" /><?php echo $_smarty_tpl->__("ab__vg.form.icon_type.icon");?>
</label>
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__vg__icon__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("ab__vg.form.icon");?>
</label>
<div class="controls">
<?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"video_icon",'image_object_type'=>"ab__vg_video",'image_key'=>$_smarty_tpl->tpl_vars['_key']->value,'image_pair'=>$_smarty_tpl->tpl_vars['video']->value['icon'],'no_detailed'=>true,'hide_titles'=>true), 0);?>

</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__vg__description__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("ab__vg.form.description");?>
</label>
<div class="controls">
<textarea id="ab__vg__description__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
][description]" cols="55" rows="8" class="cm-wysiwyg"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
</div>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__video_gallery:video_extended_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__video_gallery:video_extended_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__video_gallery:video_extended_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</td>
</tr>
</tbody>
<?php } ?>
<?php echo smarty_function_math(array('equation'=>"x+1",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['_key']->value)===null||$tmp==='' ? 0 : $tmp),'assign'=>"new_key"),$_smarty_tpl);?>

<tbody id="box_add_ab__vg_video">
<tr class="<?php echo smarty_function_cycle(array('values'=>"table-row , ",'reset'=>1),$_smarty_tpl);
echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"ab__video_gallery:videos_list_clone")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"ab__video_gallery:videos_list_clone"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<td width="2%">
<span id="on_ab__vg_video_extra_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand hidden cm-combination-video_extra"><span class="exicon-expand"></span></span>
<span id="off_ab__vg_video_extra_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combination-video_extra"><span class="exicon-collapse"></span></span>
</td>
<td>
<input type="hidden" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
][video_id]" value="" />
<input type="text" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
][pos]" value="" class="input-micro" />
</td>
<td><input type="text" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
][title]" value="" class="input-large" /></td>
<td>
<?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"product_data[ab__vg_videos][".((string)$_smarty_tpl->tpl_vars['new_key']->value)."][status]",'id'=>"ab__vg_status_".((string)$_smarty_tpl->tpl_vars['new_key']->value),'hidden'=>false,'display'=>"popup"), 0);?>

</td>
<td class="right">
<?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"add_ab__vg_video"), 0);?>

</td>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"ab__video_gallery:videos_list_clone"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</tr>
<tr class="cr-table-detail" id="ab__vg_video_extra_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
">
<td colspan="5">
<div class="control-group">
<label class="control-label" for="ab__vg__youtube_id__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("ab__vg.form.youtube_id");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ab__vg.form.youtube_id.tooltip")), 0);?>
</label>
<div class="controls">
<input type="text" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
][youtube_id]" id="ab__vg__youtube_id__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
" size="55" value="" />
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__vg__icon_type__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("ab__vg.form.icon_type");?>
</label>
<div class="controls">
<label class="radio inline" for="ab__vg__icon_type__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
__snapshot"><input type="radio" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
][icon_type]" id="ab__vg__icon_type__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
__snapshot" value="snapshot" /><?php echo $_smarty_tpl->__("ab__vg.form.icon_type.snapshot");?>
</label>
<label class="radio inline" for="ab__vg__icon_type__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
__icon"><input type="radio" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
][icon_type]" id="ab__vg__icon_type__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
__icon" value="icon" /><?php echo $_smarty_tpl->__("ab__vg.form.icon_type.icon");?>
</label>
</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__vg__icon__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("ab__vg.form.icon");?>
</label>
<div class="controls">
<?php echo $_smarty_tpl->getSubTemplate ("common/attach_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_name'=>"video_icon",'image_object_type'=>"ab__vg_video",'image_key'=>$_smarty_tpl->tpl_vars['new_key']->value,'image_pair'=>'','no_detailed'=>true,'hide_titles'=>true), 0);?>

</div>
</div>
<div class="control-group">
<label class="control-label" for="ab__vg__description__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("ab__vg.form.description");?>
</label>
<div class="controls">
<textarea id="ab__vg__description__<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
" name="product_data[ab__vg_videos][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_key']->value, ENT_QUOTES, 'UTF-8');?>
][description]" cols="55" rows="8" class="cm-wysiwyg"></textarea>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<?php }?><?php }} ?>

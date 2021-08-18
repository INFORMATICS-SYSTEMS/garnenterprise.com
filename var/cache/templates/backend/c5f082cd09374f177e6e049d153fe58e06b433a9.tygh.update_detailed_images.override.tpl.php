<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:36:55
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/update_detailed_images.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17445653856113fca73acdb3-59943833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5f082cd09374f177e6e049d153fe58e06b433a9' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/addons/master_products/hooks/products/update_detailed_images.override.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17445653856113fca73acdb3-59943833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'product_type' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fca73b5b03_65410302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fca73b5b03_65410302')) {function content_6113fca73b5b03_65410302($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('images'));
?>
<?php if (($_smarty_tpl->tpl_vars['product_data']->value['master_product_id']&&!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("detailed_image"))||($_smarty_tpl->tpl_vars['product_data']->value&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&isset($_smarty_tpl->tpl_vars['product_data']->value['company_id'])&&$_smarty_tpl->tpl_vars['product_data']->value['company_id']==0)) {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("images");?>
:</label>
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("common/form_file_uploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('existing_pairs'=>($_smarty_tpl->tpl_vars['product_data']->value['main_pair'] ? array($_smarty_tpl->tpl_vars['product_data']->value['main_pair']) : array())+(($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['image_pairs'])===null||$tmp==='' ? array() : $tmp),'file_name'=>"file",'image_pair_types'=>array('N'=>'product_add_additional_image','M'=>'product_main_image','A'=>'product_additional_image'),'allow_update_files'=>false), 0);?>

        </div>
    </div>
<?php }?>
<?php }} ?>

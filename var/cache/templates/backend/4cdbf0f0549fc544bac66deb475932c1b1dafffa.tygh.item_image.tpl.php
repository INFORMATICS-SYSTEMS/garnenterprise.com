<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 17:05:31
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/product_features/components/variants_picker/item_image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18921329256113d92beb5775-97584079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cdbf0f0549fc544bac66deb475932c1b1dafffa' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/product_features/components/variants_picker/item_image.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18921329256113d92beb5775-97584079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'enable_image' => 0,
    'title_pre' => 0,
    'title_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113d92beb7fa7_87884463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113d92beb7fa7_87884463')) {function content_6113d92beb7fa7_87884463($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['enable_image']->value) {?>
    
        ${data.image_url
        ? `<img src="${data.image_url}" width="30" height="30" alt="${data.name}" class="object-picker__product-feature-image"/>`
            : `<div class="no-image object-picker__product-feature-no-image" style="width: 30px; height: 30px;"><i class="glyph-image"></i></div>`
        }
    
<?php }?>
<div class="object-picker__product-feature-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.name} <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div><?php }} ?>

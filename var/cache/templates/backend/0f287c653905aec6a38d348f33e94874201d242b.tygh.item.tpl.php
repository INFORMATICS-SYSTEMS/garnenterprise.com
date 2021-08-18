<?php /* Smarty version Smarty-3.1.21, created on 2021-08-07 10:52:38
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/categories/components/picker/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1351408012610e3bc6f09329-81577734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f287c653905aec6a38d348f33e94874201d242b' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/backend/templates/views/categories/components/picker/item.tpl',
      1 => 1625815563,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1351408012610e3bc6f09329-81577734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'title_pre' => 0,
    'has_selection_controls' => 0,
    'categories_picker_item_class' => 0,
    'runtime' => 0,
    'title_post' => 0,
    'icon' => 0,
    'help' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_610e3bc6f171d7_46084399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610e3bc6f171d7_46084399')) {function content_610e3bc6f171d7_46084399($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('enter_category_name_and_path'));
?>
<div class="object-picker__categories-main">
    <?php if ($_smarty_tpl->tpl_vars['type']->value==="result"||$_smarty_tpl->tpl_vars['type']->value==="selection"||$_smarty_tpl->tpl_vars['type']->value==="selection_external") {?>
        <div class="object-picker__categories-main-content">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 
                <?php if ($_smarty_tpl->tpl_vars['has_selection_controls']->value) {?>
                    <input class="select2__category-status-checkbox cm-tristate tristate-checkbox-cursor <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categories_picker_item_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                        type="checkbox"
                        data-ca-category-id="${data.id}"
                        data-ca-tristate-process="false"
                        data-ca-tristate-just-click=""
                        data-checked=""
                    />
                <?php }?>
                <span class="select2-selection__choice__handler"></span>
                <div class="select2__category-name">
                    <?php if ($_smarty_tpl->tpl_vars['type']->value==="selection_external") {?>
                        <a href="${data.url}">${data.name}</a>                        
                    <?php } else { ?>
                        ${data.name}
                    <?php }?>
                </div>
                <div class="select2__category-parents">
                    ${data.parents_path ? data.parents_path : ``}
                </div>
                
                <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
                    
                        ${data.company 
                        ? `<div class="select2__category-company">${data.company}</div>`
                            : ``
                        }
                    
                <?php }?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==="load") {?>
        ...
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==="new_item") {?>
        <div class="object-picker__results-label object-picker__results-label--categories">
            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? true : $tmp)) {?>
                <div class="object-picker__results-label-icon-wrapper object-picker__results-label-icon-wrapper--categories">
                    <i class="object-picker__results-label-icon object-picker__results-label-icon--categories <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? "icon-plus-sign" : $tmp), ENT_QUOTES, 'UTF-8');?>
"></i>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['title_pre']->value) {?>
                <div class="object-picker__results-label-prefix object-picker__results-label-prefix--categories">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>

                </div>
            <?php }?>
            <div class="object-picker__results-label-body object-picker__results-label-body--categories">
                <span class="select2-selection__choice__handler"></span>
                ${data.text}
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['help']->value) {?>
            <div class="object-picker__results-help object-picker__results-help--categories">
                <?php echo $_smarty_tpl->__("enter_category_name_and_path");?>

            </div>
        <?php }?>
    <?php }?>
</div><?php }} ?>

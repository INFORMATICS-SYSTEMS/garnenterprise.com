<?php /* Smarty version Smarty-3.1.21, created on 2021-08-11 19:46:23
         compiled from "/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/master_products/blocks/products/vendor_products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16036045916113fedfeee7e3-69942513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9994a0ce41d95f4224dc389448763bf3dfaf72dc' => 
    array (
      0 => '/var/www/vhosts/garnenterprise.com/httpdocs/design/themes/responsive/templates/addons/master_products/blocks/products/vendor_products.tpl',
      1 => 1628699674,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16036045916113fedfeee7e3-69942513',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    '_show_add_to_wishlist' => 0,
    'first_vendor_product' => 0,
    'vendor_product' => 0,
    'company_id' => 0,
    'redirect_url' => 0,
    'config' => 0,
    'product_id' => 0,
    'amount' => 0,
    'product' => 0,
    'option_id' => 0,
    'option_value' => 0,
    'show_logo' => 0,
    'logo' => 0,
    'name' => 0,
    'rating' => 0,
    'location' => 0,
    'product_amount' => 0,
    'addons' => 0,
    'add_to_cart' => 0,
    'list_buttons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_6113fee000b4c9_09413309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6113fee000b4c9_09413309')) {function content_6113fee000b4c9_09413309($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/vhosts/garnenterprise.com/httpdocs/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ((($tmp = @$_smarty_tpl->tpl_vars['items']->value)===null||$tmp==='' ? array() : $tmp)) {?>

    <?php $_smarty_tpl->tpl_vars['show_add_to_wishlist'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['_show_add_to_wishlist']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['first_vendor_product'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['items']->value), null, 0);?>
    <div class="ty-sellers-list js-sellers-list"
         data-ca-seller-list-request-product-id="<?php echo htmlspecialchars($_REQUEST['product_id'], ENT_QUOTES, 'UTF-8');?>
"
         id="sellers_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_vendor_product']->value['master_product_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php  $_smarty_tpl->tpl_vars['vendor_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vendor_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vendor_product']->key => $_smarty_tpl->tpl_vars['vendor_product']->value) {
$_smarty_tpl->tpl_vars['vendor_product']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars['company_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['vendor_product']->value['company_id'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['vendor_product']->value['product_id'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['obj_prefix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['company_id']->value)."-", null, 0);?>
        <?php if (!empty($_smarty_tpl->tpl_vars['vendor_product']->value['min_qty'])) {?>
            <?php $_smarty_tpl->tpl_vars['amount'] = new Smarty_variable($_smarty_tpl->tpl_vars['vendor_product']->value['min_qty'], null, 0);?>
        <?php } elseif (!empty($_smarty_tpl->tpl_vars['vendor_product']->value['qty_step'])) {?>
            <?php $_smarty_tpl->tpl_vars['amount'] = new Smarty_variable($_smarty_tpl->tpl_vars['vendor_product']->value['qty_step'], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['amount'] = new Smarty_variable("1", null, 0);?>
        <?php }?>

        <div class="ty-sellers-list__item">
            <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
                  method="post"
                  name="vendor_products_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                  enctype="multipart/form-data"
                  class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle"
                  data-ca-master-products-element="product_form"
                  data-ca-master-products-master-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor_product']->value['master_product_id'], ENT_QUOTES, 'UTF-8');?>
"
                  data-ca-master-products-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
            >
                <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,average_rating*"/>
                <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['redirect_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
                <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
                <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
" />
                <?php  $_smarty_tpl->tpl_vars['option_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option_value']->_loop = false;
 $_smarty_tpl->tpl_vars['option_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['selected_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option_value']->key => $_smarty_tpl->tpl_vars['option_value']->value) {
$_smarty_tpl->tpl_vars['option_value']->_loop = true;
 $_smarty_tpl->tpl_vars['option_id']->value = $_smarty_tpl->tpl_vars['option_value']->key;
?>
                    <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_value']->value, ENT_QUOTES, 'UTF-8');?>
" />
                <?php } ?>

                <?php $_smarty_tpl->tpl_vars['show_logo'] = new Smarty_variable($_smarty_tpl->tpl_vars['vendor_product']->value['company']['logos'], null, 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company'=>$_smarty_tpl->tpl_vars['vendor_product']->value['company'],'show_name'=>true,'show_links'=>true,'show_logo'=>$_smarty_tpl->tpl_vars['show_logo']->value,'show_city'=>true,'show_country'=>true,'show_rating'=>true,'show_posts_count'=>false,'show_location'=>true), 0);?>


                <div class="ty-sellers-list__content">

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:vendor_products")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:vendor_products"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="ty-sellers-list__image">
                        <?php $_smarty_tpl->tpl_vars['logo'] = new Smarty_variable("logo_".((string)$_smarty_tpl->tpl_vars['company_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['logo']->value];?>

                    </div>

                    <div class="ty-sellers-list__title">
                        <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['company_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>


                        <?php $_smarty_tpl->tpl_vars['rating'] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['company_id']->value), null, 0);?>
                        <div class="sellers-list__rating">
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>

                        </div>
                    </div>

                    <?php $_smarty_tpl->tpl_vars['location'] = new Smarty_variable("location_".((string)$_smarty_tpl->tpl_vars['company_id']->value), null, 0);?>
                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['location']->value])) {?>
                        <div class="ty-sellers-list__item-location">
                            <a href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'UTF-8');?>
" class="company-location"><bdi>
                                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['location']->value];?>

                            </bdi></a>
                        </div>
                    <?php }?>

                    <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['vendor_product']->value,'obj_prefix'=>"vendor_product",'show_add_to_cart'=>true,'show_amount_label'=>false,'show_product_amount'=>true,'show_add_to_wishlist'=>true,'show_buy_now'=>false,'show_product_options'=>true,'hide_compare_list_button'=>true), 0);?>


                    <div class="ty-sellers-list__controls">
                        <?php $_smarty_tpl->tpl_vars['product_amount'] = new Smarty_variable("product_amount_".((string)$_smarty_tpl->tpl_vars['product_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_amount']->value];?>


                        <div class="ty-sellers-list__price">
                            <a class="ty-sellers-list__price-link"
                               href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)), ENT_QUOTES, 'UTF-8');?>
"
                            >
                                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['vendor_product']->value['price'],'class'=>"ty-price-num"), 0);?>

                            </a>

                            <?php if ($_smarty_tpl->tpl_vars['addons']->value['reward_points']['status']=="A") {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/views/products/components/product_representation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['vendor_product']->value), 0);?>

                            <?php }?>
                        </div>

                        <div class="ty-sellers-list__buttons">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_products:list_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_products:list_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php $_smarty_tpl->tpl_vars['add_to_cart'] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['product_id']->value), null, 0);?>
                                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>


                                <?php $_smarty_tpl->tpl_vars['list_buttons'] = new Smarty_variable("list_buttons_".((string)$_smarty_tpl->tpl_vars['product_id']->value), null, 0);?>
                                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_buttons']->value];?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_products:list_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </div>

                    </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:vendor_products"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </form>
        </div>
    <?php } ?>
    <!--sellers_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_vendor_product']->value['master_product_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/master_products/blocks/products/vendor_products.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/master_products/blocks/products/vendor_products.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ((($tmp = @$_smarty_tpl->tpl_vars['items']->value)===null||$tmp==='' ? array() : $tmp)) {?>

    <?php $_smarty_tpl->tpl_vars['show_add_to_wishlist'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['_show_add_to_wishlist']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['first_vendor_product'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['items']->value), null, 0);?>
    <div class="ty-sellers-list js-sellers-list"
         data-ca-seller-list-request-product-id="<?php echo htmlspecialchars($_REQUEST['product_id'], ENT_QUOTES, 'UTF-8');?>
"
         id="sellers_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_vendor_product']->value['master_product_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php  $_smarty_tpl->tpl_vars['vendor_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vendor_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vendor_product']->key => $_smarty_tpl->tpl_vars['vendor_product']->value) {
$_smarty_tpl->tpl_vars['vendor_product']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars['company_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['vendor_product']->value['company_id'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['vendor_product']->value['product_id'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['obj_prefix'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['company_id']->value)."-", null, 0);?>
        <?php if (!empty($_smarty_tpl->tpl_vars['vendor_product']->value['min_qty'])) {?>
            <?php $_smarty_tpl->tpl_vars['amount'] = new Smarty_variable($_smarty_tpl->tpl_vars['vendor_product']->value['min_qty'], null, 0);?>
        <?php } elseif (!empty($_smarty_tpl->tpl_vars['vendor_product']->value['qty_step'])) {?>
            <?php $_smarty_tpl->tpl_vars['amount'] = new Smarty_variable($_smarty_tpl->tpl_vars['vendor_product']->value['qty_step'], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['amount'] = new Smarty_variable("1", null, 0);?>
        <?php }?>

        <div class="ty-sellers-list__item">
            <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
                  method="post"
                  name="vendor_products_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                  enctype="multipart/form-data"
                  class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle"
                  data-ca-master-products-element="product_form"
                  data-ca-master-products-master-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor_product']->value['master_product_id'], ENT_QUOTES, 'UTF-8');?>
"
                  data-ca-master-products-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vendor_product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
            >
                <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,average_rating*"/>
                <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['redirect_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
                <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
                <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
" />
                <?php  $_smarty_tpl->tpl_vars['option_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option_value']->_loop = false;
 $_smarty_tpl->tpl_vars['option_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['selected_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option_value']->key => $_smarty_tpl->tpl_vars['option_value']->value) {
$_smarty_tpl->tpl_vars['option_value']->_loop = true;
 $_smarty_tpl->tpl_vars['option_id']->value = $_smarty_tpl->tpl_vars['option_value']->key;
?>
                    <input type="hidden" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_value']->value, ENT_QUOTES, 'UTF-8');?>
" />
                <?php } ?>

                <?php $_smarty_tpl->tpl_vars['show_logo'] = new Smarty_variable($_smarty_tpl->tpl_vars['vendor_product']->value['company']['logos'], null, 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company'=>$_smarty_tpl->tpl_vars['vendor_product']->value['company'],'show_name'=>true,'show_links'=>true,'show_logo'=>$_smarty_tpl->tpl_vars['show_logo']->value,'show_city'=>true,'show_country'=>true,'show_rating'=>true,'show_posts_count'=>false,'show_location'=>true), 0);?>


                <div class="ty-sellers-list__content">

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:vendor_products")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:vendor_products"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="ty-sellers-list__image">
                        <?php $_smarty_tpl->tpl_vars['logo'] = new Smarty_variable("logo_".((string)$_smarty_tpl->tpl_vars['company_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['logo']->value];?>

                    </div>

                    <div class="ty-sellers-list__title">
                        <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['company_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>


                        <?php $_smarty_tpl->tpl_vars['rating'] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['company_id']->value), null, 0);?>
                        <div class="sellers-list__rating">
                            <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>

                        </div>
                    </div>

                    <?php $_smarty_tpl->tpl_vars['location'] = new Smarty_variable("location_".((string)$_smarty_tpl->tpl_vars['company_id']->value), null, 0);?>
                    <?php if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['location']->value])) {?>
                        <div class="ty-sellers-list__item-location">
                            <a href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'UTF-8');?>
" class="company-location"><bdi>
                                    <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['location']->value];?>

                            </bdi></a>
                        </div>
                    <?php }?>

                    <?php echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['vendor_product']->value,'obj_prefix'=>"vendor_product",'show_add_to_cart'=>true,'show_amount_label'=>false,'show_product_amount'=>true,'show_add_to_wishlist'=>true,'show_buy_now'=>false,'show_product_options'=>true,'hide_compare_list_button'=>true), 0);?>


                    <div class="ty-sellers-list__controls">
                        <?php $_smarty_tpl->tpl_vars['product_amount'] = new Smarty_variable("product_amount_".((string)$_smarty_tpl->tpl_vars['product_id']->value), null, 0);?>
                        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_amount']->value];?>


                        <div class="ty-sellers-list__price">
                            <a class="ty-sellers-list__price-link"
                               href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)), ENT_QUOTES, 'UTF-8');?>
"
                            >
                                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['vendor_product']->value['price'],'class'=>"ty-price-num"), 0);?>

                            </a>

                            <?php if ($_smarty_tpl->tpl_vars['addons']->value['reward_points']['status']=="A") {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/views/products/components/product_representation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['vendor_product']->value), 0);?>

                            <?php }?>
                        </div>

                        <div class="ty-sellers-list__buttons">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_products:list_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_products:list_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php $_smarty_tpl->tpl_vars['add_to_cart'] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['product_id']->value), null, 0);?>
                                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>


                                <?php $_smarty_tpl->tpl_vars['list_buttons'] = new Smarty_variable("list_buttons_".((string)$_smarty_tpl->tpl_vars['product_id']->value), null, 0);?>
                                <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_buttons']->value];?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_products:list_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </div>

                    </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:vendor_products"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </form>
        </div>
    <?php } ?>
    <!--sellers_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_vendor_product']->value['master_product_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>
<?php }?><?php }} ?>

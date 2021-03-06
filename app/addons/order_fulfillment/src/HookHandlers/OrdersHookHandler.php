<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

namespace Tygh\Addons\OrderFulfillment\HookHandlers;

use Tygh\Shippings\Shippings;

class OrdersHookHandler
{
    /**
     * The 'pre_place_order' hook handler.
     *
     * Action performed:
     *    - Removes temporary product group for marketplace shipping.
     *    - Sets selected marketplace shipping method to all product groups which are using marketplace shipping.
     *
     * @param array<string, array<string, array<string>>>        $cart           Cart.
     * @param bool                                               $allow          Flag of allowing placing this order.
     * @param array<string, array<string, array<array<string>>>> $product_groups Product groups.
     *
     * @see \fn_place_order()
     *
     * @return void
     */
    public function onPrePlaceOrder(array &$cart, $allow, array $product_groups)
    {
        if (!$allow) {
            return;
        }
        $marketplace_group = array_filter($product_groups, static function ($group) {
            return isset($group['marketplace_shipping']);
        });
        if (empty($marketplace_group)) {
            return;
        }
        $marketplace_group_key = key($marketplace_group);
        unset($cart['product_groups'][$marketplace_group_key]);
        $marketplace_group = reset($marketplace_group);
        $is_first_product_group = false;
        foreach ($cart['product_groups'] as $group_key => &$group) {
            if (
                !(
                    empty($group['chosen_shippings'])
                    && fn_are_company_orders_fulfilled_by_marketplace((int) $group['company_id'])
                )
            ) {
                continue;
            }
            $chosen_shipping = $marketplace_group['chosen_shippings'];
            $chosen_shipping_data = reset($chosen_shipping);
            if ($is_first_product_group) {
                $chosen_shipping_data['rate'] = 0;
            }
            $group['chosen_shippings'][] = $chosen_shipping_data;
            $cart['chosen_shipping'][$group_key] = $chosen_shipping_data['shipping_id'];
            if (isset($cart['shippings_extra']['data'][$marketplace_group_key])) {
                $cart['shippings_extra']['data'][$group_key] = $cart['shippings_extra']['data'][$marketplace_group_key];
            }
            $is_first_product_group = true;
        }
        unset($group);
    }

    /**
     * The `place_suborders` hook handler.
     *
     * Action performed:
     *     - Modify suborder cart shipping and total cost accordingly to marketplace shipping cost.
     *
     * @param array<string, int|float|string|array<string, array<string>>> $cart          Cart.
     * @param array<string, int|float|string|array<string>>                $suborder_cart Suborder cart.
     *
     * @see \fn_place_suborders()
     *
     * @return void
     */
    public function onPlaceSuborders(array $cart, array &$suborder_cart)
    {
        static $is_shipping_cost_need_to_add = true;
        if (!$is_shipping_cost_need_to_add) {
            return;
        }
        foreach ($suborder_cart['product_groups'] as $product_group) {
            if (empty($product_group['shipping_by_marketplace'])) {
                return;
            }
            $is_shipping_cost_need_to_add = false;
        }
        $marketplace_shipping_cost = 0.0;
        if (empty($cart['shipping']) || !is_array($cart['shipping'])) {
            return;
        }
        foreach ($cart['shipping'] as $shipping) {
            if (!Shippings::isSentByMarketplace($shipping)) {
                continue;
            }
            $marketplace_shipping_cost = $shipping['rate'];
        }
        $suborder_cart['shipping_cost'] = $marketplace_shipping_cost;
        $suborder_cart['total'] += $marketplace_shipping_cost;
    }
}

<?php
//auto update cart number item by ajax
add_filter( 'woocommerce_add_to_cart_fragments', 'refresh_cart_count', 50, 1 );
function refresh_cart_count( $fragments ){
    ob_start();
    ?>
    <span class="m-cart_num" id="m-cart_num"><?php
    $cart_count = WC()->cart->get_cart_contents_count();
    echo sprintf ( _n( '%d', '%d', $cart_count ), $cart_count );
    ?></span>
    <?php
     $fragments['#m-cart_num'] = ob_get_clean();
    return $fragments;
}
//auto update cart number item by ajax

add_filter( 'woocommerce_checkout_fields' , 'custom_remove_woo_checkout_fields' );
// ! auto update cart number item by ajax
// ! custom_remove_woo_checkout_fields
function custom_remove_woo_checkout_fields( $fields ) {
    // remove billing fields
    // unset($fields['billing']['billing_first_name']);
    unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    // remove shipping fields
    unset($fields['shipping']['shipping_first_name']);
    unset($fields['shipping']['shipping_last_name']);
    unset($fields['shipping']['shipping_company']);
    unset($fields['shipping']['shipping_address_1']);
    unset($fields['shipping']['shipping_address_2']);
    unset($fields['shipping']['shipping_city']);
    unset($fields['shipping']['shipping_postcode']);
    unset($fields['shipping']['shipping_country']);
    unset($fields['shipping']['shipping_state']);

    // remove order comment fields
    unset($fields['order']['order_comments']);

    return $fields;
}
// ! custom_remove_woo_checkout_fields

// control order status if vnpay succes pay
add_action( 'woocommerce_thankyou', 'bbloomer_thankyou_change_order_status' );
function bbloomer_thankyou_change_order_status( $order_id ){
   if( ! $order_id ) return;
   $order = wc_get_order( $order_id );
	 $is_payment = $order->get_payment_method();
	 if($is_payment == 'vnpay'){
			$order->update_status( 'wc-processing' );
	 	}
	 else{
		$order->update_status( 'wc-processing' );
	 }
}

// !control order status if vnpay succes pay
<?php


function mysite_box_discount( $cart ){
  
    global $woocommerce;
 
    /* Grab current total number of products */
    $number_products = $woocommerce->cart->cart_contents_count;
   
    $total = $cart->cart_contents_total;
    $my_increment = 3; // Apply another discount every 15 products
    $discount = 0.25;
    
    if ($number_products >= $my_increment) {
    
     $total_discount = $total * $discount;
     $total -= $total_discount;

     $cart->cart_contents_total = $total;
    }   
}


add_action('woocommerce_calculate_totals', 'mysite_box_discount');



?>
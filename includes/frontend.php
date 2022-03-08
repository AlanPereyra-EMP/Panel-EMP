<?php
// Change frontend shop title
function pemp_woocommerce_page_title( $page_title ) {
  if( $page_title == 'Shop' ) {
    return "Propiedades";
  }
}
add_filter( 'woocommerce_page_title', 'pemp_woocommerce_page_title');

// Change WooCommerce search product placeholder
function pemp_change_woocomerce_searchform( $translated_text, $text, $domain ) {
   switch ( $text ) {
       case 'Search products&hellip;' :
           $text = __( 'Buscar Propiedades&hellip;', 'woocommerce' );
           break;
   }
   return $text;
}
add_filter( 'gettext', 'pemp_change_woocomerce_searchform', 20, 3 );
?>

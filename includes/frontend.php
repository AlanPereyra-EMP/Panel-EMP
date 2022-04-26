<?php
// Change frontend shop title
function pemp_woocommerce_page_title( $page_title ) {
  if( $page_title == 'Tienda' ) {
    return "Propiedades";
  }
}
add_filter( 'woocommerce_page_title', 'pemp_woocommerce_page_title');

function emp_woo_custom_product_searchform( $form ) {

	$form = '<form role="search" method="get" id="searchform" action="' . esc_url( home_url( '/'  ) ) . '">
        		<div>
        			<label class="screen-reader-text" for="s">' . __( 'Buscado con:', 'woocommerce' ) . '</label>
        			<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __( 'Buscar propiedades', 'woocommerce' ) . '" />
        			<input type="submit" id="searchsubmit" value="'. esc_attr__( 'Buscar', 'woocommerce' ) .'" />
        			<input type="hidden" name="post_type" value="product" />
        		</div>
        	</form>';

	return $form;

}
add_filter( 'get_product_search_form' , 'emp_woo_custom_product_searchform' );
?>

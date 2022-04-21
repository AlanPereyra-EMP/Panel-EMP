<?php
function pemp_simple_shop_manager() {
    add_role(
        'emp_shop_manager',
        'EMP Shop Manager',
        array(
          'level_9'                => true,
  				'level_8'                => true,
  				'level_7'                => true,
  				'level_6'                => true,
  				'level_5'                => true,
  				'level_4'                => true,
  				'level_3'                => true,
  				'level_2'                => true,
  				'level_1'                => true,
  				'level_0'                => true,
          'read'                   => true,
          'edit_posts'             => true,
          'edit_product'           => true,
          'edit_products'          => true,
          'edit_others_products'   => true,
          'edit_private_products'  => true,
          'edit_published_products'=> true,
          'read_product'           => true,
          'read_private_products'  => true,
          'delete_product'         => true,
          'delete_products'        => true,
          'delete_private_products'=> true,
          'delete_others_products' => true,
          'publish_products'       => true,
          'edit_published_posts'   => true,
          'edit_private_posts'     => true,
          'edit_others_posts'      => true,
          'publish_posts'          => true,
          'delete_posts'           => true,
          'delete_private_posts'   => true,
          'delete_published_posts' => true,
          'manage_links'           => true,
          'manage_categories'      => true,
          'assign_product_terms'   => true,
          'moderate_comments'      => true,
          'upload_files'           => true,
        ),
    );
}
add_action( 'init', 'pemp_simple_shop_manager' );

// function pemp_simple_role_remove() {
//     remove_role( 'emp_shop_manager' );
// }
//
// // Remove the simple_role.
// add_action( 'init', 'pemp_simple_role_remove' );
?>

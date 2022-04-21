<?php
// Change product custom post type names
function pemp_remane_post_type( $args ){
    $labels = array(
        'name'               => __( 'Inmuebles', 'pemp' ),
        'singular_name'      => __( 'Propiedad', 'pemp' ),
        'menu_name'          => _x( 'Inmuebles', 'Admin menu name', 'pemp' ),
        'add_new'            => __( 'Añadir propiedad', 'pemp' ),
        'add_new_item'       => __( 'Añadir nueva propiedad', 'pemp' ),
        'edit'               => __( 'Editar', 'pemp' ),
        'edit_item'          => __( 'Edit propiedad', 'pemp' ),
        'new_item'           => __( 'Nueva propiedad', 'pemp' ),
        'view'               => __( 'Ver propiedad', 'pemp' ),
        'view_item'          => __( 'Ver propiedad', 'pemp' ),
        'search_items'       => __( 'Buscar propiedad', 'pemp' ),
        'not_found'          => __( 'No se encontraros propiedades', 'pemp' ),
        'not_found_in_trash' => __( 'No se encontraros propiedades en la papelera', 'pemp' ),
        'parent'             => __( 'Propiedad dependiente', 'pemp' ),
        'menu_icon' 				 => 'dashicons-text-page'
    );

    $args['labels'] = $labels;
    $args['description'] = __( 'Acá podés administrar tus propiedades.', 'pemp' );
    return $args;
}
add_filter( 'woocommerce_register_post_type_product', 'pemp_remane_post_type' );

?>

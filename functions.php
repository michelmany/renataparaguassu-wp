<?php
define('IMAGES_PATH', get_template_directory_uri()."/images");
define('FONTS_PATH', get_template_directory_uri()."/fonts");
define('SCRIPTS_PATH', get_template_directory_uri()."/scripts");
define('STYLES_PATH', get_template_directory_uri()."/styles");


//Adiciona suporte ao Menu
add_theme_support( 'menus' );
register_nav_menu( 'principal', 'Principal - Topo');




if ( function_exists( 'add_image_size' ) ) { 
    add_image_size( 'portfolio-1-thumb', 261, 243, true );
add_image_size( 'nit-portfolio-4', 220, 205, true ); //(cropped)
add_image_size( 'nit-blog', 640, 240, true ); //(cropped)
add_image_size( 'nit-widget', 220, 86, true ); //(cropped)
add_image_size( 'nit-related', 75, 45, true ); //(cropped)
add_image_size( 'nit-medium', 640, 9999 ); //(not cropped) (and unlimited height)
}



//Adicionando Menu Drop-Down Bootstrap 3 no Wordpress

class BS3_Walker_Nav_Menu extends Walker_Nav_Menu {

    function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        $id_field = $this->db_fields['id'];
        if ( isset( $args[0] ) && is_object( $args[0] ) )
        {
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        if ( is_object($args) && !empty($args->has_children) )
        {
            $link_after = $args->link_after;
            $args->link_after = ' <b class="caret"></b>';
        }
        parent::start_el($output, $item, $depth, $args, $id);

        if ( is_object($args) && !empty($args->has_children) )
            $args->link_after = $link_after;
    }

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = '';
        $output .= "$indent<ul class=\"dropdown-menu list-unstyled\">";
    }
}

add_filter('nav_menu_link_attributes', 'nav_link_att', 10, 3);

function nav_link_att($atts, $item, $args) {
    if ( $args->has_children )
    {
        $atts['data-toggle'] = 'dropdown';
        $atts['class'] = 'dropdown-toggle';
    }
    return $atts;
}



#Se o título for maior que 35 caracteres, corta e coloca '...' após!
function cortaTitulo($title, $qtdCaracter) {
    if (strlen($title) > $qtdCaracter) {
        echo substr(the_title($before = '', $after = '', FALSE), 0, $qtdCaracter) . '...'; 
    } else {
       echo the_title();
    } 
};

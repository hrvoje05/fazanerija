<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'fazan' ),
) );

function prefix_modify_nav_menu_args( $args ) {
    return array_merge( $args, array(
        'walker' => new WP_Bootstrap_Navwalker(),
    ) );
}
add_filter( 'wp_nav_menu_args', 'prefix_modify_nav_menu_args' );


if(!function_exists('prestigo_SPaginate')){
    function prestigo_SPaginate()
    {
        $currentPage = null;
        $totalPage = null;
        global $wp_query;           
            $currentPage = intval(get_query_var('paged'));
        if(empty($currentPage))
        {
            $currentPage = 1;
        }        
        $totalPage = intval(ceil($wp_query->found_posts / intval(get_query_var('posts_per_page'))));
        if($totalPage <= 1)
        {
            return '';
        }
        $paginateResult = '<!-- PAGINATION -->
                        <ul class="pagination clearfix">';

        if ($currentPage > 1)
        {
            $paginateResult .= '<li class="pull-left"><a href="'.get_pagenum_link($currentPage - 1).'"><i class="fas fa-chevron-left"></i></a></li>';
        }elseif ($currentPage = 1)
        {
            $paginateResult .= '<li class="pull-left"><a href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a></li>';
        }
        $paginateResult .= prestigo_ListLink(1, $totalPage, $currentPage);
        if ($currentPage < $totalPage)
        {
            $paginateResult .= "<li class='pull-right'><a href='" . get_pagenum_link($currentPage + 1) . "' class='spaginate-next'><i class='fas fa-chevron-right'></i></a></li>";
        }elseif($currentPage = $totalPage){
            $paginateResult .= "<li class='pull-right'><span class='spaginate-next'><i class='fas fa-chevron-right'></i></span></li>";
        }
        $paginateResult .= "</ul><!-- //PAGINATION -->";
        echo $paginateResult;
        return $paginateResult;
    }
}

if(!function_exists('prestigo_ListLink')){
    function prestigo_ListLink($intStart, $totalPage, $currentPage)
    {
        $pageHidden = '<span class="spaginate-hidden">... </span>';
        $linkResult = "";
        $hiddenBefore = false;
        $hiddenAfter = false;
        for ($i = $intStart; $i <= $totalPage; $i++)
        {
            if($currentPage === intval($i))
            {
                $linkResult .= '<li class="active"><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
            }
            else if(($i <= 6 && $currentPage < 10) || $i == $totalPage || $i == 1 || $i < 4 || ($i <= 6 && $totalPage <= 6) || ($i > $currentPage && ($i <= ($currentPage + 2))) || ($i < $currentPage && ($i >= ($currentPage - 2))) || ($i >= ($totalPage - 2) && $i < $totalPage))
            {
                $linkResult .= '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
                if($i <= 6 && $currentPage < 10)
                {
                    $hiddenBefore = true;
                }
            }
            else
            {
                if(!$hiddenBefore)
                {
                    $linkResult .= $pageHidden;
                    $hiddenBefore = true;
                }
                else if(!$hiddenAfter && $i > $currentPage)
                {
                    $linkResult .= $pageHidden;
                    $hiddenAfter = true;
                }
            }
        }
        return $linkResult;
    }
}


function wpb_change_title_text( $title ){
    $screen = get_current_screen();
 
    if  ( 'vijest' == $screen->post_type ) {
         $title = 'Dodaj naslov vijesti';
    }
 
    return $title;
}
 
add_filter( 'enter_title_here', 'wpb_change_title_text' );

function wpb_change_title_text2( $title ){
    $screen = get_current_screen();
 
    if  ( 'obavijesti' == $screen->post_type ) {
         $title = 'Dodaj naslov obavijesti';
    }
 
    return $title;
}
 
add_filter( 'enter_title_here', 'wpb_change_title_text2' );

function wpb_change_title_text3( $title ){
    $screen = get_current_screen();
 
    if  ( 'upravni_odbor' == $screen->post_type ) {
         $title = 'Ime i prezime člana upravnog odbora';
    }
 
    return $title;
}
 
add_filter( 'enter_title_here', 'wpb_change_title_text3' );

function author_cpt_filter($query) {
    if ( !is_admin() && $query->is_main_query() ) {
      if ($query->is_author()) {
        $query->set('post_type', array('post', 'obavijesti', 'vijest'));
        $query->set('post_per_page', 6);

      }
    }
}

add_action('pre_get_posts','author_cpt_filter');


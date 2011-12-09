<?php
include 'theme_options.php';
include 'guide.php';

if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'name' => 'Sidebar',
    'before_widget' => '<li class="sidebox" id="%1$s">',
    'after_widget' => '</li>',
	'before_title' => '<h3 class="sidetitl ">',
    'after_title' => '</h3>',
	));

register_sidebar(array(
	'name' => 'Footer',
    'before_widget' => '<li class="botwid" id="%1$s">',
    'after_widget' => '</li>',
	'before_title' => '<h3 class="bothead">',
    'after_title' => '</h3>',
    ));		


register_nav_menus( array(
		'primary' => __( 'Primary Navigation', '' ),
	));	
	
function new_excerpt_length($length) {
	return 80;
}

add_filter('excerpt_length', 'new_excerpt_length');	
	
function new_excerpt_more($more) {
return '<a href="'. get_permalink($post->ID) . '">' . '&nbsp;&nbsp;[ Read More ]' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'rhea_slider', 250, 150, true );
	add_image_size( 'rhea_postim', 630, 200, true );
	add_image_size( 'rhea_thumbim', 80, 60, true );
}

function rhea_slider_image(){

if ( has_post_thumbnail() ) {
	 the_post_thumbnail( 'rhea_slider', array('class' => 'sidim') );
} else {
?>
<img class="sidim" src="<?php bloginfo('template_directory'); ?>/images/dummy.png" alt="" />
<?php
};
}

function rhea_postim_image(){
if ( has_post_thumbnail() ) {
	 the_post_thumbnail( 'rhea_postim', array('class' => 'postimg') );
} else {
?>

<?php
};
}

function rhea_thumb_image(){

if ( has_post_thumbnail() ) {
	 the_post_thumbnail( 'rhea_thumb', array('class' => 'thumbim') );
} else {
?>
<img class="thumbim" src="<?php bloginfo('template_directory'); ?>/images/dummy.png" alt=""  />
<?php
};
}


?>
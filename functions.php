<?php

//Set up
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

//includes
include( get_template_directory().'/includes/front/enqueue.php' );
include( get_template_directory().'/includes/setup.php' );
include( get_template_directory().'/includes/widgets.php' );
include( get_template_directory().'/includes/activate.php' );
include( get_template_directory().'/includes/admin/menus.php' );
include( get_template_directory().'/includes/admin/options-page.php' );
include( get_template_directory().'/includes/admin/init.php' );
include( get_template_directory().'/process/save-options.php' );


//Action & Filter Hooks
add_action( 'wp_enqueue_scripts', 'gfi_enqueue' );
add_action('after_setup_theme','gfi_setup_theme');
add_action('widgets_init','gfi_widgets');
add_action('after_switch_theme','gfi_activate');
add_action('admin_menu','gfi_admin_menus');
add_action('admin_init','gfi_admin_init');


//Shortcodes

function wpdocs_excerpt_more( $more ) {
    return ' Read more..';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

//Set and Get Post Views
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
/////////////////////////////////////////////////////////////
// Creating the widget 
class wpb_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'wpb_widget', 

// Widget name will appear in UI
__('WPBeginner Widget', 'wpb_widget_domain'), 

// Widget description
array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), ) 
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];

// This is where you run the code and display the output
echo __( 'Hello, World!', 'wpb_widget_domain' );
echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget() {
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
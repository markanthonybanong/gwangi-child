<?php 
function child_theme_enque_scripts() {
    //for development only change date to false
    wp_enqueue_script('header', get_stylesheet_directory_uri(). '/assets/utilities/js/header.js', array('jquery'), date("h:i:s"), true);
    if(is_page_template('page-templates-employee/register-employee.php')) {
        wp_enqueue_script('register-employee', get_stylesheet_directory_uri(). '/dist/register-employee.js', array('jquery'), date("h:i:s"), true);
        wp_localize_script( 'register-employee', 'myAjax', array( 
            'restURL' => rest_url(),
            'nonce'   => wp_create_nonce('wp_rest')
        ));
    }elseif(is_page_template('page-templates-employee/update-employee-profile.php')) {
        wp_enqueue_script('update-employee-profile', get_stylesheet_directory_uri(). '/dist/update-employee-profile.js', array('jquery'), date("h:i:s"), true);
        wp_localize_script( 'update-employee-profile', 'myAjax', array( 
            'restURL' => rest_url(),
            'nonce'   => wp_create_nonce('wp_rest')
        ));
    }elseif(is_page_template('page-templates-employee/view-employee-profile.php')) {
        wp_enqueue_script('view-employee-profile', get_stylesheet_directory_uri(). '/dist/view-employee-profile.js', array('jquery'), date("h:i:s"), true);
        wp_localize_script( 'view-employee-profile', 'myAjax', array( 
            'restURL' => rest_url(),
            'nonce'   => wp_create_nonce('wp_rest')
        ));
    }elseif(is_page_template('page-templates-employee/find-employee.php')) {
        wp_enqueue_script('find-employee', get_stylesheet_directory_uri(). '/dist/find-employee.js', array('jquery'), date("h:i:s"), true);
        wp_localize_script( 'find-employee', 'myAjax', array( 
            'restURL' => rest_url(),
            'nonce'   => wp_create_nonce('wp_rest')
        ));
    }elseif(is_page_template('page-templates-host-family/register-host-family.php')) {
        wp_enqueue_script('register-host-family', get_stylesheet_directory_uri(). '/dist/register-host-family.js', false, date("h:i:s"), true);
    }
}
add_action('wp_enqueue_scripts', 'child_theme_enque_scripts');
?>
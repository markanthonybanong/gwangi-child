<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
 
function child_theme_configurator_css() {
    //for development only remove, date and random
    wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . '/style.css', array( 'gwangi-style','gwangi-style' ), date("h:i:s") );
    if(is_page_template('page-templates/employee/register-employee.php')) {
        wp_enqueue_style( 'register-employee', trailingslashit( get_stylesheet_directory_uri() ) .  '/assets/css/register-employee/register-employee.css', false, rand(111,9999));
       
    } elseif(is_page_template('page-templates/host-family/register-host-family.php')) {
        wp_enqueue_style( 'register-host-family', trailingslashit( get_stylesheet_directory_uri() ) .  '/assets/css/register-host-family/register-host-family.css', false, rand(111,9999));
    }elseif(is_page_template('page-templates/account-verfication/account-verification.php')) {
        wp_enqueue_style( 'account-verification', trailingslashit( get_stylesheet_directory_uri() ) .  '/assets/css/account-verification/account-verification.css', false, rand(111,9999));
    }
}
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 999 );
// END ENQUEUE PARENT ACTION

 
function child_theme_enque_scripts() {
    //for development only change date to false
    if(is_page_template('page-templates-employee/register-employee.php')) {
        wp_enqueue_script('register-employee', get_stylesheet_directory_uri(). '/dist/register-employee.js', array('jquery'), date("h:i:s"), true);
        wp_localize_script( 'register-employee', 'myAjax', array( 
            'restURL' => rest_url(),
            'nonce'   => wp_create_nonce('wp_rest')
        ));
    } elseif(is_page_template('page-templates-host-family/register-host-family.php')) {
        wp_enqueue_script('register-host-family', get_stylesheet_directory_uri(). '/dist/register-host-family.js', false, date("h:i:s"), true);
    }
}
add_action('wp_enqueue_scripts', 'child_theme_enque_scripts');

//FOR LOCAL DEVELOPMENT
add_action( 'phpmailer_init', 'my_phpmailer_example' );
function my_phpmailer_example( $phpmailer ) {
    $phpmailer->isSMTP();     
    $phpmailer->Host = 'mail.activeaupair.com';
    $phpmailer->SMTPAuth = true; // Force it to use Username and Password to authenticate
    $phpmailer->Port = 465;
    $phpmailer->Username = 'mark_test@activeaupair.com';
    $phpmailer->Password = 'coderguy1996coderguy1996';
}



require 'assets/php/register-employee/ajax-routes.php';
require 'assets/php/hooks/on_register_set_user_metadata.php';
require 'assets/php/hooks/on_login_check_user_metadata.php';
require 'assets/php/ajax-routes/shared_route.php';
 
<?php
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
        wp_enqueue_style( 'font-awesome-5', 'https://use.fontawesome.com/releases/v5.3.0/css/all.css', array(), '5.3.0');
        if(is_page_template('page-templates-account-verification/account-verification.php')) {
            wp_enqueue_style( 'account-verification', trailingslashit( get_stylesheet_directory_uri() ) .  '/assets/css/account-verification/account-verification.css', false, rand(111,9999));
        }else if(is_page_template('page-templates-employee/register-employee.php')) {
            wp_enqueue_style( 'register-employee', trailingslashit( get_stylesheet_directory_uri() ) .  '/assets/css/employee/register-employee/register-employee.css', false, rand(111,9999));  
        } elseif(is_page_template('page-templates-employee/update-employee-profile.php')) {
            wp_enqueue_style( 'update-employee-profile', trailingslashit( get_stylesheet_directory_uri() ) .  '/assets/css/employee/update-employee-profile/update-employee-profile.css', false, rand(111,9999));  
        } elseif(is_page_template('page-templates-employee/view-employee-profile.php')) {
            wp_enqueue_style( 'view-employee-profile', trailingslashit( get_stylesheet_directory_uri() ) .  '/assets/css/employee/view-employee-profile/view-employee-profile.css', false, rand(111,9999));  
        } elseif(is_page_template('page-templates-employee/find-employee.php')) {
            wp_enqueue_style( 'find-employee', trailingslashit( get_stylesheet_directory_uri() ) .  '/assets/css/employee/find-employee/find-employee.css', false, rand(111,9999));  
        } elseif(is_page_template('page-templates-employee/membership-employee.php')) {
            wp_enqueue_style( 'membership-employee', trailingslashit( get_stylesheet_directory_uri() ) .  '/assets/css/employee/membership-employee/membership-employee.css', false, rand(111,9999));  
        } elseif(is_page_template('page-templates-host-family/register-host-family.php')) {
            wp_enqueue_style( 'register-host-family', trailingslashit( get_stylesheet_directory_uri() ) .  '/assets/css/host-family/register-host-family/register-host-family.css', false, rand(111,9999));
        } elseif(is_page_template('page-templates-host-family/update-host-family-profile.php')) {
            wp_enqueue_style( 'update-host-family-profile', trailingslashit( get_stylesheet_directory_uri() ) .  '/assets/css/host-family/update-host-family/update-host-family-profile.css', false, rand(111,9999));
        } elseif(is_page_template('page-templates-host-family/view-host-family-profile.php')) {
            wp_enqueue_style( 'view-host-family-profile', trailingslashit( get_stylesheet_directory_uri() ) .  '/assets/css/host-family/view-host-family/view-host-family-profile.css', false, rand(111,9999));
        } elseif(is_page_template('page-templates-host-family/find-host-family.php')) {
            wp_enqueue_style( 'find-host-family', trailingslashit( get_stylesheet_directory_uri() ) .  '/assets/css/host-family/find-host-family/find-host-family.css', false, rand(111,9999));
        } elseif(is_page_template('page-templates-host-family/membership-host-family.php')) {
            wp_enqueue_style( 'membership-host-family', trailingslashit( get_stylesheet_directory_uri() ) .  '/assets/css/host-family/membership-host-family/membership-host-family.css', false, rand(111,9999));
        } elseif(is_page_template('page-templates-message/message.php')) {
            wp_enqueue_style( 'message', trailingslashit( get_stylesheet_directory_uri() ) .  '/assets/css/message/message/message.css', false, rand(111,9999));
        } elseif(is_page_template('page-templates-message/messages.php')) {
            wp_enqueue_style( 'messages', trailingslashit( get_stylesheet_directory_uri() ) .  '/assets/css/message/messages/messages.css', false, rand(111,9999));
        }
    }
    add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 999 );
    // END ENQUEUE PARENT ACTION
?>
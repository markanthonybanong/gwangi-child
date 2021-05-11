<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

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


require 'inc/enqueue-styles.php';
require 'inc/enqueue-scripts.php';
require 'inc/routes.php';
require 'inc/employee/routes.php';
require 'inc/background-hooks.php';
require 'inc/template-functions.php';
require 'inc/template-hooks.php';
//utilities
require 'assets/utilities/php/number.php';

 
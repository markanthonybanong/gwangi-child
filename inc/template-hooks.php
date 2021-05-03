<?php
/**
 * Gwangi template hooks.
 *
 * @package gwangi
 */

/**
 * Header Hooks
 *
 * @see gwangi_header()
 *
 * @since 1.0.0
 */
add_action( 'gwangi_header_not_logged_in', 'gwangi_header_not_logged_in', 10 );
add_action( 'gwangi_header_logged_in', 'gwangi_header_logged_in', 10 );
 
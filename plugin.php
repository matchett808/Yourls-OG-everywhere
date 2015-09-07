<?php
/*
Plugin Name: Yourls-OG-everywhere
Plugin URI: https://github.com/matchett808/Yourls-OG-everywhere
Description: Add a specific OpenGraph decleration to every redirect that contains a specified string
Version: 0.1
Author: Iain Matchett

*/
// No direct call
//if( !defined( 'YOURLS_ABSPATH' ) ) die(); 
define( 'OG-IMAGE', "" );
define( 'OG-TITLE', "" );
define( 'OG-target', "" );
define( 'OG-SITENAME', "" );

yourls_add_action( 'pre_redirect', 'og-everywhere' );
function og-everywhere( $args )
{
    if(strpos($location, $OG-target) !== false )
    {
        echo '<meta property="og:title" content="' . $OG-TITLE .'" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="' . $location . '" />
        <meta property="og:image" content="' . $OG-IMAGE . '" />
        <meta property="og:site_name" content="' . $OG-SITENAME . '" />';
    }
    
    
}




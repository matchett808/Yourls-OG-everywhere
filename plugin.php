<?php
/*
Plugin Name: Yourls-OG-everywhere
Plugin URI: https://github.com/matchett808/Yourls-OG-everywhere
Description: Add a specific OpenGraph decleration to every redirect that contains a specified string
Version: 0.1
Author: Iain Matchett

*/
// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die(); 

define( 'OG_IMAGE', "" );
define( 'OG_TITLE', "" );
define( 'OG_target', "" );
define( 'OG_SITENAME', "" );

yourls_add_action( 'pre_redirect', 'matchett_og_everywhere' );
function matchett_og_everywhere( $args )
{
    if(strpos($location, $OG_target) !== false )
    {
        echo '<meta property="og:title" content="' . $OG_TITLE .'" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="' . $location . '" />
        <meta property="og:image" content="' . $OG_IMAGE . '" />
        <meta property="og:site_name" content="' . $OG_SITENAME . '" />';
    }
    
    
}




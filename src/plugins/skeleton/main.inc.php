<?php
/*
Version: 1.0
Plugin Name: Skeleton
Plugin URI: // Here comes a link to the Piwigo extension gallery, after
           // publication of your plugin. For auto-updates of the plugin.
Author: // Good practice to put your forum username here.
Description: The skeleton for a Piwigo plugin, providing 'Hello world!'.
*/

// Chech whether we are indeed included by Piwigo.
if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
 
// Define the path to our plugin.
define('SKELETON_PATH', PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');

// Hook on to an event to show the administration page.
add_event_handler('get_admin_plugin_menu_links', 'skeleton_admin_menu');

// Add an entry to the 'Plugins' menu.
function skeleton_admin_menu($menu) {
 array_push(
   $menu,
   array(
     'NAME'  => 'Skeleton',
     'URL'   => get_admin_plugin_menu_link(dirname(__FILE__)).'/admin.php'
   )
 );
 return $menu;
}





?>


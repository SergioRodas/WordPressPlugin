<?php
/**
 * @package SRodasPlugin
 */

 /*
 Plugin Name: SRodas Plugin
 Plugin URI: https://sergiorodas.com/
 Description: This is a my first attempt on writing a custom Plugin for this amazing tutoria series.
 Version: 1.0.0 
 Author: Sergio Rodas
 Author URI: https://sergiorodas.com/
 License: GPLv2 or later
 Text Domain: srodas-plugin
 */

//  if (! defined('ABSPATH')) {
//      die; 
//  }

// if (!function_exists('add_action')) {
//     echo 'No puedes acceder a este archivo!';
//     exit;
// }

defined('ABSPATH') or die('Hey, what are you doing here? You silly human!');

class SRodasPlugin
{
    function activate() {
        // generated a CPT
        // flush rewrite rules
    }
    
    function deactivate() {
        // flush rewrite rules
    }

    function uninstall() {
        // delete CPT 
        // delete all the plugin data from the DB 
    }

}

if ( class_exists('SRodasPlugin') ) {
    $sRodasPlugin = new SRodasPlugin();
}

// Activation
register_activation_hook(__FILE__, array($sRodasPlugin, 'activate'));

// Deactivation
register_deactivation_hook(__FILE__, array($sRodasPlugin, 'deactivate'));

// Uninstall
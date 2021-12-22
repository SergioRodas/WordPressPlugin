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
    function __construct() {
        add_action('init', array($this, 'custom_post_type'));
    }

    function register() {
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    function activate() {
        // generated a CPT
        $this->custom_post_type();
        // flush rewrite rules
        flush_rewrite_rules();
    }
    
    function deactivate() {
        // flush rewrite rules
    }

    function custom_post_type() {
        register_post_type('book', ['public' => true, 'label' => 'Books']);   
    }

    function enqueue() {
        // enqueue all our scripts
        wp_enqueue_style('mypluginstyle', plugins_url('/assets/mystyle.css', __FILE__));
    }

}

if ( class_exists('SRodasPlugin') ) {
    $sRodasPlugin = new SRodasPlugin();
    $sRodasPlugin->register();
}

// Activation
register_activation_hook(__FILE__, array($sRodasPlugin, 'activate'));

// Deactivation
register_deactivation_hook(__FILE__, array($sRodasPlugin, 'deactivate'));

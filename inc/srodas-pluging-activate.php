<?php
/**
 * @package SRodasPlugin
 */

 class SRodasPluginActivate 
 {
     public static function activate() {
         flush_rewrite_rules();
     }
 }
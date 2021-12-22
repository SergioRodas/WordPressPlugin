<?php
/**
 * @package SRodasPlugin
 */

 class SRodasPluginDeactivate 
 {
     public static function deactivate() {
         flush_rewrite_rules();
     }
 }
<?php
/**
 * Plugin Name: PDF Embedder Pro: 3D FlipBook – PDF Embedder, PDF Flipbook Viewer
 * Plugin URI: https://wordpress.org/plugins/pdf-embed-viewer
 * Description: Enhance your WordPress site with our powerful PDF Embedder plugin, designed for seamless integration and user engagement. Easily display and download PDFs, newsletters, and eBooks using simple shortcodes. Choose from four unique archive page templates and customize URLs to improve SEO. Track reads and downloads for valuable insights, and enjoy features like a dedicated sidebar menu, color adjustment settings, and customizable titles. With multilingual support and quick demo content import, this plugin is perfect for businesses, educators, and content creators looking to streamline document sharing.
 * Version: 1.0.8
 * Stable Tag: trunk
 * Requires at least: 3.0
 * Requires PHP:      7.4
 * Author: Shahadat Hossain
 * Author URI: https://shahadat.com.bd
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: pdf-embed-viewer-pro
 * Domain Path: /languages
 */

if( ! defined('ABSPATH') ) { die( "Don't access directly" ); }

if( ! class_exists( 'PDFEV_PRO' ) ){
    class PDFEV_PRO{

        public function __construct() {
            $this->define_contstants();
            $this->include_plugin_files();        
        }

        public function define_contstants(){
            define( 'PDFEV_PRO_Const_Path', plugin_dir_path(__FILE__) );
            define( 'PDFEV_PRO_Const_URL', plugin_dir_url(__FILE__) );
            define( 'PDFEV_PRO_Const_VERSION', '1.0.0' );
        }

        public static function include_plugin_files() {
            //require_once PDFEV_PRO_Const_Path . 'classes/cpt-register.php';
        }

        public static function activate(){
            update_option('rewrite_rules','');
        }

        public static function deactivate(){
            flush_rewrite_rules();
        }

        public static function uninstall(){
        }

    }

}

if( class_exists( 'PDFEV_PRO' ) ){
    register_activation_hook( __FILE__, array( 'PDFEV_PRO','activate' ) );
    register_deactivation_hook( __FILE__, array( 'PDFEV_PRO','deactivate' ) );
    register_uninstall_hook( __FILE__, array( 'PDFEV_PRO','uninstall' ) );
    $PDFEV_PRO = new PDFEV_PRO();
}
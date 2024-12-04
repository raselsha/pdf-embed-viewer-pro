<?php
/**
 * @author Shahadat Hossain <raselsha@gmail.com>
 * @version 1.0.0
 */
if( ! defined('ABSPATH') ) { die( "Don't access directly" ); }

if( ! class_exists('PDFEV_PRO_Enque_Style') ){
    class PDFEV_PRO_Enque_Style{
        public function __construct()
        {
            add_action('admin_enqueue_scripts',[$this,'backend_style']);
        }

        public function backend_style(){
            wp_enqueue_script( 'default-book-view', PDFEV_PRO_Const_URL.'assets/js/default-book-view.js', ['jquery','wp-color-picker','jquery-ui-core'], PDFEV_PRO_Const_VERSION, false );
            wp_enqueue_script( 'html2canvas', PDFEV_PRO_Const_URL.'assets/js/html2canvas.min.js', [], PDFEV_PRO_Const_VERSION, false );
            wp_enqueue_script( 'pdf.min', PDFEV_PRO_Const_URL.'assets/js/pdf.min.js', [], PDFEV_PRO_Const_VERSION, false );
            wp_enqueue_script( 'pdf.worker', PDFEV_PRO_Const_URL.'assets/js/pdf.worker.js', [], PDFEV_PRO_Const_VERSION, false );
            wp_enqueue_script( 'three-view', PDFEV_PRO_Const_URL.'assets/js/three.min.js', [], PDFEV_PRO_Const_VERSION, false );
            wp_enqueue_script( 'flip-book.js', PDFEV_PRO_Const_URL.'assets/js/flip-book.js', [], PDFEV_PRO_Const_VERSION, false );

        }

    }
    
    $PDFEV_PRO_Enque_Style = new PDFEV_PRO_Enque_Style();
}
<?php
    function add_theme_script(){
        wp_enqueue_style("style", get_stylesheet_url());
        wp_enqueue_style("style", get_template_directory_url() ."style.css", array(),"1.1", "all" );
        wp_enqueue_script("script", get_template_directory_url() ."script.js", array(), 1.1, true );
        if(is_singular() && coments_open() && get_option("thread_coments")){
            wp_enqueue_script("coment-reply");
        }
    }
    add_action("wp_enqueue_scripts","add_theme_scripts");
?>
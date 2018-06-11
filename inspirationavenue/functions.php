<?php


    function inspiration_avenue_assets () {
        
        // Que up Bootstrap 4
        
        wp_enqueue_style('Bootstrap_4','//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css');
        
        // Que up Font Awesome
        
        wp_enqueue_style('font_awesome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        
        // Que up Google fonts
        
        wp_enqueue_style('open-sans-font','//fonts.googleapis.com/cssfamily=Open+Sans:300,400,600');
        wp_enqueue_style('raleway-font','//fonts.googleapis.com/css?family=Raleway');
        wp_enqueue_style('source-sans-pro','//fonts.googleapis.com/css?family=Source+Sans+Pro:200,400');
        wp_enqueue_style('ubuntu-font','//fonts.googleapis.com/css?family=Ubuntu');
       
        // Que up font icons
        wp_enqueue_style('icons','//cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css');
        
        // Que up CSS animations
        wp_enqueue_style('css-animations','//cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css');
        
        // Que up main stylesheet
        
        wp_enqueue_style('inspiration_avenue_main_sytles', get_stylesheet_uri(),null,microtime());
        
        // Que up JQuery
        
        wp_enqueue_script('jquery','//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js');
        
        // Que up Bootstrap JS
        
        wp_enqueue_script('bootstrap-js','//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.bundle.min.js');
        
        // Que up animation JS
        
        wp_enqueue_script('amimation-js','//cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js');
        
        
        // Que up animation JS
        
        wp_enqueue_script('animation-JS', get_theme_file_uri('/js/bs-animation.js'),null,1.0,true);
        
        }

add_action('wp_enqueue_scripts','inspiration_avenue_assets');

?>
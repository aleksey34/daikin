<?php
defined("ABSPATH") || exit();

add_shortcode( 'daikin_custom_logo', 'daikin_custom_logo_shortcode' );

function daikin_custom_logo_shortcode( $atts ){
    if(is_front_page()){
        $logo = '<div class="daikin-top-nav-logo-location">
                    <a class="logo">
                        <span>Daikin</span>
                        <span>сервисный центр</span>
                    </a>
                </div>';
    }else{
        $logo = '<div class="daikin-top-nav-logo-location">
                    <a  href="'.home_url().'" class="logo">
                        <span>Daikin</span>
                        <span>сервисный центр</span>
                    </a>
                </div>';
    }



    return $logo;
}



function child_theme_head_script() { 
?>      
<script src="<?php bloginfo('stylesheet_directory') ?>/js/jquery.touchwipe.min.js"></script>

<script>    
    jQuery(document).ready(function(){
        jQuery('.imagecontainer').touchwipe({
            wipeLeft: function(){ jQuery(".next").click(); },
            wipeRight: function(){ jQuery(".prev").click(); },
             min_move_x: 20,
             min_move_y: 20,
             preventDefaultEvents: false
        })
    });
    </script>
<?php 
}
add_action( 'wp_head', 'child_theme_head_script' );

<?php
add_action("wp_enqueue_scripts", "add_my_script");
function add_my_script(){
    wp_enqueue_style ("worklet_syle". get_template_directory_uri(). "css/main.css")
}

?>

<?php


add_action( 'admin_menu', 'sms_plugin_menu_page' );

function sms_plugin_menu_page(){


    add_menu_page ('SMS', 'SMS Dashboard', 'manage_options', 'sms-dashboard', 'sms_send_data', 'dashicons-open-folder', 18);


}

function sms_send_data(){

?>

<h1> Welcome To The Sms Dashboard </h1>


<?php

}
?>
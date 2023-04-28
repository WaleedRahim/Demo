<?php

// add_action( 'init', 'sms_add_user_role' );


?>



<?php


function sms_add_user_role()
{
    
add_role (
    'sms_manager', 
    'SMS Manager',
    array(

        'read' => true,
        'delete_posts' => true,
        'edit_posts' => true


    ) );


}


function sms_remove_user_role(){

    remove_role('sms_manager');
    
    
    }


    ?>
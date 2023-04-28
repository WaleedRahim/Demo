<?php

/**
 * Plugin Name: SMS
 * Version: 0.1.0
 * License: 0.1.0
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: prefix-plugin-name
*/

?>


<?php

require( plugin_dir_path( __FILE__ ) . "/add-user-role.php" );
require( plugin_dir_path( __FILE__ ) . "/admin-menu.php" );

register_activation_hook(__FILE__, 'sms_add_user_role');
register_deactivation_hook( __FILE__, 'sms_remove_user_role' );





?>
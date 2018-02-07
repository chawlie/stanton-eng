<?php
/**
 * Mr. Chawlie WP Theme
 * http://www.chawlie.com
 *
 * Title: Functions
 * Description: Require all theme functions files.
 * Documentation: http://codex.wordpress.org/Functions_File_Explained
 */
require_once('functions/admin.php');         // For customizing the admin interface
require_once('functions/assets.php');        // Enqueue theme scripts
require_once('functions/menus.php');         // Register navigation menus
require_once('functions/meta.php');          // Functions for declaring meta data
require_once('functions/post-types.php');    // Register theme post-types
require_once('functions/shortcodes.php');    // Register theme shortcodes
require_once('functions/theme-support.php'); // Add theme support
require_once('functions/widgets.php');       // Register custom widgets
require_once('functions/widget-areas.php');  // Create widget areas
?>

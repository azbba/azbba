<?php

/**
 * The main template file
 * 
 * This file is required for a theme.
 * It's used to display a page when nothing more specific matches a query
 * 
 * @package WordPress
 * @subpackage aztheme
 */

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
    die('You cannot access to this page directly');
}


get_header();
?>

<h1>Hello World</h1>

<?php get_footer(); ?>
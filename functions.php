<?php

/**
 * Functions
 * 
 * @package WordPress
 * @subpackage aztheme
 */

use Aztheme\Aztheme;

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
    die('You cannot access to this page directly');
}

require_once wp_normalize_path(get_template_directory() . '/vendor/autoload.php');


// Stop script from run if the main class not exists
if (!class_exists('Aztheme\\Aztheme')) {
    return;
}

/**
 * Instantiates the Aztheme class.
 * Make sure the class is properly set-up.
 * The Aztheme class is a singleton
 * so we can directly access the one true Aztheme object using this function.
 *
 * @return object Aztheme
 */

function Aztheme(): Aztheme
{
    return Aztheme::get_instance();
}

// Run our theme
Aztheme();

// echo '<pre>';
// // Run our theme
// var_dump(Aztheme());

// echo '</pre>';
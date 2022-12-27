<?php

/**
 * The main header template
 * 
 * @package WordPress
 * @subpackage aztheme
 */

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
    die('You cannot access to this page directly');
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
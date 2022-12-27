<?php

/**
 * Initializes Aztheme basic components.
 * 
 * @package WordPress
 * @subpackage aztheme
 */

namespace Aztheme\Setup;

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
    die('You cannot access to this page directly');
}

class Init
{
    /**
     * The Constructor
     */
    public function __construct()
    {
        add_action('after_setup_theme', [$this, 'support']);
    }

    /**
     * Register Wordpress theme supports
     * 
     * @return void
     */
    public function support(): void
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        // Let WordPress manage the document title.
        add_theme_support('title-tag');

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support('post-thumbnails');

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support(
            'html5',
            array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets',
            )
        );

        // Add support for core custom logo.
        $logo_width  = 300;
        $logo_height = 100;

        add_theme_support(
            'custom-logo',
            array(
                'height'               => $logo_height,
                'width'                => $logo_width,
                'flex-width'           => true,
                'flex-height'          => true,
                'unlink-homepage-logo' => true,
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        // Add support for Block Styles.
        add_theme_support('wp-block-styles');

        // Add support for full and wide align images.
        add_theme_support('align-wide');

        // Custom background color.
        add_theme_support(
            'custom-background',
            array(
                'default-color' => 'E6E9EE',
            )
        );
    }
}
<?php

/**
 * Enqueue scripts class
 * 
 * @package WordPress
 * @subpackage aztheme
 */

namespace Aztheme\Setup;

use Aztheme\Config;

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
    die('You cannot access to this page directly');
}

class Enqueue
{
    /**
     * Config object
     * 
     * @access public 
     * @var null|object
     */
    public ?Config $config = null;

    /**
     * The Constructor
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
        add_action('wp_enqueue_scripts', [$this, 'styles']);
        add_action('wp_enqueue_scripts', [$this, 'scripts']);
    }

    /**
     * Enqueue CSS files for the front-end
     * 
     * @return void
     */
    public function styles(): void
    {
        wp_enqueue_style('aztheme', $this->config->css_path . 'aztheme.css', [], '1.0.0');
    }

    /**
     * Enqueue JavaScript files for the front-end
     * 
     * @return void
     */
    public function scripts(): void
    {
        wp_enqueue_script('aztheme-js', $this->config->js_path . 'aztheme.js', [], '1.0.0', true);
        wp_enqueue_style('aztheme', $this->config->css_path . 'aztheme.css', [], '1.0.0');
    }
}
<?php

/**
 * The theme config triat
 * 
 * @package WordPress
 * @subpackage aztheme
 */

namespace Aztheme;

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
    die('You cannot access to this page directly');
}

class Config
{
    /**
     * App Path
     *
     * @access public
     */
    public string $app_path;

    /**
     * App Path
     *
     * @access public
     */
    public string $app_url;

    /**
     * CSS Path
     *
     * @access public
     */
    public string $css_path;

    /**
     * CSS Path
     *
     * @access public
     */
    public string $js_path;

    /**
     * The constructor
     */
    public function __construct()
    {
        $this->app_path = wp_normalize_path(get_template_directory());
        $this->app_url  = wp_normalize_path(get_template_directory_uri());
        $this->css_path = wp_normalize_path($this->app_url . '/assets/css/');
        $this->js_path  = wp_normalize_path($this->app_url . '/assets/js/');
    }
}
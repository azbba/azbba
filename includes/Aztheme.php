<?php

/**
 * The main theme class
 * 
 * @package WordPress
 * @subpackage aztheme
 */

namespace Aztheme;

use Aztheme\Setup\Init;
use Aztheme\Setup\Enqueue;

// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
    die('You cannot access to this page directly');
}

class Aztheme
{

    /**
     * The one, true instance of the Aztheme object.
     * 
     * @static
     * @access private
     * @var null|object
     */
    private static ?Aztheme $instance = null;

    /**
     * Config object
     * 
     * @access public 
     * @var null|object
     */
    public ?Config $config = null;

    /**
     * init
     * 
     * @access public
     * @var null|object
     */
    public ?Init $init = null;

    /**
     * enqueue script
     * 
     * @access public
     * @var null|object
     */
    public ?Enqueue $enqueue = null;

    /**
     * The constructor
     * 
     * @access private
     */
    private function __construct()
    {
        $this->config = new Config();
        $this->init = new Init();
        $this->enqueue = new Enqueue($this->config);
    }

    /**
     * Access the single instance of this class.
     *
     * @return Aztheme
     */
    public static function get_instance(): Aztheme
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
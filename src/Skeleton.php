<?php

namespace VendorName\Skeleton;

class Skeleton
{
    /**
     * @var Skeleton
     */
    private static $instance;

    public static function instance(): self
    {
        if (! isset(self::$instance) && ! (self::$instance instanceof Skeleton)) {
            self::$instance = new Skeleton();
        }

        return self::$instance;
    }

    public function __construct()
    {
        add_action('plugins_loaded', [$this, 'loadTextdomain']);
    }

    public function loadTextdomain(): void
    {
        load_plugin_textdomain(
            ':plugin_textdomain',
            false,
            dirname(plugin_basename(PLUGIN_CONSTANT_PREFIX_PLUGIN_FILE)).'/languages/'
        );
    }
}

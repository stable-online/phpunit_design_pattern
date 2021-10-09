<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/8 5:16 下午
 */

namespace App\create\singleton;

class Bar
{
    /**
     * @var
     */
    private static $instance = null;

    /**
     * @constructor Bar.
     */
    private function __construct()
    {
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/8 5:21 下午
     */
    public static function instance(): Bar
    {
        if (self::$instance === null) {
            self::$instance = new static();
        }
        return self::$instance;
    }


    private function __clone(): void
    {
        // TODO: Implement __clone() method.
    }
}
<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/8 5:15 下午
 */

namespace App\create\singleton;


class Foo
{

    /**
     * @Description:
     * @DateTime   :    2021/10/8 5:16 下午
     * @return Bar
     */
    public function getBar1(): Bar
    {
        return Bar::instance();
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/8 5:17 下午
     */
    public function getBar2(): Bar
    {
        return Bar::instance();
    }
}
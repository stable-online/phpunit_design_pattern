<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/7 9:00 下午
 */

namespace App\behavior\factory;

class S1Type implements PhoneAttr
{
    /**
     * @Description:
     * @DateTime   :    2021/10/7 9:04 下午
     * @return string
     */
    public function getAttr(): string
    {
        return "s1_attr";
    }
}
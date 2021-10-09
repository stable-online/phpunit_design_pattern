<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/7 9:19 下午
 */

namespace App\create\factory;

/**
 * @Class   S2Type
 * @package App\behavior\factory
 */
class S2Type implements PhoneAttr
{

    /**
     * @Description:
     * @DateTime   :    2021/10/7 9:20 下午
     * @return string
     */
    public function getAttr(): string
    {
        return "s2_attr";
    }
}
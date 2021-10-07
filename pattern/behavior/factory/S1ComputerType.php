<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/7 10:17 下午
 */

namespace App\behavior\factory;


class S1ComputerType implements ComputerAttr
{

    public function getAttr(): string
    {
        return "s1_attr";
    }
}
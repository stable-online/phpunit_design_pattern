<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/7 8:42 下午
 */

namespace App\behavior\factory;


use JetBrains\PhpStorm\Pure;

class HpFactory
{

    /**
     * @Description:
     * @DateTime   :    2021/10/7 8:45 下午
     *
     * @param  string  $type
     *
     * @return S1TypeOfPhone
     */
    #[Pure]
    public function make(string $type)
    {
        return new S1TypeOfPhone();
    }
}
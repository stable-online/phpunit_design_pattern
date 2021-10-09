<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/9 10:32 上午
 */

namespace App\struct\decorator;


class Office implements Drink
{

    public function price(): float
    {
        return 1;
    }
}
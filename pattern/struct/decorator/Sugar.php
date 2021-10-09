<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/9 10:38 上午
 */

namespace App\struct\decorator;


class Sugar implements Drink
{
    private Drink $drink;

    /**
     * @constructor Sugar.
     *
     * @param  Drink  $drink
     */
    public function __construct(Drink $drink)
    {
        $this->drink = $drink;
    }

    public function price(): float
    {
        return $this->drink->price() + 0.1;
    }
}
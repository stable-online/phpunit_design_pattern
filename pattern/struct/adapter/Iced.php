<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/9 10:42 上午
 */

namespace App\struct\adapter;


class Iced implements Drink
{
    private $drink;

    /**
     * @constructor Iced.
     *
     * @param  Drink  $drink
     */
    public function __construct(Drink $drink)
    {
        $this->drink = $drink;
    }

    /**
     * @Description:    获取加价价格
     * @DateTime   :    2021/10/9 10:43 上午
     * @return float
     */
    public function price(): float
    {
        return $this->drink->price()+0.2;
    }
}
<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/4 6:45 下午
 */
namespace App\behavior\strategy;

/**
 * @Class   Bike
 * @package App\behavior\strategy
 */
class Bike implements Car
{
    /**
     * @Description:
     * @DateTime   :    2021/10/4 6:46 下午
     * @return string
     */
    public function run(): string
    {
        return "自行车跑.....";
    }
}
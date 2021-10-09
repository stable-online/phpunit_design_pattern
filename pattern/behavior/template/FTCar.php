<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/1 11:22 下午
 */

namespace App\behavior\template;

/**
 * @Class   FTCa
 * @package App\behavior\template
 */
class FTCar extends Car
{
    public function carName(): string
    {
        return "丰田车,";
    }

    public function carGl(): string
    {
        return "红色车轱辘,";
    }

    public function fxp(): string
    {
        return "蓝色方向盘,";
    }

    public function cs(): string
    {
        return "黑色车身";
    }

}
<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/1 11:39 下午
 */

namespace App\behavior\template;


class BcCar extends Car
{
    /**
     * @Description:
     * @DateTime   :    2021/10/1 11:42 下午
     * @return string
     */
    public function carName(): string
    {
        return "奔驰车,";
    }

    public function carGl(): string
    {
        return "白色车轱辘,";
    }

    public function fxp(): string
    {
        return "青色方向盘,";
    }

    public function cs(): string
    {
        return "黄色色车身";
    }
}
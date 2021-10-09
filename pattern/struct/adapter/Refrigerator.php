<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/9 11:13 上午
 */

namespace App\struct\adapter;


class Refrigerator implements RefrigeratorInterface
{

    /**
     * @Description:    冰箱充电成功
     * @DateTime   :    2021/10/9 11:14 上午
     */
    public function chargeInfo1(): string
    {
        return "冰箱已充电";
    }
}
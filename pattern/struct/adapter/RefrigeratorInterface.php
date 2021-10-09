<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/9 11:23 上午
 */

namespace App\struct\adapter;

interface RefrigeratorInterface
{
    /**
     * @Description:    冰箱充电成功
     * @DateTime   :    2021/10/9 11:14 上午
     */
    public function chargeInfo1(): string;
}
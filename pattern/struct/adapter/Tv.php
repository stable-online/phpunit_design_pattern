<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/9 11:16 上午
 */

namespace App\struct\adapter;


class Tv implements TvInterface
{

    /**
     * @Description:
     * @DateTime   :    2021/10/9 11:17 上午
     * @return string
     */
    public function chargeInfo2(): string
    {
        return "电视已充电";
    }
}
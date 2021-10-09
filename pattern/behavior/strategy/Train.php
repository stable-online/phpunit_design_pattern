<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/4 6:54 下午
 */

namespace App\behavior\strategy;


class Train implements Car
{

    /**
     * @inheritDoc
     */
    public function run(): string
    {
        return "火车跑.....";
    }
}
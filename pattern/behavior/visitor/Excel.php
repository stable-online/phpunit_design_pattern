<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/9/30 12:54 下午
 */

namespace App\behavior\visitor;


class Excel implements File
{

    /**
     * @Description:
     * @DateTime   :    2021/9/30 12:54 下午
     * @return string
     */
    public function getContent(): string
    {
        return "Excel";
    }
}
<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/9/29 11:59 下午
 */

namespace App\behavior\state;

interface StateInterface
{
    /**
     * @Description:    返回信息
     * @DateTime   :    2021/9/29 11:47 下午
     * @return string
     */
    public function getStatus(): string;
}
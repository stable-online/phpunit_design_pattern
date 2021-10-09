<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/9/30 11:31 上午
 */

namespace App\behavior\visitor;

interface File
{
    /**
     * @Description:    获取word 的内容
     * @DateTime   :    2021/9/30 11:23 上午
     * @return string
     */
    public function getContent(): string;
}
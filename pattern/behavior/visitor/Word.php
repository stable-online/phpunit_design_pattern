<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/9/30 11:23 上午
 */

namespace App\behavior\visitor;

/**
 * @Class   Word
 * @package App\behavior\visitor
 */
class Word implements File
{
    /**
     * @Description:    获取word 的内容
     * @DateTime   :    2021/9/30 11:23 上午
     * @return string
     */
    public function getContent(): string
    {
        return "456";
    }
}
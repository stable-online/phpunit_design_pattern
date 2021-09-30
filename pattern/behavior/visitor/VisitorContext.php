<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/9/30 1:13 下午
 */

namespace App\behavior\visitor;


class VisitorContext
{
    /**
     * @Description:    添加文件类
     * @DateTime   :    2021/9/30 1:13 下午
     *
     * @param  File  $param
     *
     * @return bool
     */
    public function addFile(File $param): bool
    {
        return true;
    }
}
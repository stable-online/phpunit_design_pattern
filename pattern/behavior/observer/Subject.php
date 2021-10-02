<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/2 2:40 下午
 */

namespace App\behavior\observer;


use PHPUnit\Framework\MockObject\MockObject;

class Subject
{

    /**
     * @Description:
     * @DateTime   :    2021/10/2 2:42 下午
     *
     * @param  Observer|MockObject  $mockObject
     *
     * @return bool
     */
    public function attach(Observer|MockObject $mockObject): bool
    {
        return true;
    }
}
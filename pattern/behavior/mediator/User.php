<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/4 9:39 下午
 */

namespace App\behavior\mediator;

interface User
{
    /**
     * @Description:
     * @DateTime   :    2021/10/4 9:37 下午
     *
     * @param  string  $msg
     *
     * @return string
     */
    public function notify(string $msg): string;
}
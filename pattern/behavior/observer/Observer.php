<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/2 2:37 下午
 */

namespace App\behavior\observer;

/**
 * @Interface Observer
 * @package   App\behavior\observer
 */
interface Observer
{
    /**
     * @Description:
     * @DateTime   :    2021/10/2 3:00 下午
     *
     * @param  string  $message
     *
     * @return mixed
     */
    public function notify(string $message): mixed;
}
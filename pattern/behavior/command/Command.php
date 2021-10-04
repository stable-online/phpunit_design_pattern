<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/4 8:42 下午
 */

namespace App\behavior\command;

/**
 * @Interface Command   命令接口
 * @package   App\behavior\command
 */
interface Command
{
    /**
     * @Description:
     * @DateTime   :    2021/10/4 8:45 下午
     *
     * @param  string  $msg
     *
     * @return void
     */
    public function run(string $msg): void;
}

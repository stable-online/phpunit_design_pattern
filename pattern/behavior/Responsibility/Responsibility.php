<?php
/**
 * @className:
 * @User: zw
 * @DateTime: 2021/10/3 11:01 下午
 */

namespace App\behavior\Responsibility;

use PHPUnit\Framework\MockObject\MockObject;

interface Responsibility
{
    /**
     * @Description: 添加责任对象
     * @DateTime:    2021/10/3 11:13 下午
     * @param Responsibility|MockObject|null $responsibility
     * @return mixed
     */
    public function setResponsibility(Responsibility|MockObject|null $responsibility): bool;

    /**
     * @Description: 执行
     * @DateTime:    2021/10/3 11:24 下午
     * @param string $msg
     * @return mixed
     */
    public function handle(string $msg): string;
}
<?php
/**
 * @className:
 * @User: zw
 * @DateTime: 2021/10/4 10:26 上午
 */

namespace App\behavior\Responsibility;


use PHPUnit\Framework\MockObject\MockObject;

class Filter2 implements Responsibility
{

    /**
     * @Description:
     * @DateTime:    2021/10/4 10:26 上午
     * @param Responsibility|MockObject|null $responsibility
     * @return bool
     */
    public function setResponsibility(Responsibility|MockObject|null $responsibility): bool
    {
        // TODO: Implement setResponsibility() method.
    }

    /**
     * @Description:
     * @DateTime:    2021/10/4 10:26 上午
     * @param string $msg
     * @return string
     */
    public function handle(string $msg): string
    {
        // TODO: Implement handle() method.
    }
}
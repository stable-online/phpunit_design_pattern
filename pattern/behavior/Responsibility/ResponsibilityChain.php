<?php
/**
 * @className:
 * @User: zw
 * @DateTime: 2021/10/3 11:03 下午
 */

namespace App\behavior\Responsibility;


use PHPUnit\Framework\MockObject\MockObject;

class ResponsibilityChain
{
    /**
     * @var Responsibility|MockObject
     */
    private Responsibility|MockObject $header;

    /**
     * @Description:
     * @DateTime:    2021/10/3 11:08 下午
     * @param Responsibility|MockObject $object
     * @return bool
     */
    public function addResponsibility(Responsibility|MockObject $object): bool
    {
//        $this->header = $object;
//        $this->tail = $object;

        return true;
    }
}
<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/9/29 11:39 下午
 */

namespace App\behavior;

use JetBrains\PhpStorm\Pure;

/**
 * @Class   Person
 * @package App\behavior
 */
class Person
{
    /**
     * @var string
     */
    private string $timeSlot;

    /**
     * @constructor Person.
     *
     * @param  string  $timeSlot
     */
    public function __construct(string $timeSlot)
    {
        $this->timeSlot = $timeSlot;
    }

    /**
     * @Description:    获取当前的状态
     * @DateTime   :    2021/9/29 11:40 下午
     */
    #[Pure]
    public function getStatus(): string
    {
        $morning = new Morning($this);
        return $morning->getStatus();
    }
}
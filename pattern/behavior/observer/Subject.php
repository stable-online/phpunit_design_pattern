<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/2 2:40 下午
 */
namespace App\behavior\observer;

use PHPUnit\Framework\MockObject\MockObject;

/**
 * @Class   Subject
 * @package App\behavior\observer
 */
class Subject
{
    /**
     * @var array
     */
    private array $observer;

    /**
     * @Description:
     * @DateTime   :    2021/10/2 2:42 下午
     *
     * @param  Observer|MockObject  $observer
     *
     * @return bool
     */
    public function attach(Observer|MockObject $observer): bool
    {
        $this->observer[] = $observer;

        return true;
    }
}
<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/8 11:07 下午
 */

namespace App\struct\flyweight;

/**
 * @Class   Battery
 * @package App\struct\flyweight
 */
class Battery
{
    /**
     * @var
     */
    public int $percentage = 100;

    /**
     * @Description:    减去百分比
     * @DateTime   :    2021/10/8 11:09 下午
     */
    public function subPercentage(): int
    {
        return $this->percentage--;
    }
}
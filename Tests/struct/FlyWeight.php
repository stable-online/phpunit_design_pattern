<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/8 11:00 下午
 */

namespace struct;


use App\struct\flyweight\FlyWeightFactory;
use PHPUnit\Framework\TestCase;

class FlyWeight extends TestCase
{
    /**
     * @Description:    测试电池电量
     * @DateTime   :    2021/10/8 11:00 下午
     */
    public function test_battery_percentage()
    {
        $flyWeight = new FlyWeightFactory();

        $this->assertEquals(100,$flyWeight->make("battery")->subPercentage());

        $this->assertEquals(99,$flyWeight->make("battery")->subPercentage());
    }
}
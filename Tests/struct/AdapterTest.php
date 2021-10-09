<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/9 11:08 上午
 */

namespace struct;

use App\struct\adapter\Refrigerator;
use PHPUnit\Framework\TestCase;

/**
 * @Class   AdapterTest
 * @package struct
 */
class AdapterTest extends TestCase
{
    /**
     * @Description:    测试冰箱的充电的信息
     * @DateTime   :    2021/10/9 11:11 上午
     */
    public function test_refrigerator_charge_info()
    {
        $refrigerator = new Refrigerator();

        $this->assertEquals("冰箱已充电",$refrigerator->chargeInfo());
    }
}
<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/7 8:36 下午
 */
namespace behavior;

use App\behavior\factory\HpFactory;
use App\behavior\factory\S1TypeOfPhone;
use PHPUnit\Framework\TestCase;

/**
 * @Class   FactoryTest
 * @package behavior
 */
class FactoryTest extends TestCase
{
    /**
     * @Description:
     * @DateTime   :    2021/10/7 8:39 下午
     */
    public function test_get_S1Type_From_HpFactory()
    {
        $hpFactory = new HpFactory();

        $this->assertInstanceOf(S1TypeOfPhone::class,$hpFactory->make("s1"));
    }
}
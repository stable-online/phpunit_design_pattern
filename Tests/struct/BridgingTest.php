<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/8 7:17 下午
 */

namespace struct;


use App\struct\briding\AppleBrand;
use App\struct\briding\HwBrand;
use App\struct\briding\FunctionBridging1;
use App\struct\briding\FunctionBridging2;
use PHPUnit\Framework\TestCase;

class BridgingTest extends TestCase
{
    /**
     * @Description:    测试苹果品牌软件
     * @DateTime   :    2021/10/8 7:17 下午
     */
    public function test_apple_software()
    {
        $appleBridging = new FunctionBridging1(new AppleBrand());
        $this->assertEquals("苹果拍照",$appleBridging->func1());
        $this->assertEquals("苹果打电话",$appleBridging->func2());
    }

    /**
     * @Description:    测试华为品牌软件
     * @DateTime   :    2021/10/8 7:17 下午
     */
    public function test_hw_software()
    {
        $appleBridging = new FunctionBridging2(new HwBrand());
        $this->assertEquals("华为听音乐",$appleBridging->func1());
        $this->assertEquals("华为打地鼠",$appleBridging->func2());
    }
}
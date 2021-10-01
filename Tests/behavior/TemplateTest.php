<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/1 11:18 下午
 */

namespace behavior;

use App\behavior\template\FTCa;
use PHPUnit\Framework\TestCase;

/**
 * @Class   TemplateTest
 * @package behavior
 */
class TemplateTest extends TestCase
{
    /**
     * @Description:    测试丰田车
     * @DateTime   :    2021/10/1 11:19 下午
     */
    public function test_fT()
    {
        $FTCa = new FTCa();
        $this->assertEquals("丰田车,红色车轱辘,蓝色方向盘,黑色车身",$FTCa->getCar());
    }
}
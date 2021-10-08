<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/8 2:56 下午
 */

namespace create;


use App\create\builder\XiaoMing;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    /**
     * @Description:    测试小明的介绍信息
     * @DateTime   :    2021/10/8 2:57 下午
     */
    public function test_xm_introduce()
    {
        $xiaoMing = new XiaoMing('1', '2', '3', '5');

        $this->assertEquals("身高:1,体重:2,爱好:3,年龄:5;",$xiaoMing->introduce());
    }
}
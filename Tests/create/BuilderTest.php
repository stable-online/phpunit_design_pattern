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
        $xiaoMing = XiaoMing::builder();

        $xiaoMing->setHeight("1");
        $xiaoMing->setWeight("2");
        $xiaoMing->setHobby("3");
        $xiaoMing->setAge("5");
        $xiaoMing->setOccupation("");
        $this->assertEquals("身高:1,体重:2,爱好:3,年龄:5;职业:;",$xiaoMing->run()->introduce());
    }

    /**
     * @Description:    测试小明的介绍信息
     * @DateTime   :    2021/10/8 2:57 下午
     */
    public function test_add_introduce_to_xm()
    {
        $xiaoMing = XiaoMing::builder();

        $xiaoMing->setHeight("1");
        $xiaoMing->setWeight("2");
        $xiaoMing->setHobby("3");
        $xiaoMing->setAge("5");
        $xiaoMing->setOccupation("6");

        $this->assertEquals("身高:1,体重:2,爱好:3,年龄:5;职业:6;",$xiaoMing->run()->introduce());
    }
}
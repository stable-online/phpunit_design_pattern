<?php
/**
 * @className:
 * @User: zw
 * @DateTime: 2021/10/3 10:55 下午
 */
namespace behavior;

use App\behavior\Responsibility\Filter1;
use App\behavior\Responsibility\Filter2;
use App\behavior\Responsibility\Responsibility;
use App\behavior\Responsibility\ResponsibilityChain;
use PHPUnit\Framework\TestCase;

/**
 * 责任链模式
 * @Class ResponsibilityChainTest
 * @package behavior
 */
class ResponsibilityChainTest extends TestCase
{
    /**
     * @Description: 给定责任链, 当添加一个责任对象后,返回为true
     * @DateTime:    2021/10/3 10:57 下午
     */
    public function test_give_chain_when_add_responsibility_then_true()
    {
        $mockObject = $this->createMock(Responsibility::class);

        $responsibilityChain = new ResponsibilityChain();

        $this->assertTrue($responsibilityChain->addResponsibility($mockObject));
    }

    /**
     * @Description:
     * @DateTime:    2021/10/3 11:34 下午
     */
    public function test_when_chain_is_empty_then_null()
    {
        $responsibilityChain = new ResponsibilityChain();

        $this->assertEquals("你是一个很傻很丑狗子",$responsibilityChain->handler('你是一个很傻很丑狗子'));
    }

    /**
     * @Description: 检测输入的值
     * @DateTime:    2021/10/4 10:14 上午
     */
    public function test_filter1_input()
    {
        //设置责任链
        $responsibilityChain = new ResponsibilityChain();

        //设置桩点
        $mockObject = $this->getMockBuilder(Filter1::class)->onlyMethods(["handle","setResponsibility"])->getMock();
        $mockObject->expects($this->once())->method("handle")->with($this->equalTo("你是一个很傻狗子"));

        //设置责任链信息
        $responsibilityChain->addResponsibility($mockObject);

        //传值
        $responsibilityChain->handler("你是一个很傻狗子");
    }

    /**
     * @Description: 验证输出值
     * @DateTime:    2021/10/4 10:03 上午
     */
    public function test_filter1_output()
    {
        $responsibilityChain = new ResponsibilityChain();

        $responsibilityChain->addResponsibility(new Filter1());

        $this->assertEquals("你是一个狗子",$responsibilityChain->handler("你是一个很傻狗子"));
    }

    /**
     * @Description: 检测输入的值
     * @DateTime:    2021/10/4 10:14 上午
     */
    public function test_filter2_input()
    {
        //设置责任链
        $responsibilityChain = new ResponsibilityChain();

        //设置桩点
        $mockObject = $this->getMockBuilder(Filter2::class)->onlyMethods(["handle","setResponsibility"])->getMock();
        $mockObject->expects($this->once())->method("handle")->with($this->equalTo("你是一个很丑狗子"));

        //设置责任链信息
        $responsibilityChain->addResponsibility($mockObject);

        //传值
        $responsibilityChain->handler("你是一个很丑狗子");
    }

    /**
     * @Description: 检测输出的值
     * @DateTime:    2021/10/4 10:14 上午
     */
    public function test_filter2_output()
    {
        $responsibilityChain = new ResponsibilityChain();

        $responsibilityChain->addResponsibility(new Filter2());

        $this->assertEquals("你是一个狗子",$responsibilityChain->handler("你是一个很丑狗子"));
    }


}
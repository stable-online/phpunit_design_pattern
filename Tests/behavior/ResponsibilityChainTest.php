<?php
/**
 * @className:
 * @User: zw
 * @DateTime: 2021/10/3 10:55 下午
 */
namespace behavior;

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

        $this->assertNull($responsibilityChain->handler());
    }
}
<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/4 2:54 下午
 */

namespace behavior;

use App\behavior\Interpreter\CalculatorService;
use PHPUnit\Framework\TestCase;

/**
 * 解释器模式
 * @Class   InterpreterTest
 * @package behavior
 */
class InterpreterTest extends TestCase
{
    /**
     * @Description:    不存在语法时
     * @DateTime   :    2021/10/4 2:55 下午
     */
    public function test_when_not_found_syntax_then_runtimeException()
    {
        $this->expectException(\RuntimeException::class);
        $calculatorService = new CalculatorService();

        $this->assertEquals(2, $calculatorService->call(1, "adds", 1));
    }

    /**
     * @Description:    当输入1+2等于2
     * @DateTime   :    2021/10/4 3:33 下午
     */
    public function test_when_1_add_1_then_return_2()
    {
        $calculatorService = new CalculatorService();

        $this->assertEquals(2,$calculatorService->call(1,"add",1));
    }
}
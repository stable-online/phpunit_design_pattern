<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/4 3:08 下午
 */

namespace App\behavior\interpreter;

/**
 * @Class   CalculatorService
 * @package App\behavior\Interpreter
 */
class CalculatorService
{
    use CalculatorTrait;

    /**
     * @Description:    动态代理模式
     * @DateTime   :    2021/10/4 3:16 下午
     *
     * @param  int|float  $int  $int
     * @param  string     $quota
     * @param  int|float  $int1
     *
     * @return int|float
     */
    public function call(int|float $int, string $quota, int|float $int1): int|float
    {
        $method = $quota."Required";

        if(method_exists($this, $method)){
            return call_user_func([$this,$method],$int,$int1);
        }

        throw new \RuntimeException("syntax error: not found interpreter",1000);
    }
}
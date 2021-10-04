<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/4 3:19 下午
 */

namespace App\behavior\Interpreter;


trait CalculatorTrait
{
    /**
     * @Description:
     * @DateTime   :    2021/10/4 3:36 下午
     *
     * @param  float|int  $number1
     * @param  float|int  $number2
     *
     * @return float|int
     */
    private function addRequired(float|int $number1, float|int $number2): float|int
    {
        return $number1 + $number2;
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/4 3:36 下午
     *
     * @param  float|int  $number1
     * @param  float|int  $number2
     *
     * @return float|int
     */
    private function subRequired(float|int $number1, float|int $number2): float|int
    {
        return $number1 - $number2;
    }

    /**
     * @Description:    乘
     * @DateTime   :    2021/10/4 3:36 下午
     *
     * @param  float|int  $number1
     * @param  float|int  $number2
     *
     * @return float|int
     */
    private function multiplyRequired(float|int $number1, float|int $number2): float|int
    {
        return $number1 * $number2;
    }

    /**
     * @Description:    除
     * @DateTime   :    2021/10/4 3:36 下午
     *
     * @param  float|int  $number1
     * @param  float|int  $number2
     *
     * @return float|int
     */
    private function dividedRequired(float|int $number1, float|int $number2): float|int
    {
        return $number1 / $number2;
    }
}
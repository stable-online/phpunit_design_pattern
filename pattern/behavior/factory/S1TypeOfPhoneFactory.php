<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/7 9:32 下午
 */

namespace App\behavior\factory;

use JetBrains\PhpStorm\Pure;

/**
 * @Class   S1TypeOfPhoneFactory
 * @package App\behavior\factory
 */
class S1TypeOfPhoneFactory implements TypeFactory
{
    /**
     * @Description:
     * @DateTime   :    2021/10/7 9:34 下午
     * @return S1TypeOfPhone
     */
    #[Pure]
    public function typeOfPhone(): TypeOfPhone
    {
        return new S1TypeOfPhone(new S1Type(),new S1ComputerType());
    }
}
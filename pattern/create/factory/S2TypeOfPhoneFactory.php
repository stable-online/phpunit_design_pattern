<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/7 9:35 下午
 */

namespace App\create\factory;


use JetBrains\PhpStorm\Pure;

class S2TypeOfPhoneFactory implements TypeFactory
{

    /**
     * @Description:
     * @DateTime   :    2021/10/7 9:36 下午
     * @return S2TypeOfPhone
     */
    #[Pure]
    public function typeOfPhone(): TypeOfPhone
    {
        return new S2TypeOfPhone(new S2Type(),new S1ComputerType());
        // TODO: Implement typeOfPhone() method.
    }
}
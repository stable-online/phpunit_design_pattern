<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/7 9:10 下午
 */

namespace App\behavior\factory;


class S2TypeOfPhone implements TypeOfPhone
{
    /**
     * @var PhoneAttr
     */
    private PhoneAttr $phoneAttr;

    /**
     * @constructor S1TypeOfPhone.
     *
     * @param  PhoneAttr  $phoneAttr
     */
    public function __construct(PhoneAttr $phoneAttr)
    {
        $this->phoneAttr = $phoneAttr;
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/7 9:18 下午
     * @return string
     */
    public function getAttr(): string
    {
        return $this->phoneAttr->getAttr();
    }
}
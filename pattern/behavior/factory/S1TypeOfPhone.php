<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/7 8:44 下午
 */
namespace App\behavior\factory;

/**
 * @Class   S1TypeOfPhone
 * @package App\behavior\factory
 */
class S1TypeOfPhone
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
     * @Description:    get attr from phone
     * @DateTime   :    2021/10/7 8:51 下午
     */
    public function getAttr(): string
    {
        return $this->phoneAttr->getAttr();
    }
}
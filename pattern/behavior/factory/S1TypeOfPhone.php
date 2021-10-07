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
class S1TypeOfPhone implements TypeOfPhone
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
    public function getPhoneAttr(): string
    {
        return $this->phoneAttr->getAttr();
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/7 10:08 下午
     * @return string
     */
    public function getComputerAttr(): string
    {
        return "s1_attr";
    }
}
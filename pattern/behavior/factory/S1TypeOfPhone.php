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
     * @var ComputerAttr
     */
    private ComputerAttr $computerAttr;

    /**
     * @constructor S1TypeOfPhone.
     *
     * @param  PhoneAttr     $phoneAttr
     * @param  ComputerAttr  $computerAttr
     */
    public function __construct(PhoneAttr $phoneAttr, ComputerAttr $computerAttr)
    {
        $this->phoneAttr = $phoneAttr;
        $this->computerAttr = $computerAttr;
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
        return $this->computerAttr->getAttr();
    }
}
<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/7 9:14 下午
 */

namespace App\behavior\factory;

/**
 * @Interface TypeOfPhone
 * @package   App\behavior\factory
 */
interface  TypeOfPhone
{
    /**
     * @Description:    获取手机属性
     * @DateTime   :    2021/10/7 10:07 下午
     * @return string
     */
    public function getPhoneAttr(): string;

    /**
     * @Description:
     * @DateTime   :    2021/10/7 10:07 下午
     * @return string
     */
    public function getComputerAttr():string;

}
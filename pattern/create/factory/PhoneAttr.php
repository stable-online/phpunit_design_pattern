<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/7 8:56 下午
 */

namespace App\create\factory;

/**
 * @Interface PhoneAttr
 * @package   App\behavior\factory
 */
interface PhoneAttr
{

    /**
     * @Description:    手机属性
     * @DateTime   :    2021/10/7 8:57 下午
     * @return mixed
     */
    public function getAttr(): string;
}
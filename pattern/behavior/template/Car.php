<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/1 11:27 下午
 */

namespace App\behavior\template;


/**
 * @Class   FTCa
 * @package App\behavior\template
 */
abstract class Car
{
    /**
     * @Description:    车的信息
     * @DateTime   :    2021/10/1 11:23 下午
     * @return string
     */
    public function getCar(): string
    {
        return $this->carName().$this->carGl().$this->fxp().$this->cs();
    }

    /**
     * @Description:    车的名称
     * @DateTime   :    2021/10/1 11:29 下午
     * @return mixed
     */
    public abstract function carName() : string;

    /**
     * @Description:    车轱辘
     * @DateTime   :    2021/10/1 11:34 下午
     * @return string
     */
    public abstract function carGl() : string;

    /**
     * @Description:    方向盘
     * @DateTime   :    2021/10/1 11:34 下午
     * @return string
     */
    public abstract function fxp() : string;


    /**
     * @Description:    车身
     * @DateTime   :    2021/10/1 11:35 下午
     * @return string
     */
    public abstract function cs() : string;
}
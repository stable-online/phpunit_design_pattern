<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/8 7:21 下午
 */

namespace App\struct\briding;


class FunctionBridging1 implements Functions
{
    /**
     * @var Brand
     */
    private Brand $brand;

    /**
     * @constructor FunctionBridging1.
     *
     * @param  Brand  $brand
     */
    public function __construct(Brand $brand)
    {
        $this->brand = $brand;
    }

    /**
     * @Description:    拍照
     * @DateTime   :    2021/10/8 7:23 下午
     */
    public function func1(): string
    {
        return $this->brand->getBrand()."拍照";
    }

    /**
     * @Description:    打电话
     * @DateTime   :    2021/10/8 7:24 下午
     */
    public function func2(): string
    {
        return $this->brand->getBrand()."打电话";
    }
}
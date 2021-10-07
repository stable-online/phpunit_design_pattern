<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/7 8:42 下午
 */

namespace App\behavior\factory;


use http\Exception\RuntimeException;
use JetBrains\PhpStorm\Pure;

class HpFactory
{
    /**
     * @var array
     */
    private array $typeMap;

    /**
     * @constructor HpFactory.
     */
    public function __construct()
    {
        $this->loadTypeMap();
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/7 8:45 下午
     *
     * @param  string  $type
     *
     * @return S1TypeOfPhone
     */
    public function make(string $type): TypeOfPhone
    {
        if ($TypeOfPhone = $this->typeMap[$type]) {
            return $TypeOfPhone;
        }
        throw new RuntimeException("not fount type class", 400);
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/7 9:24 下午
     */
    private function loadTypeMap()
    {
        $this->typeMap = [
            "s1" => new S1TypeOfPhone(new S1Type()),
            "s2" => new S2TypeOfPhone(new S2Type()),
        ];
    }
}
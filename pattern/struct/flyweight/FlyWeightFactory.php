<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/8 11:05 下午
 */

namespace App\struct\flyweight;


class FlyWeightFactory
{
    /**
     * @var
     */
    private array $maps = [];

    /**
     * @Description:
     * @DateTime   :    2021/10/8 11:08 下午
     *
     * @param  string  $type
     *
     * @return Battery|null
     */
    public function make(string $type): ?Battery
    {
        error_reporting(E_ERROR);

        if($this->maps[$type] === null){
            $this->maps[$type] = new Battery();
        }

        return $this->maps[$type];
    }
}
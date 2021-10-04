<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/4 6:40 下午
 */

namespace App\behavior\strategy;

/**
 * @Class   CarFactory
 * @package App\behavior\strategy
 */
class CarFactory
{
    /**
     * @var array
     */
    private array $carList;

    /**
     * @Description:
     * @DateTime   :    2021/10/4 6:41 下午
     *
     * @param  string  $carName
     * @param  Car     $car
     *
     * @return bool
     */
    public function addCar(string $carName, Car $car): bool
    {
        $this->carList[$carName] = $car;
        return true;
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/4 6:52 下午
     *
     * @param  string  $string
     *
     * @return mixed
     */
    public function get(string $string): mixed
    {
        return $this->carList[$string];
    }
}
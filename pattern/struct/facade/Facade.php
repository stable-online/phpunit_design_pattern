<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/9 1:45 下午
 */

namespace App\struct\facade;


use JetBrains\PhpStorm\Pure;

class Facade
{
    private Aircraft $aircraft;
    private Hotel $hotel;
    private Play $play;

    /**
     * @constructor Facade.
     */
    #[Pure]
    public function __construct()
    {
        $this->aircraft = new Aircraft();
        $this->hotel    = new Hotel();
        $this->play     = new Play();
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/9 1:46 下午
     */
    #[Pure]
    public function run(): string
    {
        return $this->aircraft->run().$this->hotel->run().$this->play->run();
    }
}
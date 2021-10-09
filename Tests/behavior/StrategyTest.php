<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/4 6:36 下午
 */
namespace behavior;

use App\behavior\strategy\Bike;
use App\behavior\strategy\CarFactory;
use App\behavior\strategy\Train;
use PHPUnit\Framework\TestCase;

/**
 * @Class   StrategyTest
 * @package behavior
 */
class StrategyTest extends TestCase
{
    /**
     * @Description:    工厂添加自行车
     * @DateTime   :    2021/10/4 6:36 下午
     */
    public function test_add_bike_is_true()
    {
        $carFactory = new CarFactory();

        $this->assertTrue($carFactory->addCar('bike', new Bike()));
    }

    /**
     * @Description:    工厂添加自行车
     * @DateTime   :    2021/10/4 6:36 下午
     */
    public function test_get_bike()
    {
        $carFactory = new CarFactory();

        $carFactory->addCar('bike', new Bike());

        $this->assertInstanceOf(Bike::class, $carFactory->get('bike'));
    }

    /**
     * @Description:    工厂内获取火车
     * @DateTime   :    2021/10/4 6:36 下午
     */
    public function test_get_train()
    {
        $carFactory = new CarFactory();

        $carFactory->addCar('bike', new Bike());
        $carFactory->addCar('train', new Train());

        $this->assertInstanceOf(Train::class, $carFactory->get('train'));
    }
}
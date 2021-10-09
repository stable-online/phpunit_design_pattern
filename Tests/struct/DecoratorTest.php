<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/9 10:29 上午
 */

namespace struct;


use App\struct\decorator\Drink;
use App\struct\decorator\Iced;
use App\struct\decorator\Office;
use App\struct\decorator\Sugar;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    /**
     * @Description:    测试咖啡金额
     * @DateTime   :    2021/10/9 10:30 上午
     */
    public function test_coffee_price()
    {
        $office = new Office();

        $this->assertEquals(1,$office->price());
    }


    /**
     * @Description:    测试咖啡加糖的金额
     * @DateTime   :    2021/10/9 10:35 上午
     */
    public function test_coffee_add_sugar_price()
    {
        $office = new Sugar(new Office());

        $this->assertEquals(1.1,$office->price());
    }

    /**
     * @Description:    测试咖啡加冰的价格
     * @DateTime   :    2021/10/9 10:41 上午
     */
    public function test_coffee_add_iced_price()
    {
        $office = new Iced(new Office());

        $this->assertEquals(1.2,$office->price());
    }

    /**
     * @Description:    测试咖啡加冰和加糖的价格
     * @DateTime   :    2021/10/9 10:41 上午
     */
    public function test_coffee_add_sugar_iced_price()
    {
        /** @var Drink $drink 咖啡*/
        $drink = new Office();

        $addSugarAtCoffee = new Sugar($drink);

        $addSugarAndIcedAtCoffee = new Iced($addSugarAtCoffee);

        $this->assertEquals(1.3,$addSugarAndIcedAtCoffee->price());
    }

}
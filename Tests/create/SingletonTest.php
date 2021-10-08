<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/8 5:12 下午
 */

namespace create;


use App\create\singleton\Bar;
use App\create\singleton\Foo;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    /**
     * @Description:    从foo中多次获取bar对象
     * @DateTime   :    2021/10/8 5:14 下午
     */
    public function test_get_bar_instance()
    {
        $foo = new Foo();

        $this->assertInstanceOf(Bar::class,$foo->getBar1());
        $this->assertInstanceOf(Bar::class,$foo->getBar2());
    }
}
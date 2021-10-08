<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/8 5:44 下午
 */

namespace create;


use App\create\prototype\Foo;
use App\create\prototype\Foo1;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    /**
     * @Description:    浅拷贝测试
     * @DateTime   :    2021/10/8 5:14 下午
     */
    public function test_shall_copy()
    {
        $foo = new Foo();

        $copyFoo = $foo->copy();
        $this->assertInstanceOf(Foo::class, $copyFoo);

        $foo->setValueParameter(1);
        $this->assertEquals(1,$copyFoo->getValueParameter());
    }

    /**
     * @Description:    浅拷贝测试
     * @DateTime   :    2021/10/8 5:14 下午
     */
    public function test_deep_copy()
    {
        $foo = new Foo1();

        $copyFoo = $foo->copy();
        $this->assertInstanceOf(Foo1::class, $copyFoo);

        $foo->setValueParameter(1);
        $this->assertNull($copyFoo->getValueParameter());
    }
}
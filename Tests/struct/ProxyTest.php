<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/8 6:38 下午
 */

namespace struct;


use App\struct\proxy\ImagerService;
use App\struct\proxy\Proxy;
use PHPUnit\Framework\TestCase;

/**
 * @Class   ProxyTest
 * @package struct
 */
class ProxyTest extends TestCase
{
    /**
     * @Description:    测试代理模式
     * @DateTime   :    2021/10/8 6:38 下午
     */
    public function test_proxy_call()
    {
        $proxy = new Proxy(new ImagerService());
        $this->assertEquals("proxy_123.jpg",$proxy->call());
    }
}
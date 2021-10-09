<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/9 1:33 下午
 */

namespace struct;


use App\struct\facade\Aircraft;
use App\struct\facade\Facade;
use App\struct\facade\Hotel;
use App\struct\facade\Play;
use PHPUnit\Framework\TestCase;
use Prophecy\Comparator\Factory;

class FacadeTest extends TestCase
{
    /**
     * @Description:    测试飞机
     * @DateTime   :    2021/10/9 1:34 下午
     */
    public function test_aircraft()
    {
        $aircraft = new Aircraft();

        $this->assertEquals("起飞",$aircraft->run());
    }
    /**
     * @Description:    测试酒店
     * @DateTime   :    2021/10/9 1:34 下午
     */
    public function test_hotel()
    {
        $aircraft = new Hotel();

        $this->assertEquals("住酒店",$aircraft->run());
    }
    /**
     * @Description:    测试玩
     * @DateTime   :    2021/10/9 1:34 下午
     */
    public function test_play()
    {
        $aircraft = new Play();

        $this->assertEquals("玩的很开心",$aircraft->run());
    }

    /**
     * @Description:    测试旅游
     * @DateTime   :    2021/10/9 1:42 下午
     */
    public function test_travel()
    {
        $factory  = new Facade();

        $this->assertEquals("起飞住酒店玩的很开心",$factory->run());
    }

}
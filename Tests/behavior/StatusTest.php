<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/9/29 11:32 下午
 */
namespace behavior;

use App\behavior\Person;
use PHPUnit\Framework\TestCase;

/**
 * @Class   StatusTest
 * @package behavior
 */
class StatusTest extends TestCase
{
    /**
     * @Description:    测试早上时间段状态
     * @DateTime   :    2021/9/29 11:33 下午
     */
    public function test_morning()
    {
        $person = new Person("morning");

        $this->assertEquals("上班",$person->getStatus());
    }

    /**
     * @Description:    测试工作时间
     * @DateTime   :    2021/9/29 11:53 下午
     */
    public function test_work_time()
    {
        $person = new Person("work");

        $this->assertEquals("工作",$person->getStatus());
    }
}
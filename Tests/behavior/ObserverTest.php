<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/2 2:29 下午
 */
namespace behavior;

use App\behavior\observer\Observer;
use App\behavior\observer\Subject;
use PHPUnit\Framework\TestCase;

/**
 * @Class   ObserverTest
 * @package behavior
 */
class ObserverTest extends TestCase
{
    /**
     * @Description:    向观察者类中添加一个被观察者对象
     * @DateTime   :    2021/10/2 2:30 下午
     */
    public function test_addObserverToSubject()
    {
        $mockObject = $this->createMock(Observer::class);

        $subject = new Subject();

        $this->assertTrue($subject->attach($mockObject));
    }
}

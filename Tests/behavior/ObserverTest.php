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

        $subject = new Subject("");

        $this->assertTrue($subject->attach($mockObject));
    }

    /**
     * @Description:    当前观察者接到信息时,被观察者也能接到通知
     * @DateTime   :    2021/10/2 2:47 下午
     */
    public function test_giveNotify()
    {
        //定义被观察者1的信息
        $mockBuilder1 = $this->getMockBuilder(Observer::class)->onlyMethods(['notify'])->getMock();
        $mockBuilder1->expects($this->once())->method('notify')->with($this->equalTo("hello world"));

        //定义被观察者2的信息
        $mockBuilder2 = $this->getMockBuilder(Observer::class)->onlyMethods(['notify'])->getMock();
        $mockBuilder2->expects($this->once())->method('notify')->with($this->equalTo("hello world"));

        //注册观察者
        $subject = new Subject( "hello world");
        $subject->attach($mockBuilder1);
        $subject->attach($mockBuilder2);

        //进行通知
        $subject->notify();
    }
}

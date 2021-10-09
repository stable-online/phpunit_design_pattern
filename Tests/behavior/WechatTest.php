<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/4 9:31 下午
 */

namespace behavior;

use App\behavior\mediator\User1;
use App\behavior\mediator\User2;
use App\behavior\mediator\Wechat;
use PHPUnit\Framework\TestCase;

class WechatTest extends TestCase
{
    /**
     * @Description:
     * @DateTime   :    2021/10/4 9:54 下午
     */
    public function test_add_user_to_wechat()
    {
        $wechat = new Wechat();

        $user1 = new User2($wechat);

        $this->assertTrue($wechat->addUser($user1));
    }

    /**
     * @Description:    验证接受者接收到的信息
     * @DateTime   :    2021/10/4 9:54 下午
     */
    public function test_send_message_to_wechat_user()
    {
        $wechat = new Wechat();

        $user1 = new User1($wechat);
        $wechat->addUser($user1);

        $user2MockObject = $this->getMockBuilder(User2::class)->onlyMethods(["notify"])->getMock();
        $user2MockObject->expects($this->once())->method("notify")->with($this->equalTo("hello world"));
        $wechat->addUser($user2MockObject);

        $user1->send("hello world",$user2MockObject);
    }
}
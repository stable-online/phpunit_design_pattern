<?php
/**
 * @className:
 * @User: zw
 * @DateTime: 2021/10/4 11:55 上午
 */

namespace behavior;

use App\behavior\token\Mp3;
use App\behavior\token\Music;
use JetBrains\PhpStorm\Pure;
use PHPUnit\Framework\TestCase;

/**
 * 备忘录模式测试
 * @Class TokenTest
 * @package behavior
 */
class TokenTest extends TestCase
{
    /**
     * @Description: 存档
     * @DateTime:    2021/10/4 11:56 上午
     */
    public function test_when_call_mp3_close_then_true()
    {
        $mp3 = new Mp3("可惜不是你");

        $this->assertTrue($mp3->close("2021-10-04 01:30:59"));
    }

    /**
     * @Description: 获取存档信息
     * @DateTime:    2021/10/4 1:36 下午
     */
    #[Pure]
    public function test_when_call_mp3_then_music()
    {
        $mp3 = new Mp3("可惜不是你");
        $mp3->close("2021-10-04 01:30:59");

        $this->assertEquals(new Music("可惜不是你","2021-10-04 01:30:59"),$mp3->get());
    }
}
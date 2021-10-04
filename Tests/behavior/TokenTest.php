<?php
/**
 * @className:
 * @User: zw
 * @DateTime: 2021/10/4 11:55 上午
 */

namespace behavior;

use App\behavior\token\Mp3;
use PHPUnit\Framework\TestCase;

/**
 * @Class TokenTest
 * @package behavior
 */
class TokenTest extends TestCase
{
    /**
     * @Description:
     * @DateTime:    2021/10/4 11:56 上午
     */
    public function test_when_call_mp3_close_then_true()
    {
        $mp3 = new Mp3();

        $this->assertTrue($mp3->close());
    }
}
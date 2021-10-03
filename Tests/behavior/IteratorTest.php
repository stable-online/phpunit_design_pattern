<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/9/29 6:20 下午
 */

namespace behavior;

use App\behavior\iterator\IteratorTools;
use PHPUnit\Framework\TestCase;

/**
 * 迭代器模式
 * @Class   IteratorTest
 * @package Iterator
 */
class IteratorTest extends TestCase
{
    /**
     * @Description:    迭代器模式
     * @DateTime   :    2021/9/29 6:21 下午
     */
    public function test_iterator()
    {
        $var = [1, 2, 3, 4];

        $iteratorTools = new IteratorTools($var);

        foreach ($iteratorTools as $key => $val) {
             $this->assertEquals($var[$key], $iteratorTools->current());
        }
    }
}
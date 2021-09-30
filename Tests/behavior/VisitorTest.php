<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/9/30 11:06 上午
 */

namespace behavior;

use App\behavior\visitor\PDF;
use PHPUnit\Framework\TestCase;

/**
 * 访问者模式
 * @Class   VisitorTest
 * @package behavior
 */
class VisitorTest extends TestCase
{
    /**
     * @Description:    测试pdf内容
     * @DateTime   :    2021/9/30 11:11 上午
     */
    public function test_pdf_content()
    {
        $pdf = new PDF();

        $this->assertEquals("123",$pdf->getContent());
    }
}
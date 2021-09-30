<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/9/30 11:06 上午
 */

namespace behavior;

use App\behavior\visitor\Excel;
use App\behavior\visitor\FileNotFoundException;
use App\behavior\visitor\PDF;
use App\behavior\visitor\VisitorA;
use App\behavior\visitor\Word;
use JetBrains\PhpStorm\Pure;
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

    /**
     * @Description:    测试word 内容
     * @DateTime   :    2021/9/30 11:20 上午
     */
    public function test_word_content()
    {
        $word = new Word();

        $this->assertEquals("456",$word->getContent());
    }

    /**
     * @Description:    测试访问者A 访问pdf
     * @DateTime   :    2021/9/30 11:25 上午
     */
    public function test_visitorAToPdf()
    {
        $pdf = new PDF();

        $visitorA = new VisitorA($pdf);

        $this->assertEquals("vistApdf123",$visitorA->visitor());
    }

    /**
     * @Description:    测试访问者A 访问word
     * @DateTime   :    2021/9/30 11:25 上午
     */
    public function test_visitorAToWord()
    {
        $pdf = new Word();

        $visitorA = new VisitorA($pdf);

        $this->assertEquals("vistAword456",$visitorA->visitor());
    }

    /**
     * @Description:    访问者A不存在Excel处理程序时 返回异常
     * @DateTime   :    2021/9/30 12:48 下午
     */
    public function test_visitorAToExcel()
    {
        $this->expectException(FileNotFoundException::class);

        $visitorA = new VisitorA(new Excel());

        $visitorA->visitor();
    }
}
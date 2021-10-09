<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/9 12:52 下午
 */

namespace struct;


use App\struct\composite\Company;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    /**
     * @Description:    测试添加公司
     * @DateTime   :    2021/10/9 12:55 下午
     */
    public function test_add_Company()
    {
        $company = new Company("总公司");

        $son1 = new Company("son1");

        $this->assertTrue($company->add($son1));
    }

    /**
     * @Description:    多级子公司测试
     * @DateTime   :    2021/10/9 1:01 下午
     */
    public function test_get_Company()
    {
        $company = new Company("总公司");

        $son1 = new Company("son1");

        $son1_1 = new Company("son1-1");

        $this->assertTrue($son1->add($son1_1));

        $this->assertTrue($company->add($son1));

        $this->assertEquals("总公司son1son1-1",$company->info());
    }
}
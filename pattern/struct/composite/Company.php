<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/9 12:57 下午
 */

namespace App\struct\composite;


class Company
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var array
     */
    private array $companyList = [];

    /**
     * @constructor Company.
     *
     * @param  string  $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/9 12:57 下午
     *
     * @param  Company  $son1
     *
     * @return bool
     */
    public function add(Company $son1): bool
    {
        $this->companyList[] = $son1;

        return true;
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/9 1:08 下午
     */
    public function name(): string
    {
        return $this->name;
    }


    /**
     * @Description:
     * @DateTime   :    2021/10/9 1:10 下午
     */
    public function info(): string
    {
        $companyInfo = "";

        foreach ($this->companyList as $company){
            $companyInfo .= $company->info();
        }

        return $this->name.$companyInfo;
    }
}
<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/8 3:02 下午
 */

namespace App\create\builder;


class XiaoMing
{
    /**
     * @var string
     */
    private string $height;
    /**
     * @var string
     */
    private string $weight;
    /**
     * @var string
     */
    private string $hobby;
    /**
     * @var string
     */
    private string $age;

    /**
     * @constructor XiaoMing.
     *
     * @param  string  $height
     * @param  string  $weight
     * @param  string  $hobby
     * @param  string  $age
     */
    public function __construct(string $height, string $weight, string $hobby, string $age) {
        $this->height = $height;
        $this->weight = $weight;
        $this->hobby  = $hobby;
        $this->age    = $age;
    }

    public function introduce(): string
    {
        return "身高:{$this->height},体重:{$this->weight},爱好:{$this->hobby},年龄:{$this->age};";
    }
}
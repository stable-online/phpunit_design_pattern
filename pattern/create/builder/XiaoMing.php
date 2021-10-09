<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/8 3:02 下午
 */

namespace App\create\builder;

use JetBrains\PhpStorm\Pure;

class XiaoMing
{
    /**
     * @var object
     */
    private object $builder;

    /**
     * @constructor XiaoMing.
     *
     * @param  object  $builder
     */
    public function __construct(object $builder) {
        $this->builder = $builder;
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/8 4:37 下午
     * @return string
     */
    public function introduce(): string
    {
        return "身高:{$this->builder->height},体重:{$this->builder->weight},爱好:{$this->builder->hobby},年龄:{$this->builder->age};职业:{$this->builder->occupation};";
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/8 4:37 下午
     */
    public static function builder(): object
    {
        return new class  {

            /**
             * @var string 身高
             */
            public string $height;

            /**
             * @var string 体重
             */
            public string $weight;

            /**
             * @var string 爱好
             */
            public string $hobby;

            /**
             * @var string 职业
             */
            public string $occupation;

            /**
             * @var string 年龄
             */
            public string $age;
            /**
             * @Description:    执行
             * @DateTime   :    2021/10/8 4:38 下午
             */
            #[Pure]
            public function run(): XiaoMing
            {
                return new XiaoMing($this);
            }

            /**
             * @param  string  $height
             */
            public function setHeight(string $height): void
            {
                $this->height = $height;
            }


            /**
             * @param  string  $hobby
             */
            public function setHobby(string $hobby): void
            {
                $this->hobby = $hobby;
            }

            /**
             * @param  string  $occupation
             */
            public function setOccupation(string $occupation): void
            {
                $this->occupation = $occupation;
            }

            /**
             * @param  string  $age
             */
            public function setAge(string $age): void
            {
                $this->age = $age;
            }

            /**
             * @param  string  $weight
             */
            public function setWeight(string $weight): void
            {
                $this->weight = $weight;
            }
        };
    }
}
<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/9/29 11:46 下午
 */

namespace App\behavior;


class Morning
{
    /**
     * @var Person
     */
    private Person $person;

    /**
     * @constructor Morning.
     *
     * @param  Person  $person
     */
    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    /**
     * @Description:    返回信息
     * @DateTime   :    2021/9/29 11:47 下午
     * @return string
     */
    public function getStatus(): string
    {
        return "上班";
    }
}
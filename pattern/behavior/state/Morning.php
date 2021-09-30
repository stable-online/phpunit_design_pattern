<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/9/29 11:46 下午
 */

namespace App\behavior\state;


use JetBrains\PhpStorm\Pure;

/**
 * @Class   Morning
 * @package App\behavior
 */
class Morning implements StateInterface
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
    #[Pure]
    public function getStatus(): string
    {
        if($this->person->getTimeSlot() == "morning"){
            return "上班";
        }

        $work = new Work($this->person);
        return $work->getStatus();
    }
}
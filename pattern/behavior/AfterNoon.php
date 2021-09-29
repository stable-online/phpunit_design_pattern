<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/9/30 12:09 上午
 */

namespace App\behavior;

use JetBrains\PhpStorm\Pure;

class AfterNoon implements StateInterface
{
    /**
     * @var Person
     */
    private Person $person;

    /**
     * @constructor AfterNoon.
     *
     * @param  Person  $person
     */
    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    /**
     * @Description:
     * @DateTime   :    2021/9/30 12:12 上午
     * @return string
     */
    #[Pure]
    public function getStatus(): string
    {
        if($this->person->getTimeSlot() == "afternoon"){
            return "下班";
        }
        return "";
    }
}
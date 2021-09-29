<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/9/30 12:00 上午
 */

namespace App\behavior;


use JetBrains\PhpStorm\Pure;

/**
 * @Class   Work
 * @package App\behavior
 */
class Work implements StateInterface
{
    /**
     * @var Person
     */
    private Person $person;

    /**
     * @constructor Work.
     *
     * @param  Person  $person
     */
    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    /**
     * @Description:
     * @DateTime   :    2021/9/30 12:03 上午
     * @return string
     */
    #[Pure]
    public function getStatus(): string
    {
        if($this->person->getTimeSlot() == "work"){
            return "工作";
        }
        return "";
    }
}
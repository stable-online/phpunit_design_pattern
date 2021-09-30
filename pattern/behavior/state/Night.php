<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/9/30 12:16 上午
 */

namespace App\behavior\state;
use JetBrains\PhpStorm\Pure;

/**
 * @Class   Night
 * @package App\behavior
 */
class Night implements StateInterface
{
    /**
     * @var Person
     */
    private Person $person;

    /**
     * @constructor Night.
     *
     * @param  Person  $person
     */
    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    /**
     * @Description:
     * @DateTime   :    2021/9/30 12:16 上午
     */
    #[Pure]
    public function getStatus():string
    {
        if($this->person->getTimeSlot()=="night"){
            return "睡觉";
        }

        return "";
    }
}
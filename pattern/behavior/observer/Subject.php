<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/2 2:40 下午
 */
namespace App\behavior\observer;

use PHPUnit\Framework\MockObject\MockObject;

/**
 * @Class   Subject
 * @package App\behavior\observer
 */
class Subject
{
    /**
     * @var string
     */
    private string $message;

    /**
     * @var array
     */
    private array $observer;

    /**
     * @constructor Subject.
     *
     * @param  string  $message
     */
    public function __construct(string $message)
    {
        $this->message = $message;
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/2 2:42 下午
     *
     * @param  Observer|MockObject  $observer
     *
     * @return bool
     */
    public function attach(Observer|MockObject $observer): bool
    {
        $this->observer[] = $observer;

        return true;
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/2 2:58 下午
     */
    public function notify()
    {
        foreach ($this->observer as $object){
            $object->notify($this->message);
        }
    }
}
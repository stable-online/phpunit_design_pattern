<?php
/**
 * @className:
 * @User: zw
 * @DateTime: 2021/10/4 12:10 下午
 */

namespace App\behavior\token;

/**
 * @Class Music
 * @package App\behavior\token
 */
class Music
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    private string $time;

    /**
     * @constructor Music.
     * @param string $name
     * @param string $closeTime
     */
    public function __construct(string $name,string $closeTime)
    {
        $this->name = $name;
        $this->time = $closeTime;
    }
}
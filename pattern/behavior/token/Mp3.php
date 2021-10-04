<?php
/**
 * @className:
 * @User: zw
 * @DateTime: 2021/10/4 12:01 下午
 */

namespace App\behavior\token;

class Mp3
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var int
     */
    private int $id = 0;

    /**
     * @constructor Mp3.
     * @param string $payingTheMusic 正在播放的音乐名称
     */
    public function __construct(string $payingTheMusic)
    {
        $this->name = $payingTheMusic;
        $this->id++;
    }

    /**
     * @Description: 创建
     * @DateTime:    2021/10/4 12:02 下午
     * @param string $time
     * @return bool
     */
    public function close(string $time): bool
    {
        return MusicManager::close($this->id,$this->name,$time);
    }

    /**
     * @Description:
     * @DateTime:    2021/10/4 1:38 下午
     */
    public function get()
    {
        return MusicManager::get($this->id);
    }
}
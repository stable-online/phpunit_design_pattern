<?php
/**
 * @className:
 * @User: zw
 * @DateTime: 2021/10/4 12:13 下午
 */

namespace App\behavior\token;


class MusicManager
{
    /**
     * @var MusicManager|null
     */
    private static MusicManager|null $instance = null;

    /**
     * @var
     */
    private array $musicList;

    /**
     * @Description:
     * @DateTime:    2021/10/4 12:17 下午
     * @param int $id
     * @param string $name
     * @param string $time
     * @return bool
     */
    private function close(int $id, string $name, string $time): bool
    {
        $this->musicList[$id] = new Music($name,$time);

        return true;
    }

    /**
     * @Description:
     * @DateTime:    2021/10/4 1:39 下午
     * @param int $id
     * @return mixed
     */
    private function get(int $id): mixed
    {
        return $this->musicList[$id];
    }

    /**
     * @Description:
     * @DateTime:    2021/10/4 12:22 下午
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public static function __callStatic(string $name, array $arguments): mixed
    {
        if(is_null(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance->{$name}(...$arguments);
    }
}
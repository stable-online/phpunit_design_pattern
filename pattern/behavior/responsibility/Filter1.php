<?php
/**
 * @className:
 * @User: zw
 * @DateTime: 2021/10/3 11:40 下午
 */
namespace App\behavior\responsibility;

use PHPUnit\Framework\MockObject\MockObject;

/**
 * @Class Filter1
 * @package App\behavior\Responsibility
 */
class Filter1 implements Responsibility
{
    /**
     * @var Responsibility|MockObject|null
     */
    public Responsibility|null|MockObject $nextResponsibility;

    /**
     * @Description:
     * @DateTime:    2021/10/3 11:42 下午
     * @param Responsibility|MockObject|null $responsibility
     * @return bool
     */
    public function setResponsibility(Responsibility|MockObject|null $responsibility): bool
    {
        $this->nextResponsibility = $responsibility;

        return true;
    }

    /**
     * @Description:
     * @DateTime:    2021/10/3 11:43 下午
     * @param string $msg
     * @return void
     */
    public function handle(string $msg): string
    {
        $msg = str_replace("很傻","",$msg);

        if ($this->nextResponsibility != null) {
            return $this->nextResponsibility->handle($msg);
        }

        return $msg;
    }
}
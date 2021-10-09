<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/4 8:40 下午
 */
namespace App\behavior\command;

/**
 * @Class   CommandChain
 * @package App\behavior\command
 */
class CommandChain
{
    /**
     * @var array
     */
    private array $chain;

    /**
     * @Description:
     * @DateTime   :    2021/10/4 8:42 下午
     *
     * @param  Command  $command
     */
    public function addChain(Command $command)
    {
        $this->chain[] = $command;
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/4 8:42 下午
     *
     * @param  string  $msg
     *
     */
    public function run(string $msg): void
    {
        foreach ($this->chain as $command) {
            $command->run($msg);
        }
    }
}
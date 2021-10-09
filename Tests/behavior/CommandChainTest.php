<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/4 8:36 下午
 */

namespace behavior;

use App\behavior\command\Command;
use App\behavior\command\CommandChain;
use PHPUnit\Framework\TestCase;

class CommandChainTest extends TestCase
{
    /**
     * @Description:    测试cat命令
     * @DateTime   :    2021/10/4 8:37 下午
     */
    public function test_cat_command()
    {
        $commandChain = new CommandChain();

        $command = $this->getMockBuilder(Command::class)->onlyMethods(["run"])->getMock();

        $command->expects($this->once())->method("run")->with($this->equalTo("a.txt"));

        $commandChain->addChain($command);

        $commandChain->run("a.txt");
    }
}
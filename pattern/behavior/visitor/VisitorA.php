<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/9/30 11:29 上午
 */

namespace App\behavior\visitor;

use JetBrains\PhpStorm\Pure;

/**
 * @Class   VisitorA
 * @package App\behavior\visitor
 */
class VisitorA
{
    /**
     * @var File
     */
    private File $file;

    /**
     * @constructor VisitorA.
     *
     * @param  File  $word
     */
    public function __construct(File $word)
    {
        $this->file = $word;
    }

    /**
     * @Description:    访问者
     * @DateTime   :    2021/9/30 11:32 上午
     * @return string
     */
    private function visitorPdf(): string
    {
        return "vistApdf".$this->file->getContent();
    }

    /**
     * @Description:    访问者
     * @DateTime   :    2021/9/30 11:32 上午
     * @return string
     */
    private function visitorWord(): string
    {
        return "vistAword".$this->file->getContent();
    }

    /**
     * @Description:
     * @DateTime   :    2021/9/30 11:36 上午
     *
     * @param  string  $name
     * @param  array   $arguments
     *
     * @return string
     */
    public function __call(string $name, array $arguments): string
    {
        if(get_class($this->file) == Word::class){
            return $this->visitorWord();
        }

        if(get_class($this->file) == PDF::class){
            return $this->visitorPdf();
        }
        throw new FileNotFoundException("not found the visitor program");
    }
}
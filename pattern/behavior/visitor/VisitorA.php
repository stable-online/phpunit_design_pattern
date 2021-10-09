<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/9/30 11:29 上午
 */

namespace App\behavior\visitor;

/**
 * @Class   VisitorA
 * @package App\behavior\visitor
 */
class VisitorA
{
    /**
     * @Description:    访问者
     * @DateTime   :    2021/9/30 11:32 上午
     *
     * @param  File  $object
     *
     * @return string
     */
    private function visitorPdf(File $object): string
    {
        return "vistApdf".$object->getContent();
    }

    /**
     * @Description:    访问者
     * @DateTime   :    2021/9/30 11:32 上午
     *
     * @param  File  $object
     *
     * @return string
     */
    private function visitorWord(File $object): string
    {
        return "vistAword".$object->getContent();
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
        /** @var File $object 文件类*/
        $object = $arguments[0];

        if(get_class($object) == Word::class){
            return $this->visitorWord($object);
        }

        if(get_class($object) == PDF::class){
            return $this->visitorPdf($object);
        }

        throw new FileNotFoundException("not found the visitor program");
    }
}
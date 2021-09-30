<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/9/30 1:13 下午
 */
namespace App\behavior\visitor;

/**
 * @Class   VisitorContext
 * @package App\behavior\visitor
 */
class VisitorContext
{
    /**
     * @var array 文件类列表
     */
    private array  $file;

    /**
     * @Description:    添加文件类
     * @DateTime   :    2021/9/30 1:13 下午
     *
     * @param  File  $file
     *
     * @return bool
     */
    public function addFile(File $file): bool
    {
        $this->file[] = $file;

        return true;
    }

    /**
     * @Description:    用访问者进行访问
     * @DateTime   :    2021/9/30 1:34 下午
     *
     * @param  VisitorA  $visitor
     */
    public function visitor(VisitorA $visitor)
    {
        foreach ($this->file as $file){
            $visitor->visitor($file);
        }
    }
}
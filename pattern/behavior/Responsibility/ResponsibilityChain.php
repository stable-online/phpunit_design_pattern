<?php
/**
 * @className:
 * @User: zw
 * @DateTime: 2021/10/3 11:03 下午
 */

namespace App\behavior\Responsibility;


use PHPUnit\Framework\MockObject\MockObject;

class ResponsibilityChain
{

    /**
     * @var Responsibility|MockObject|null
     */
    public Responsibility|null|MockObject $header = null ;


    /**
     * @var Responsibility|MockObject|null
     */
    private Responsibility|null|MockObject $tail = null ;

    /**
     * @Description:
     * @DateTime:    2021/10/3 11:08 下午
     * @param Responsibility|MockObject $object
     * @return bool
     */
    public function addResponsibility(Responsibility|MockObject $object): bool
    {
        $object->setResponsibility(null);

        if ($this->header == null) {
            $this->header = $object;
            $this->tail = $object;
        }

        $this->tail->setResponsibility($object);
        $this->tail = $object;
        return true;
    }

    /**
     * @Description: 执行
     * @DateTime:    2021/10/3 11:35 下午
     */
    public function handler()
    {
        if($this->header != null){
            $this->header->handle();
        }

        return null;
    }
}
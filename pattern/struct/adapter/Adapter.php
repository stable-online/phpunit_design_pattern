<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/9 11:21 上午
 */

namespace App\struct\adapter;

class Adapter
{
    private TvInterface|RefrigeratorInterface $dianQi;

    /**
     * @constructor Adapter.
     *
     * @param    $dianQi
     */
    public function __construct(RefrigeratorInterface|TvInterface $dianQi)
    {
        $this->dianQi = $dianQi;
    }

    /**
     * @Description:    适配充电
     * @DateTime   :    2021/10/9 11:26 上午
     */
    public function charge(): string
    {
        //一个头
        if ($this->dianQi instanceof RefrigeratorInterface) {
            return $this->dianQi->chargeInfo1();
        }

        //两个头
        if ($this->dianQi instanceof TvInterface) {
            return $this->dianQi->chargeInfo2();
        }

        throw new \LogicException("该适配器还未兼容该插头");
    }
}
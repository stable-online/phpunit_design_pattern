<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/8 6:41 下午
 */

namespace App\struct\proxy;


use JetBrains\PhpStorm\Pure;

class Proxy
{
    /**
     * @var ImagerService
     */
    private ImagerService $imagerService;

    /**
     * @constructor Proxy.
     *
     * @param  ImagerService  $imagerService
     */
    public function __construct(ImagerService $imagerService)
    {
        $this->imagerService = $imagerService;
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/8 6:42 下午
     * @return string
     */
    #[Pure]
    public function call(): string
    {
        return "proxy_".$this->imagerService->call();
    }
}
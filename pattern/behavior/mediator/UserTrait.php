<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/4 10:04 下午
 */

namespace App\behavior\mediator;

/**
 * @Trait   UserTrait
 * @package App\behavior\mediator
 */
trait UserTrait
{
    /**
     * @var Wechat|null
     */
    private ?Wechat $wechat;

    /**
     * @constructor User1.
     *
     * @param  Wechat|null  $wechat
     */
    public function __construct(Wechat $wechat = null)
    {
        $this->wechat =$wechat;
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/4 9:52 下午
     *
     * @param  string  $msg
     * @param  User    $user
     */
    public function send(string $msg,User $user)
    {
        $this->wechat->send($msg,$user);
    }
}
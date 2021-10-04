<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/4 9:35 下午
 */

namespace App\behavior\mediator;

class Wechat
{
    /**
     * @var array
     */
    private array $userList;

    /**
     * @Description:
     * @DateTime   :    2021/10/4 9:41 下午
     *
     * @param  string  $msg
     * @param  User    $u
     *
     * @return void
     */
    public function send(string $msg, User $u): void
    {
        $userList = array_filter($this->userList, $this->filterUser($u));

        array_walk($userList, $this->notify($msg));
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/4 9:48 下午
     *
     * @param  User  $user
     *
     * @return bool
     */
    public function addUser(User $user): bool
    {
        $this->userList[] = $user;

        return true;
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/4 9:59 下午
     *
     * @param  User  $u
     *
     * @return \Closure
     */
    protected function filterUser(User $u): \Closure
    {
        return function ($user) use ($u) {
            return $user === $u;
        };
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/4 10:03 下午
     *
     * @param  string  $msg
     *
     * @return \Closure
     */
    protected function notify(string $msg): \Closure
    {
        return function (User $user) use ($msg) {
            $user->notify($msg);
        };
    }
}
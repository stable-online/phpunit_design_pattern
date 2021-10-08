<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/8 5:48 下午
 */

namespace App\create\prototype;


class Bar
{
    /**
     * @var string|null
     */
    private string|null $value = null;

    /**
     * @Description:
     * @DateTime   :    2021/10/8 5:59 下午
     *
     * @param  string  $value
     */
    public function setValueParameter(string $value)
    {
        $this->value = $value;
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/8 6:05 下午
     */
    public function getValueParameter(): ?string
    {
        return $this->value;
    }
}
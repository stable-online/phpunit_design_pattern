<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/8 5:47 下午
 */

namespace App\create\prototype;


use JetBrains\PhpStorm\Pure;

class Foo
{
    /**
     * @var Bar
     */
    private Bar $bar;

    /**
     * @constructor Foo.
     */
    #[Pure]
    public function __construct()
    {
        $this->bar = new Bar();
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/8 5:48 下午
     *
     * @param  string  $value
     *
     */
    public function setValueParameter(string $value) : void
    {
        $this->bar->setValueParameter($value);
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/8 6:05 下午
     * @return string|null
     */
    #[Pure]
    public function getValueParameter(): ?string
    {
        return $this->bar->getValueParameter();
    }

    /**
     * @Description:
     * @DateTime   :    2021/10/8 5:49 下午
     * @return Bar
     */
    #[Pure]
    public function copy(): Foo
    {
        return clone $this;
    }
}
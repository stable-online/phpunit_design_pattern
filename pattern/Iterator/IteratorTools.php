<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/9/29 6:28 下午
 */

namespace App\Iterator;

use JetBrains\PhpStorm\Pure;

class IteratorTools implements \Iterator
{
    /**
     * @var int 数据索引
     */
    private int $index;

    /**
     * @var array
     */
    private array $data;

    /**
     * @constructor IteratorTools.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @Description:
     * @DateTime   :    2021/9/29 6:39 下午
     */
    public function rewind()
    {
        $this->index = 0;
    }

    /**
     * @Description:
     * @DateTime   :    2021/9/29 6:35 下午
     * @return int
     */
    public function current(): int
    {
        return $this->data[$this->index];
    }

    /**
     * @Description:
     * @DateTime   :    2021/9/29 6:46 下午
     */
    public function next()
    {
        $this->index++;
    }

    /**
     * @Description:
     * @DateTime   :    2021/9/29 6:44 下午
     * @return float|bool|int|string|null
     */
    public function key(): float|bool|int|string|null
    {

        return $this->index;
    }

    /**
     * @Description:
     * @DateTime   :    2021/9/29 6:36 下午
     * @return bool
     */
    #[Pure]
    public function valid(): bool
    {
        return $this->index < count($this->data);
    }
}
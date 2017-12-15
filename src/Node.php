<?php
declare(strict_types=1);

namespace MartanLV\Koki;

/**
 * Class Node
 * @author yourname
 */
class Node
{
    /**
     * @var Interval
     */
    public $interval;
    /**
     * @var int
     */
    public $max;
    /**
     * @var Node
     */
    public $left;
    /**
     * @var Node
     */
    public $right;

    /**
     * undocumented function
     *
     * @return void
     */
    public function __construct(IntervalInterface $interval, $left = null, $right = null, $max = 0)
    {
        $this->interval = $interval;
        $this->left = $left;
        $this->right = $right;
        $this->max = $max ? $max : $interval->high;
    }

    /**
     * returns intervals that fall within interval range
     *
     * @return void
     */
    public function all(): array
    {
        return iterator_to_array($this->yieldAll(), false);
    }

    /**
     * undocumented function
     *
     * @return void
     */
    public function yieldAll()
    {
        return $this->yieldSelect(-1, $this->max + 1);
    }
    
    /**
     * returns intervals that fall within interval range
     *
     * @return void
     */
    public function select(int $low, int $high): array
    {
        return iterator_to_array($this->yieldSelect($low, $high), false);
    }

    /**
     * returns intervals that fall within interval range
     *
     * @return generator
     */
    public function yieldSelect(int $low, int $high)
    {
        /**
         * does current node matches?
         */
        if ($this->interval->getEnd() < $high && $this->interval->getStart() > $low) {
            yield $this->interval;
        }

        /**
         * since the node's low value is less than the "select end" value,
         * we must search in the right subtree. If it exists.
         */
        if ($this->right && $this->interval->getStart() < $high) {
            yield from $this->right->yieldSelect($low, $high);
        }
        /**
         * If the left subtree's max exceeds the quiery's low value,
         * so we must search the left subtree as well.
         */
        if ($this->left && $this->left->max > $low) {
            yield from $this->left->yieldSelect($low, $high);
        }

    }
}
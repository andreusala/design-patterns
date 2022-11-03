<?php declare(strict_types=1);

namespace DesignPatterns\Adapter\Model;

class SquarePeg
{
    private int $width;

    public function __construct(int $width = null)
    {
        if ($width) {
            $this->width = $width;
        }
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }
}
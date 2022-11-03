<?php declare(strict_types=1);

namespace DesignPatterns\Adapter\Model\SquarePeg;

use DesignPatterns\Adapter\Model\RoundPeg;
use DesignPatterns\Adapter\Model\SquarePeg;

/**
 * Adapter class to fit square peg like a round peg
 */
class Adapter extends RoundPeg
{
    private SquarePeg $squarePeg;

    public function __construct(
        SquarePeg $squarePeg,
        int $radius = null
    ) {
        parent::__construct($radius);

        $this->squarePeg = $squarePeg;
    }

    /**
     * @return int
     */
    public function getRadius(): int
    {
        return (int) ($this->squarePeg->getWidth() * sqrt(2) / 2);
    }
}
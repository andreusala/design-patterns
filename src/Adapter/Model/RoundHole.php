<?php declare(strict_types=1);

namespace DesignPatterns\Adapter\Model;

class RoundHole
{
    private int $radius;

    public function __construct(int $radius = null)
    {
        if ($radius) {
            $this->radius = $radius;
        }
    }

    /**
     * @return int
     */
    public function getRadius(): int
    {
        return $this->radius;
    }

    /**
     * @param RoundPeg $roundPeg
     * @return bool
     */
    public function fits(RoundPeg $roundPeg): bool
    {
        return $this->getRadius() >= $roundPeg->getRadius();
    }
}
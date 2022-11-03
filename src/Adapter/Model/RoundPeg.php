<?php declare(strict_types=1);

namespace DesignPatterns\Adapter\Model;

class RoundPeg
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
}
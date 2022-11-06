<?php declare(strict_types=1);

namespace DesignPatterns\Composite\Model\Dot;

use DesignPatterns\Composite\Model\Dot;

class Circle extends Dot
{
    private int $radius;

    public function __construct(
        int $x,
        int $y,
        int $radius
    ) {
        parent::__construct($x, $y);

        $this->radius = $radius;
    }

    /**
     * @inheritdoc
     */
    public function draw(): string
    {
        //draw a Circle at X and Y
        return 'o';
    }
}
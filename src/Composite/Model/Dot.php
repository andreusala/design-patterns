<?php declare(strict_types=1);

namespace DesignPatterns\Composite\Model;

class Dot implements Graphic
{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @inheritdoc
     */
    public function draw(): string
    {
        // draw a dot in X and Y
        return '.';
    }

    /**
     * @inheritdoc
     */
    public function move(int $x, int $y): void
    {
        $this->x += $x;
        $this->y += $y;
    }

    /**
     * @inheritdoc
     */
    public function getPosition(): array
    {
        return ['x' => $this->x, 'y' => $this->y];
    }
}
<?php declare(strict_types=1);

namespace DesignPatterns\Prototype\Model;

/**
 * Prototype class Shape
 */
abstract class Shape
{
    protected int $x;
    protected int $y;
    protected string $color;

    public function __construct(Shape $shape = null)
    {
        if ($shape) {
            $this->x = $shape->x;
            $this->y = $shape->y;
//            $this->color = $shape->color;
        }
    }

    /**
     * @return Shape
     */
    public abstract function clone(): Shape;

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * @param int $x
     * @return $this
     */
    public function setX(int $x): Shape
    {
        $this->x = $x;

        return $this;
    }

    /**
     * @param int $y
     * @return $this
     */
    public function setY(int $y): Shape
    {
        $this->y = $y;

        return $this;
    }

    /**
     * @param string $color
     * @return $this
     */
    public function setColor(string $color): Shape
    {
        $this->color = $color;

        return $this;
    }
}
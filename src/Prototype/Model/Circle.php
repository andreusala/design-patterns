<?php declare(strict_types=1);

namespace DesignPatterns\Prototype\Model;

class Circle extends Shape
{
    private int $radius;

    public function __construct(Circle $circle = null)
    {
        // To copy private properties defined in the parent class
        // is necessary call to constructor
        parent::__construct($circle);

        if ($circle) {
            $this->radius = $circle->radius;
        }
    }

    /**
     * @inheritdoc
     */
    public function clone(): Shape
    {
        return new Circle($this);
    }

    /**
     * @param int $radius
     * @return Shape
     */
    public function setRadius(int $radius): Shape
    {
        $this->radius = $radius;

        return $this;
    }
}
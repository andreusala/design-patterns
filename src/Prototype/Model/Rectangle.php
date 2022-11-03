<?php declare(strict_types=1);

namespace DesignPatterns\Prototype\Model;

class Rectangle extends Shape
{
    private int $width;
    private int $height;

    public function __construct(Rectangle $rectangle = null)
    {
        // To copy private properties defined in the parent class
        // is necessary call to constructor
        parent::__construct($rectangle);

        if ($rectangle) {
            $this->width = $rectangle->width;
            $this->height = $rectangle->height;
        }
    }

    /**
     * @inheritdoc
     */
    public function clone(): Shape
    {
        return new Rectangle($this);
    }

    /**
     * @param int $width
     * @return Shape
     */
    public function setWidth(int $width): Shape
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @param int $height
     * @return Shape
     */
    public function setHeight(int $height): Shape
    {
        $this->height = $height;

        return $this;
    }
}
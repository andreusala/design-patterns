<?php declare(strict_types=1);

namespace DesignPatterns\Test\Prototype;

use DesignPatterns\Prototype\Model\Circle;
use DesignPatterns\Prototype\Model\Rectangle;
use DesignPatterns\Prototype\Model\Shape;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    /** @var Shape[] */
    private array $shapes;

    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->shapes = [];
    }

    public function testCloneShapes()
    {
        $circle = new Circle();
        $circle->setRadius(20);
        $circle->setX(10);
        $circle->setY(10);
        $this->shapes[] = $circle;

        // exact copy from $circle object
        $anotherCircle = $circle->clone();
        $this->shapes[] = $anotherCircle;
        $this->assertEquals($circle, $anotherCircle);

        $rectangle = new Rectangle();
        $rectangle->setWidth(10);
        $rectangle->setHeight(20);
        $this->shapes[] = $rectangle;
        $this->assertCount(3, $this->shapes);
    }

    /**
     * @dataProvider shapesData
     * @param Shape[] $shapes
     * @return void
     */
    public function testCloneGroupShapes(array $shapes)
    {
        $shapesCopy = [];

        foreach ($shapes as $shape) {
            $shapesCopy[] = $shape->clone();
        }

        $this->assertEquals($shapesCopy, $shapes);
    }

    /**
     * @return array[]
     */
    public function shapesData(): array
    {
        $circle = new Circle();
        $circle->setRadius(20);
        $circle->setX(10);
        $circle->setY(10);

        $rectangle = new Rectangle();
        $rectangle->setX(20);
        $rectangle->setY(20);
        $rectangle->setHeight(5);
        $rectangle->setWidth(2);

        return [
            'Group of Shapes' => [
                [$circle, $rectangle],
                [$circle->clone(), $rectangle->clone()],
                [$circle, $rectangle, $circle->clone(), $rectangle->clone()],
            ]
        ];
    }
}
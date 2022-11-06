<?php declare(strict_types=1);

namespace DesignPatterns\Test\Composite;

use DesignPatterns\Composite\Model\Dot;
use DesignPatterns\Composite\Model\Dot\Circle;
use DesignPatterns\Composite\Model\Graphic\Composite as GraphicComposite;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    public function testImageEditor()
    {
        $all = new GraphicComposite();
        $all->add(new Dot(1, 2));
        $all->add(new Circle(1, 2, 10));
        $all->add(new Dot(1, 3));

        $draw = $all->draw();

        $this->assertEquals('.o.', $draw);
    }
}
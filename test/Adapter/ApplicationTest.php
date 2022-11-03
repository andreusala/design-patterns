<?php declare(strict_types=1);

namespace DesignPatterns\Test\Adapter;

use DesignPatterns\Adapter\Model\RoundHole;
use DesignPatterns\Adapter\Model\RoundPeg;
use DesignPatterns\Adapter\Model\SquarePeg;
use DesignPatterns\Adapter\Model\SquarePeg\Adapter as SquarePegAdapter;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    public function testAdapterSquarePegIntoRoundHole()
    {
        $hole = new RoundHole(5);
        $roundPeg = new RoundPeg(5);
        $this->assertTrue($hole->fits($roundPeg));

        $smallSquarePeg = new SquarePeg(5);
        $largeSquarePeg = new SquarePeg(10);
//        $hole->fits($smallSquarePeg); this no compile! (incompatible types)

        $smallSquarePegAdapter = new SquarePegAdapter($smallSquarePeg);
        $largeSquarePegAdapter = new SquarePegAdapter($largeSquarePeg);
        $this->assertTrue($hole->fits($smallSquarePegAdapter));
        $this->assertFalse($hole->fits($largeSquarePegAdapter));
    }
}
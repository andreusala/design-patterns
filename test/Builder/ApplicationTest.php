<?php declare(strict_types=1);

namespace DesignPatterns\Test\Builder;

use DesignPatterns\Builder\Model\Car;
use DesignPatterns\Builder\Model\Car\Builder as CarBuilder;
use DesignPatterns\Builder\Model\Director;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    private Director $director;

    protected function setUp(): void
    {
        parent::setUp();

        $this->director = new Director();
    }

    public function testCreateCarSUV()
    {
        $carBuilder = new CarBuilder();
        $suv = $this->director->createSUV($carBuilder);
        $this->assertInstanceOf(Car::class, $suv);
        $this->assertEquals(5, $suv->getSeats());
    }

    public function testCreateCarSport()
    {
        $carBuilder = new CarBuilder();
        $sport = $this->director->createSportCar($carBuilder);
        $this->assertInstanceOf(Car::class, $sport);
        $this->assertEquals(2, $sport->getSeats());
    }
}
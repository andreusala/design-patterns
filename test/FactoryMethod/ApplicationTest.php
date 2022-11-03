<?php declare(strict_types=1);

namespace DesignPatterns\Test\FactoryMethod;

use DesignPatterns\FactoryMethod\Model\Ship;
use DesignPatterns\FactoryMethod\Model\Ship\Factory as ShipFactory;
use DesignPatterns\FactoryMethod\Model\Truck;
use DesignPatterns\FactoryMethod\Model\Truck\Factory as TruckFactory;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    private ShipFactory $shipFactory;
    private TruckFactory $truckFactory;

    protected function setUp(): void
    {
        parent::setUp();

        $this->shipFactory = new ShipFactory();
        $this->truckFactory = new TruckFactory();
    }

    public function testCreateShipAndDeliver()
    {
        $ship = $this->shipFactory->create();
        $result = $ship->deliver();
        $this->assertInstanceOf(Ship::class, $ship);
        $this->assertEquals('I\'m going to deliver the commodities by sea.', $result);
    }

    public function testCreateTruckAndDeliver()
    {
        $truck = $this->truckFactory->create();
        $result = $truck->deliver();
        $this->assertInstanceOf(Truck::class, $truck);
        $this->assertEquals('I\'m going to deliver the commodities by road.', $result);
    }

    public function testTransportDeliveryDirectlyFromAnImplementation()
    {
        $result = $this->shipFactory->deliver();
        $this->assertNotEmpty($result);

        $result = $this->truckFactory->deliver();
        $this->assertNotEmpty($result);
    }

    public function testCreateTruckJustOnce()
    {
        $originalTruck = $this->truckFactory->create('randomTruck');
        $sameTruck = $this->truckFactory->create('randomTruck');
        $otherTruck = $this->truckFactory->create('differentTruck');

        $this->assertSame($originalTruck, $sameTruck);
        $this->assertNotSame($originalTruck, $otherTruck);
    }
}